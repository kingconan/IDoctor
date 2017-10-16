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
            body {
                background: url('{{URL::to("images/index_bg.jpg")}}') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .nav_img{
                position: absolute;width: 133px;height: 115px
            }
            .nav_word{
                background: url('{{URL::to("images/six_bg.png")}}');
                cursor: pointer;
            }
        </style>
    </head>
    <body>
    <div>
        <div class="container">
            <div class="top_part">
                <div style="float: left">IDoctor</div>
                <div style="float: left;margin-left: 20px" onclick="show_register()">点击注册</div>
                <div style="float: left;margin-left: 20px" onclick="show_login()">登录</div>
                <div style="float: right">GO</div>
            </div>
            <div style="clear: both"></div>
            <div class="nav_part" style="position: relative">
                {{--第一列--}}
                <img class="nav_img" style="left:0;top:0"
                     src="{{URL::to('images/index_b1.png')}}"/>
                <img class="nav_img" style="left:2px;top:80px"
                     src="{{URL::to('images/index_b2.png')}}"/>
                <img class="nav_img" style="left:6px;top:170px"
                     src="{{URL::to('images/index_b3.png')}}"/>
                {{--第二列--}}
                <div class="nav_word nav_img" data-des="treatment" onclick="nav_it(this)"
                     style="left:75px;top:42px;text-align: center;
                     padding-top: 53px;padding-left: 8px;color: white;font-size: 12px">
                    重大疾病治疗
                </div>
                <div class="nav_word nav_img" data-des="examination" onclick="nav_it(this)"
                     style="left:75px;top:125px;text-align: center;
                     padding-top: 53px;padding-left: 8px;color: white;font-size: 12px">
                    定制体验
                </div>
                {{--第三列--}}
                <div class="nav_word nav_img" data-des="escort" onclick="nav_it(this)"
                     style="left:148px;top:0px;text-align: center;
                     padding-top: 53px;padding-left: 8px;color: white;font-size: 12px">
                    跨境医疗及陪护
                </div>
                <div class="nav_word nav_img" data-des="about" onclick="nav_it(this)"
                     style="left:148px;top:83px;text-align: center;
                     padding-top: 53px;padding-left: 8px;color: white;font-size: 12px">
                    ABOUT US
                </div>
                <div class="nav_word nav_img" data-des="beauty" onclick="nav_it(this)"
                     style="left:148px;top:165px;text-align: center;
                     padding-top: 53px;padding-left: 8px;color: white;font-size: 12px">
                    医疗美容(活细胞)
                </div>
                {{--第四列--}}
                <div class="nav_word nav_img" data-des="rehabilitation" onclick="nav_it(this)"
                     style="left:220px;top:42px;text-align: center;
                     padding-top: 53px;padding-left: 8px;color: white;font-size: 12px">
                    复健理疗
                </div>
                <div class="nav_word nav_img" data-des="expert" onclick="nav_it(this)"
                     style="left:220px;top:125px;text-align: center;
                     padding-top: 53px;padding-left: 8px;color: white;font-size: 12px">
                    国际顶尖医学专家
                </div>
                {{--第五列--}}
                <div class="nav_word nav_img" data-des="remote" onclick="nav_it(this)"
                     style="left:292px;top:0px;text-align: center;
                     padding-top: 53px;padding-left: 8px;color: white;font-size: 12px">
                    远程会诊
                </div>
                <img class="nav_img" style="left:298px;top:88px"
                     src="{{URL::to('images/index_b4.png')}}"/>
                <div class="nav_word nav_img" data-des="contact" onclick="nav_it(this)"
                     style="left:292px;top:165px;text-align: center;
                     padding-top: 53px;padding-left: 8px;color: white;font-size: 12px">
                    联系我们
                </div>
                {{--第六列--}}
                <img class="nav_img" style="left:365px;top:40px"
                     src="{{URL::to('images/index_b5.png')}}"/>
                <img class="nav_img" style="left:360px;top:130px"
                     src="{{URL::to('images/index_b6.png')}}"/>
                {{--第七列--}}
                <img class="nav_img" style="left:437px;top:0"
                     src="{{URL::to('images/index_b7.png')}}"/>
                <img class="nav_img" style="left:437px;top:80px"
                     src="{{URL::to('images/index_b2.png')}}"/>
                <img class="nav_img" style="left:437px;top:170px"
                     src="{{URL::to('images/index_b3.png')}}"/>


                {{--<div class="nav_item" data-des="treatment" onclick="nav_it(this)">重大疾病治疗</div>--}}
                {{--<div class="nav_item" data-des="examination" onclick="nav_it(this)">定制体验</div>--}}
                {{--<div class="nav_item" data-des="escort" onclick="nav_it(this)">跨境医疗及陪护</div>--}}
                {{--<div class="nav_item" data-des="about" onclick="nav_it(this)">ABOUT US</div>--}}
                {{--<div class="nav_item" data-des="beauty" onclick="nav_it(this)">医疗美容(活细胞)</div>--}}
                {{--<div class="nav_item" data-des="rehabilitation" onclick="nav_it(this)">复健理疗</div>--}}
                {{--<div class="nav_item" data-des="expert" onclick="nav_it(this)">国际顶尖医学专家</div>--}}
                {{--<div class="nav_item" data-des="remote" onclick="nav_it(this)">远程会诊</div>--}}
                {{--<div class="nav_item" data-des="contact" onclick="show_contact(this)">联系我们</div>--}}
            </div>
        </div>
    </div>
    @include("frontend.modal.modal_register")
    @include("frontend.modal.modal_login")
    @include("frontend.modal.modal_contact")
    </body>
    <script src="{{ asset ("/assets/js/app.js") }}" type="text/javascript"></script>
    <script>
        function nav_it(self){
            var src = $(self).attr("data-des");
            window.location = '{{URL::to("")}}'+ "/" + src;
        }
        function show_register(){
            $('#register').modal("show");
        }
        function show_login(){
            $('#login').modal("show");
        }
        function show_contact(self){
            $('#contact').modal("show");
        }
        function register(self){
            $('#register').modal("hide");
        }
        function login(self){
            $('#login').modal("hide");
        }
        function switch_register(self){
            $('#login').modal("hide");
            $('#register').modal("show");
        }
        function send_question(self){
            $('#contact').modal("hide");
        }
    </script>
</html>
