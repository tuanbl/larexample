@extends('views.master')
@section('sidebar')

    <p>This is sub blade </p>
    @parent('sidebar')
@stop
@section('title','sub template')
@section('content')
    Đây là trang sub<br>
    <?php
        $hoten = "<br>Nguyễn Văn Tèo";
        $diem = 9;
    ?>
    {{$hoten}}
    {!!$hoten!!}
    @if($diem<=5)
        Học sinh Yếu
    @elseif($diem >5 && $diem <=7)
        Học sinh Trung bình
    @else
        Học sinh giỏi
    @endif
    </br>
    {{!isset($diem) ? $diem : "Không tồn tại điệm"}}
    <br>

    {{$diemm or 'Không tồn tại biến điểm'}}
    <br>

    @for ($i=0;$i<10;$i++)
        So thứ tự: {!! $i !!} <br>
    @endfor
    <br><br>
        <hr/>
        <?php
             $i=0;
        ?>
    @while($i<10)
    Số thứ nự {{$i}}<br>
    <?php
        $i++;
    ?>

    @endwhile
    <hr>
    <?php
        $array = ['com','chao','canh'];

    ?>
    @foreach($array as $k=>$v)

        hôm nay ăn {{$k}}:{{$v}}<br>


    @endforeach
        @extends('views.layout')








@stop