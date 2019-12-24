<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Yajra\Datatables\Datatables;
use App\Orders;
use Session;
use Redirect;
use App\Result;
use Goutte\Client;
use App\RegionCompany;

class LotsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getCurrentResult(){
        $url = "https://xosodaiphat.com/xsmb-xo-so-mien-bac.html";

        $result = Result::all();
        echo  "<pre>";
        print_r($result);

        //print_r($result[0]['lottery_company']);
        
        echo  "<pre>......................";
        $data = Result::where('lottery_company', 'XSMB')->get();

        echo  "<pre>";
        print_r($data[0]['lottery_company']);
        die();


        $resultData = crawlUrl($url);
        $result = new Result();
        foreach ($resultData as $res){
            echo  "<pre>";
            print_r($resultData);
            die();
            
            $data = Result::where('lottery_region',$res['lottery_region'])->where('lottery_company',$res['lottery_company'])->where('result_day_time',$res['result_day_time'])->get();
            if($data->count()){
            continue;
            }else{
                $result->lottery_region = $res['lottery_region'];
                $result->lottery_company = $res['lottery_company'];
                $result->result_day_time = $res['result_day_time'];
                $i = 1;
                foreach ($res['data'] as $key=>$detailsData){
                    if($key == 'board'){
                        $name = $key;
                        $result->{$name} = json_encode($res['data'][$key]);
                    }else{
                        $name = "prize_".$i;
                        $result->{$name} = json_encode(array($key=>$res['data'][$key]));
                        $i++;
                    }
                }
                ///$result->save();
            }
        }
       // exit();
    }

    public function getAllRegion($company='XSQNA'){
        $resultXsmt = Result::where('lottery_region', 'XSMT')->where('lottery_company', strtoupper($company))->orderBy('created_at', 'desc')->get();
        echo "<pre>";
        echo "data....";
        print_r($resultXsmt);
        die();
        $data['content'] = $resultXsmt;
        $comp = Result::where('lottery_region', 'XSMT')->distinct('lottery_company')->orderBy('created_at', 'desc')->get();
        $data['comp'] = $comp;
        $data['companyName'] = strtoupper($company);
        $data['region'] = "xsmt";
        //return view('currentResult',$data)->render();
        //return view('xsmtResult')->with($data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lots.index');
    }
    public function serverside()
    {
      //$orders = App\Orders::select(['orderID', 'orderNumber', 'amount']);
      $orders = Orders::select(['_id','orderNumber', 'amount', 'created_at'])->where('user_id',Auth::guard('web')->id())->get();

      return Datatables::of($orders)
      ->addColumn('action', function ($orders) {
              return '<a href="/lots/edit/'.$orders->_id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>&nbsp;&nbsp;<a href="/lots/delete/'.$orders->_id.'" class="btn btn-xs btn-primary" onclick="return confirm(\'Are you sure?\')"><i class="glyphicon glyphicon-delete"></i> Delete</a>';
          })
      ->removeColumn('_id')
      ->make();
    }
    public function edit($id)
    {
        $data['order']=Orders::where('_id',$id)->first();
        return view('lots.edit',$data);
    }

    public function update($id, Request $request)
    {
        $order=Orders::findOrFail($id);
        $this->validate($request, [
          'orderNumber' => 'required|max:10',
          'amount' => 'required|numeric',
    ]);

    $input_array = $request->all();

    $order->fill($input_array)->save();

    // Alternative Way to update data

    /*$order_rslt=Orders::where('orderID',$id)->update([
        'orderNumber' => $input_array['orderNumber'],
          'amount' => $input_array['amount'],
      ]);
      */

    Session::flash('flash_message', 'Order successfully Updated!');

    return redirect()->back();

    }

    public function add()
    {
        $result = RegionCompany::distinct('lottery_region')->get();
        $data['content'] = $result;
        return view('lots.add')->with($data);
    }

    public function dropdownlist(Request $request, $region)
    {
        //$result = Result::where('lottery_region', $region)->get();
        $result = Result::where('lottery_region', $region)->distinct('lottery_company')->orderBy('created_at', 'desc')->get();
        return $result;
    }

    public function store(Request $request)
    {
        $order=new Orders;
        $this->validate($request, [
          'orderNumber' => 'required|max:10',
          'amount' => 'required|numeric',
    ]);

    $input_array = $request->all();
    $input_array['user_id']=Auth::guard('web')->id();

    $order->fill($input_array)->save();

    // Alternative Way to add data

    /*$order_rslt=Orders::create(array(
        'orderNumber' => $input_array['orderNumber'],
          'amount' => $input_array['amount'],
          'user_id' => $input_array['user_id'],
      ));
      */

    Session::flash('flash_message', 'Order successfully Added!');

    //return redirect()->back();
    return Redirect::to('lots/edit/'.$order->_id);

    }

    public function delete($id)
    {
        $order=Orders::findOrFail($id);
        $order->delete();
        Session::flash('flash_message', 'Order successfully Deleted!');

        //return redirect()->back();
        return Redirect::to('lots');
    }
}
