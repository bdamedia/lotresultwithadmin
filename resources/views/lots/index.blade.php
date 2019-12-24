@extends('layouts.master')

@section('title')
Orders | Application
@endsection

@section('content')
<div>
  <h2>Lottery List</h2>
  <div id="error">
    @if($errors->any())
      <div class="alert alert-danger">
          @foreach($errors->all() as $error)
              <p>{{ $error }}</p>
          @endforeach
      </div>
  @endif
  </div>
  <div id="success">
    @if(Session::has('flash_message'))
      <div class="alert alert-success">
          {{ Session::get('flash_message') }}
      </div>
  @endif
  </div>
  <table class="datatable" id='example'>
    <thead>
      <tr>
        <th>Order Number</th>
        <th>Amount</th>
        <th>Created at</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>


</div>
<div class="space-10"></div>
@endsection

@section('footerjs')
<script>
  /*$(document).ready(function(){
    $('.datatable').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{{ route('lots.serverSide') }}'
      });
  });*/
  $('.datatable').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('lots.serverSide') }}",
      columns: [
          {data: 'orderNumber', name: 'orderNumber'},
          {data: 'amount', name: 'amount'},
          {data: 'created_at', name: 'created_at'},
          {data: 'action', name: 'action', orderable: false, searchable: false},
      ]
  });
</script>
@endsection
