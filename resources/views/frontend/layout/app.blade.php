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
            .sidebar{
                float: left;
                width: 200px;
                padding: 30px;
                margin-left: -100%;
            }
            .container{
                float: left;
                width: 100%;
                padding-left: 200px;
                position: relative;
            }
            .section_title{
                font-size: 24px;
                color: rgb(120,188,197);
                border-bottom: 4px solid rgb(120,188,197);
                line-height: 40px;
                margin-bottom: 12px;
                float: left;

            }
            .section_description{
                clear: both;
                font-size: 14px;
                line-height: 28px;
                color: grey;
            }
            .section_blank{
                clear: both;
                height: 30px;
                width: 100%;
            }
            .nav_item{
                padding: 12px;
                cursor: pointer;
                position: relative;
            }
            .nav_item:hover{
                color: rgb(120,188,197);
            }
            .affix{
                top: 0;
            }



        </style>
    </head>
    <body>
    <div style="position: relative;width: 800px;margin-left: auto;margin-right: auto;background-color: whitesmoke">
        <div class="container">
            @yield('content')
            <div style="clear: both;height: 30px"></div>
        </div>
        <div class="sidebar" id="sidebar">
            <div data-spy="affix" data-offset-top="30">
                <div class="nav_item" data-des="about" onclick="nav_it(this)">ABOUT US</div>
                <div class="nav_item" data-des="examination" onclick="nav_it(this)">定制体验</div>
                <div class="nav_item" data-des="rehabilitation" onclick="nav_it(this)">复健理疗</div>
                <div class="nav_item" data-des="remote" onclick="nav_it(this)">远程会诊</div>
                <div class="nav_item" data-des="expert" onclick="nav_it(this)">国际顶尖医学专家</div>
                <div class="nav_item" data-des="" onclick="nav_it(this)">合作伙伴</div>
                <div class="nav_item" data-des="beauty" onclick="nav_it(this)">医疗美容(活细胞)</div>
                <div class="nav_item" data-des="" onclick="nav_it(this)">预防医学</div>
                <div class="nav_item" data-des="escort" onclick="nav_it(this)">跨境医疗及陪护</div>
                <div class="nav_item" data-des="treatment" onclick="nav_it(this)">重大疾病治疗</div>
                <div class="nav_item" data-des="contact" onclick="nav_it(this)">联系我们</div>
            </div>
        </div>


        <div style="clear: both"></div>
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
