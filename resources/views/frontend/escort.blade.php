@extends('frontend.layout.app')

@section('content')
<div style="position: relative;padding: 30px">
    <div style="height: 300px;width: 600px;background-color: lightblue">

    </div>
    <div style="height: 30px"></div>
    <div class="section_title">跨境医疗流程</div>
    <div style="clear: both">
        @foreach($arr as $key=>$value)
            <div>{{$key}}</div>
            <div>
                @foreach($value as $item)
                    <div>{{$item}}</div>
                @endforeach
            </div>
            <div style="height: 20px"></div>
        @endforeach
    </div>
    <div class="section_blank"></div>
</div>
@endsection