<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$title or "IDoctor"}}</title>
        <meta name="keywords" content="{{$keyword or ""}}" />
        <meta name="description" content="{{$description or ""}}" />
        <link rel="stylesheet" href="{{asset('/assets/css/app.css')}}">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
            }
            .nav_part{
                width: 600px;
                margin-left: auto;
                margin-right: auto;
                height: 100%;
            }
            .img_nav{
                width: 60px;
                height: 60px;
                background-color: lightgreen;
            }
            .nav_item{
                font-size: 16px;
                padding: 12px;
                background-color: rgba(120,188,197,.8);
                color: #FFF;
                margin: 6px;
                cursor: pointer;
            }
            .top_part{
                padding: 20px;
            }
        </style>
    </head>
    <body>
    <div>
        <div class="container">
            <div class="top_part">
                <div style="float: left">IDoctor</div>
                <div style="float: left;margin-left: 20px">点击注册</div>
                <div style="float: right">GO</div>
            </div>
            <div style="clear: both"></div>
            <div class="nav_part">
                <div class="nav_item" data-des="treatment" onclick="nav_it(this)">重大疾病治疗</div>
                <div class="nav_item" data-des="examination" onclick="nav_it(this)">定制体验</div>
                <div class="nav_item" data-des="escort" onclick="nav_it(this)">跨境医疗及陪护</div>
                <div class="nav_item" data-des="about" onclick="nav_it(this)">ABOUT US</div>
                <div class="nav_item" data-des="beauty" onclick="nav_it(this)">医疗美容(活细胞)</div>
                <div class="nav_item" data-des="rehabilitation" onclick="nav_it(this)">复健理疗</div>
                <div class="nav_item" data-des="expert" onclick="nav_it(this)">国际顶尖医学专家</div>
                <div class="nav_item" data-des="remote" onclick="nav_it(this)">远程会诊</div>
                <div class="nav_item" data-des="contact" onclick="nav_it(this)">联系我们</div>
            </div>
        </div>
    </div>
    </body>
    <script src="{{ asset ("/assets/js/app.js") }}" type="text/javascript"></script>
    <script>
        function nav_it(self){
            var src = $(self).attr("data-des");
            window.location = '{{URL::to("")}}'+ "/" + src;
        }
    </script>
</html>
