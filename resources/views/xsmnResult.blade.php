@include('header')

<div class="main-content">
    <div class="container">
    <div class="row margin-b">
    <div class="col-xs-12 col-sm-12 col-md-6">

    <div class="row">
    <div class="col-xs-12">
        @php $g = 1; @endphp
        @foreach($content as $printresult)


    <div class="block" id='xsmb-{{ $g }}'>
        <div class="block-main-heading">
            <h1>{{ $printresult->lottery_region }} - {{ $printresult->lottery_company }}</h1>
            </div>
            <div class="list-link">
            <h2 class="class-title-list-link">
            {{--<a href="/xsmb-xo-so-mien-bac.html" title="XSMB" class="u-line">XSMB</a><span>»</span>
            <a href="/xsmb-thu-6.html" title="XSMB Thứ 6" class="u-line">XSMB Thứ 6</a><span>»</span>--}}
            <a href="#" title="{{ $printresult->lottery_region }}  {{ $printresult->result_day_time->toDateTime()->format('d/m/Y') }}" class="u-line">{{ $printresult->lottery_region }}  {{ $printresult->result_day_time->toDateTime()->format('d/m/Y') }}</a>
            </h2>
            </div>
            <div class="block-main-content">
            <table class="table table-bordered table-striped table-xsmb">
            <tbody>
            <tr>
            <td style="width: 15%"> @php $prize_1 = json_decode($printresult->prize_1); @endphp {{ key($prize_1) }}</td>
            <td class="text-center">
                @foreach($prize_1->{key($prize_1)} as $k=>$p1)
                    <span class=" special-code div-horizontal">{{ $p1 }} </span>
                    @endforeach
            </td>
            </tr>

            <tr>
            <td>@php $prize_2 = json_decode($printresult->prize_2);   @endphp {{ key($prize_2) }}</td>
            <td class="text-center">
                @if(count((array) $prize_2) <= 1)
                    @foreach($prize_2->{key($prize_2)} as $k=>$p2)

                    <span class="number-black-bold div-horizontal">{{ $p2 }} </span>
                @endforeach
                @else
                    @foreach($prize_2->{key($prize_2)} as $k=>$p2)
                        <span class="col-xs-4 special-code div-horizontal">{{ $p2 }} </span>
                    @endforeach
                @endif
            </td>
            </tr>

            <tr>
            <td>@php $prize_3 = json_decode($printresult->prize_3);  @endphp {{ key($prize_3) }}</td>
            <td class="text-center">
                @if(count((array) $prize_3) <= 1)
                    @foreach($prize_3->{key($prize_3)} as $k=>$p3)
                    <span class="number-black-bold div-horizontal">{{ $p3 }} </span>
                @endforeach
                   @else
                    @foreach($prize_3->{key($prize_3)} as $k=>$p3)
                        <span class="number-black-bold div-horizontal">{{ $p3 }} </span>
                    @endforeach
                @endif
            </td>
            </tr>

            <tr>
                <td>@php $prize_4 = json_decode($printresult->prize_4);  @endphp {{ key($prize_4) }}</td>
                <td class="text-center">
                    @if(count((array) $prize_4) <= 1)

                        @foreach($prize_4->{key($prize_4)} as $k=>$p4)
                            <span class="number-black-bold div-horizontal">{{ $p4 }} </span>
                        @endforeach
                    @else
                        @foreach($prize_4->{key($prize_4)} as $k=>$p4)
                            <span class="number-black-bold div-horizontal">{{ $p4 }} </span>
                        @endforeach
                    @endif
                </td>
            </tr>

            <tr>
                <td>@php $prize_5 = json_decode($printresult->prize_5);  @endphp {{ key($prize_5) }}</td>
                <td class="text-center">
                    @if(count((array) $prize_5) <= 1)
                        @foreach($prize_5 as $k=>$p5)
                            <span class="number-black-bold div-horizontal">@php if(count((array) $p5) > 0 ){ $p5 = implode(', ',(array) $p5); }  @endphp {{ $p5  }} </span>
                        @endforeach

                    @else
                        @foreach($prize_5->{key($prize_5)} as $k=>$p5)
                            <span class="number-black-bold div-horizontal">{{ $p5 }} </span>
                        @endforeach
                    @endif
                </td>
            </tr>

            <tr>
                <td>@php  $prize_6 = json_decode($printresult->prize_6);  @endphp {{ key($prize_6) }}</td>
                <td class="text-center">
                    @if(count((array) $prize_6) <= 1)
                        @foreach($prize_6 as $k=>$p6)
                            <span class="number-black-bold div-horizontal">@php if(count((array) $p6) > 0 ){ $p6 = implode(', ',(array) $p6); }  @endphp {{ $p6 }} </span>
                        @endforeach
                    @else
                        @foreach($prize_6->{key($prize_6)} as $k=>$p6)
                            <span class="number-black-bold div-horizontal">{{ $p6 }} </span>
                        @endforeach
                    @endif
                </td>
            </tr>

            <tr>
                <td>@php $prize_7 = json_decode($printresult->prize_7);  @endphp {{ key($prize_7) }}</td>
                <td class="text-center">
                    @if(count((array) $prize_7) <= 1)
                        @foreach($prize_7 as $k=>$p7)
                            <span class="number-black-bold div-horizontal">@php if(count((array) $p7) > 0 ){ $p7 = implode(', ',(array) $p7); }  @endphp {{ $p7 }} </span>
                        @endforeach
                    @else
                        @foreach($prize_7->{key($prize_7)} as $k=>$p7)
                            <span class="number-black-bold div-horizontal">{{ $p7 }} </span>
                        @endforeach
                    @endif
                </td>
            </tr>

            <tr>
                <td>@php $prize_8 = json_decode($printresult->prize_8);   @endphp {{ key($prize_8) }}</td>
                <td class="text-center">
                    @if(count((array) $prize_8) <= 1)
                        @foreach($prize_8 as $k=>$p8)
                            <span class="number-black-bold div-horizontal">@php if(count((array) $p8) > 0 ){ $p8 = implode(', ',(array) $p8); }  @endphp {{ $p8 }} </span>
                        @endforeach
                    @else
                        @foreach($prize_8->{key($prize_8)} as $k=>$p8)
                            <span class="number-black-bold div-horizontal">{{ $p8 }} </span>
                        @endforeach
                    @endif
                </td>
            </tr>

            <tr>
                <td>@php $prize_9 = json_decode($printresult->prize_9);   @endphp {{ key($prize_9) }}</td>
                <td class="text-center">
                    @if(count((array) $prize_9) <= 1)
                        @foreach($prize_9 as $k=>$p9)
                            <span class="number-black-bold div-horizontal">@php if(count((array) $p9) > 0 ){ $p9 = implode(', ',(array) $p9); }  @endphp {{ $p9 }} </span>
                        @endforeach
                    @else
                        @foreach($prize_9->{key($prize_9)} as $k=>$p9)
                            <span class="number-black-bold div-horizontal">{{ $p9 }} </span>
                        @endforeach
                    @endif
                </td>
            </tr>

       {{--     @if($printresult->prize_10)
            <tr>
                <td>@php $prize_10 = json_decode($printresult->prize_10);    @endphp {{ key($prize_10) }}</td>
                <td class="text-center">
                    @if(count((array) $prize_10) <= 1)
                        @foreach($prize_10 as $k=>$p10)
                            <span class="col-xs-3 special-prize-sm div-horizontal">
                                @php if(count((array) $p10) > 1 ){ $p10 = implode(', ',$p10); }elseif(count((array) $p10) == 1){  $p10 = $p10; }  @endphp
                                {{ $p10 }}
                            </span>
                        @endforeach
                    @else
                        @foreach($prize_10->{key($prize_10)} as $k=>$p10)
                            <span class="col-xs-3 special-prize-sm div-horizontal">{{ $p10 }} </span>
                        @endforeach
                    @endif
                </td>
            </tr>
            @endif--}}

            </tbody>
            </table>
            </div>
            <hr class="line-header"/>
            <div class="block-main-content">

            <span class="link-pad-left padding10">Lô tô miền Bắc</span>

            <table class="table table-bordered table-loto" style="margin-bottom: 0;">
            <tr>
            <th class="col-md-2" style="width: 10%;">Đầu</th>
            <th class="col-md-4">Lô Tô</th>
            </tr>
                @if($printresult->board)
                    @php $boardRes = json_decode($printresult->board) @endphp
                @foreach($boardRes as $ke=>$bingoData)
                <tr>
                    <td class="text-center">{{ $ke }}</td><td>{{ $bingoData }}</td>
                </tr>
                @endforeach
                @endif

            </table>
            </div>
            <div class="link-statistic">
            <ul>
            <li>Xem thống kê <a href="/cau-mien-bac/cau-bach-thu.html" title="Cầu bạch thủ miền Bắc">Cầu bạch thủ miền Bắc</a></li>
            <li>Xem thống kê <a href="/thong-ke-lo-xien.html" title="Lô xiên miền Bắc">Lô xiên miền Bắc</a></li>
            <li>Tham khảo <a href="/thong-ke-xsmb-c2579-article.html" title="Thống kê XSMB">Thống kê XSMB</a></li>
            <li><a href="/">KQXS</a> miền Bắc hôm nay siêu tốc - chính xác, trực tiếp <a
                    href="/xsmb-xo-so-mien-bac.html">XSMB</a> lúc 18h15 mỗi ngày</li>
            </ul>
            </div>
        <p class="text-right margin-10 hidden-xs hidden-sm">
        <a href="/in-ve-do.html" data-date="13-12-2019" data-groupname="xsmb" class="btn btn-danger btn-invedo"
           role="button">In Vé Dò</a>
        </p>
        </div>
            @php $g++; @endphp
    @endforeach


    </div>
    </div>


    </div>


        @include('sidebar')
    </div>
    </div>
</div>
@include('footer')
