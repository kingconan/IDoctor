@extends('frontend.layout.app')

@section('content')
<div style="position: relative;padding: 30px">
    <div class="section_title">Ethianum海德堡预防医学健康体检: 帮助建立全面预防</div>
    <div class="section_blank"></div>

    <div>
        <div style="float: left;width: 100%;padding-right: 200px;height: 400px;">
            <img width="100%" height="400px" style="background-color: lightblue" />
        </div>
        <div style="float: left;width: 200px;margin-left: -200px">
            @foreach($arr as $item)
                <div>{{$item}}</div>
                <br/>
            @endforeach
        </div>
    </div>


    <div class="section_blank"></div>




    <div class="section_title">您在Ethianum健康体检一天行程 <br/>
        在这里所花的时间是对您健康的投资:精心制定的时间表。可以 <br/>
        让您与预防专家充分交流</div>
    <div class="section_blank"></div>
    <div>
        @foreach($arr1 as $item)
            <div>
                <div style="float: left;width: 100%;padding-left: 200px;">
                    {{$item["title"]}}<br/>
                    {{$item["des"]}}<br/>
                    {{$item["memo"]}}
                </div>
                <div style="float: left;width: 180px;height: 120px;background-color: lightblue;margin-left: -100%">

                </div>
                <div style="clear: both;"></div>
            </div>
            <div style="clear: both;height: 20px"></div>
        @endforeach
    </div>
    <div class="section_blank"></div>





    <div class="section_title">检查项目具体内容</div>
    <div class="section_blank"></div>
    <div style="float: left;width: 33%;text-align: center">
        <img style="width: 200px;height: 200px;background-color:lightblue" />
        <div>心肺血管系统——肺</div>
    </div>
    <div style="float: left;width: 33%;text-align: center">
        <img style="width: 200px;height: 200px;background-color:lightblue" />
        <div>胃肠道——内脏器官</div>
    </div>
    <div style="float: left;width: 33%;text-align: center">
        <img style="width: 200px;height: 200px;background-color:lightblue" />
        <div>血管</div>
    </div>
    <div style="float: left;width: 33%;text-align: center">
        <img style="width: 200px;height: 200px;background-color:lightblue" />
        <div>眼——耳</div>
    </div>
    <div style="float: left;width: 33%;text-align: center">
        <img style="width: 200px;height: 200px;background-color:lightblue" />
        <div>实验室检测</div>
    </div>
    <div class="section_blank"></div>





    <div class="section_title">定制体检 - 高端体检模块</div>
    <div class="section_blank"></div>
    @foreach($arr2 as $item)
    <div>
        <div style="float: left;width: 100%;padding-right: 230px">
            {{$item["title"]}}<br/>
            {{$item["des"]}}<br/>
            @if($item["items"])
                @foreach($item["items"] as $items)
                    • {{$items}}<br/>
                @endforeach
            @endif
        </div>
        <div style="float: left;width: 200px;height: 200px;margin-left: -200px;background-color: lightblue">

        </div>
    </div>
    <div class="section_blank"></div>
    @endforeach
    <div class="section_blank"></div>







    <div class="section_title">压力分析:身体如何应对压力</div>
    <div class="section_blank"></div>
    <div>
        <div style="float: left;width: 100%;padding-right: 300px">
            如果您身心健康,您可以在压力大的时候动用储 备能量。然而,如果您经受持续的压力,且最重 要的是遭受精神压力或缺乏体育活动,那么此时 压力就可以让您生病。 植物性神经系统失调可以预先被检测出来。且一 旦识别,我们就可以采取针对性的对策。 压力分析程序. 我们再次采取整体法:我们并不仅仅分析您的身 体如何应对压力。 我们要评估的是您的大脑如何应对压力——基于 您之前填写过的一个心理问卷(AVEM测试=职业 压力和应对量表). 我们的特殊测量单位结果能显示,您的心脏循环 系统是如何应对严重的压力: 随后进行评估。在最后深入访谈的情况下,医师 会解释您的心脏是否能在严重压力下快速恢复, 或机体是否会长期受损。 除此测试外,还可附加一个心理测试作为补充.
        </div>
        <div style="float: left;width: 300px;margin-left: -300px;">
            <img width="300px" height="200px" style="background-color: lightblue" />
            <div>
                一台计算机程序能模拟日常压力,要求执行约30 分钟的一系列任务——时间、决策压力、紧张和 放松依次轮流——而另一台电脑则监测你的心跳。
            </div>
        </div>
    </div>
    <div class="section_blank"></div>





    <div class="section_title">心理检查:高效运动的最佳策略</div>
    <div class="section_blank"></div>
    <div>
        <div style="float: left;width: 100%;padding-right: 300px">
            想要解决日常生活中的问题,但却无暇拓展训练 课程,那么参加我们的高效运动训练,您可以得 到科学指导,获益良多。持续半天的心理检查能 满足高效工作者和主管的特殊需求。 约90分钟的高效心理评估和综合评估结果 两个小时的训练课程,用于发展运动心理策略, 您可以运用该策略来维持一个长期的心理表现。
        </div>
        <div style="float: left;width: 300px;height: 100px;margin-left: -300px;background-color: lightblue">

        </div>
    </div>
    <div class="section_blank"></div>
    <div>
        <div style="float: left;width: 100%;height: 100px;padding-right: 300px;">
            <img  style="background-color: lightblue;width: 100%;height: 100px"/>
        </div>
        <div style="float: left;width: 300px;margin-left: -300px">
            1999年以来,Mayer教授(MD)一直协助高效 运动员,担任运动心理学家,面向团队包括德国 国家滑雪和冰球队以及TSG1899霍芬海姆队. 他来自萨尔布吕肯的德国应用科学大学,任职于 心理与教育学院,担任预防和健康管理的讲师, 其研究领域是运动心理学.
        </div>
    </div>
    <div class="section_blank"></div>







    <div class="section_title">特色业务:公司高管个人健康管理方案</div>
    <div class="section_blank"></div>
    <div>
        在众多预防服务中心中,我们汲取了超过50,000次体检经验,并追求卓越的品质,成就您的非凡之选。 在Rhine-Neckar metro politan区域 的知名公司都成为ETHIANUM 的客户。我们很乐意依您所需, 为您量身定做。
    </div>
    <div>
        <div style="float: left;width: 100%;padding-right: 300px">
            在ETHIANUM 预防中心您可以享受:<br/>
            •定制服务协议 <br/>
            •一定条件下的骨科整合或皮肤病筛查检验 <br/>
            •额外模块:压力分析和心理检查 <br/>
            •与各自预防专家进行不限时的自由会谈 <br/>
            •综合评估结果<br/>
            •最优时间安排会诊<br/>
            •优化的检查程序<br/>
            •最先进的医疗技术设备 •独特的环境,确保您的满意度
        </div>
        <div style="float: left;width: 200px;margin-left: -300px;background-color: lightblue">

        </div>
    </div>
    <div class="section_blank"></div>
    <div class="section_blank"></div>
    <div class="section_blank"></div>
    <div class="section_blank"></div>
</div>
@endsection