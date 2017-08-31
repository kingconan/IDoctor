@extends('frontend.layout.app')

@section('content')
<div style="position: relative;padding: 30px">
    <div class="section_title">Asklepios医疗集团-布吕曼健康中心</div>
    <div>
        <div class="section_description" style="float: left;width: 400px">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Asklepios集团是德国最大的私人诊所和医疗保健机构之一。成立30多年
            来，该集团一向秉承负责任和可持续的发展战略，强调高水平的安全与质
            量管控。该集团旗下目前有超过150个医疗机构，超过46,000名员工，遍
            布整个德国。2015年，约有230万名患者到Asklepios就诊。作为德国首
            屈一指的医疗集团，Asklepios一直注重高质量的医疗管理，并能够最大
            限度地调动旗下各个专科医院相互配合，为患者提供最优化的治疗方案。<br/><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            布吕曼健康中心依托德国北部最大规模的圣乔治分院，由各学科权威医师
            担任各科室体检医师，提供完美体检和诊疗体验。坚信“预防胜于治疗，
            保健在于日常”的理念。<br/><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            早在1988年，布吕曼博士就设立基金会，用于帮助儿童和年轻人建立可持
            续的个人健康预防机制，来降低重大疾病的发病率，把健康掌握在自己的
            手中。在布吕曼健康中心，我们的体检项目比你想象的还要细致，因此我
            们得以深入了解每个客户的健康状况和对特定疾病的罹患风险，从而指导
            客户养成健康生活习惯来降低风险，或者及早介入治疗，将疾病扼杀在早
            期阶段。
        </div>
        <div style="float: right;width: 200px;height: 300px;
        background-color: lightblue;margin-right: 20px">

        </div>
    </div>
    <div class="section_blank"></div>

    <div class="section_title">优秀的医生、丰富的经验积累和尖端的设备保证了
        布吕曼中心在以下项目的的国际领先优势</div>
    <div>
        <div class="section_description" style="float: left;width: 400px">
            <table class="table">
                <tr>
                    <td style="width: 100px">实验室检验</td>
                    <td>极度深度细致的尿检和血检， 测试深度远超欧洲同类体
                        检项目，可早期发现疾病或健康隐患， 了解器官和代谢
                        功能，微量元素供给， 维生素状况，激素水平和免疫力。</td>
                </tr>
                <tr>
                    <td>器官和血管的超声检查</td>
                    <td>腹部脏器，甲状腺，供应脑的血管，弹性成像，超声心
                        电图</td>
                </tr>
                <tr>
                    <td>头部核磁共振</td>
                    <td>检查大脑，颅骨部分，血管，脑室与脑脊液和颅骨的其
                        他软骨部分，评估脑梗塞等疾病的风险</td>
                </tr>
                <tr>
                    <td>超声心动图和心电图</td>
                    <td>心脏静息和运动状态下的心电图，了解心律和血压危险
                        值</td>
                </tr>
                <tr>
                    <td>螺旋测量/肺功能测试</td>
                    <td>运动前后的呼吸和肺活量曲线测定</td>
                </tr>
                <tr>
                    <td>3T高清核磁共振扫描</td>
                    <td>精度高达3T的核磁共振设备国内稀有，成像清晰，对于
                        骨科等早期病灶检验效果明显</td>
                </tr>
            </table>
        </div>
        <div style="float: right;width: 200px;height: 300px;
        background-color: lightblue;margin-right: 20px">

        </div>
    </div>
    <div class="section_blank"></div>

    <div class="section_title">预防胜于治疗-布吕曼中心领先的不仅是设备，还有理念</div>
    <div>
        <div class="section_description" style="float: left;width: 400px">
            <div>布吕曼健康中心高端体检全面套餐</div>
            <div>一家好医院，解决所有健康问题</div>
            <div>强身健体是最好良药</div>
            <div>了解自己的身体是一切治疗的基础</div>
            <div>100% 选项定制的个人体检计划</div>
            <div>教会你养生健体的方法</div>
            <div>8 个方面提供完整的健康管理方案：</div>
            <div>营养</div>
            <div>补充草本膳食</div>
            <div>合理运动</div>
            <div>维生素的摄入</div>
            <div>减压</div>
            <div>微量元素和矿物质</div>
            <div>睡眠</div>
            <div>激素</div>
        </div>
        <div style="float: right;width: 200px;height: 300px;
        background-color: lightblue;margin-right: 20px">

        </div>
    </div>
    <div class="section_blank"></div>

    <div class="section_title">布吕曼健康中心高端体检基础套餐及实验室检验项目</div>
    <div>
        <div class="section_description" style="float: left;width: 800px">
            <table class="table">
                <thead>
                    <th></th>
                    <th colspan="2">医学检查项目（无重大已知疾病人群）</th>
                    <th>基础计划</th>
                    <th>优选计划</th>
                </thead>
                <tbody>
                    @foreach($arr as $a)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$a[0]}}</td>
                            <td>{{$a[1]}}</td>
                            <td>{{$a[2]}}</td>
                            <td>{{$a[3]}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <table class="table">
                <thead>
                    <th style="width: 100px">化验项目</th>
                    <th style="width: 100px"></th>
                    <th style="width: 100px">化验项目</th>
                    <th style="width: 100px"></th>
                    <th style="width: 100px">化验项目</th>
                    <th style="width: 100px"></th>
                    <th style="width: 100px">化验项目</th>
                    <th style="width: 100px"></th>
                </thead>
                <tbody>
                @foreach($arr2 as $a)
                    <tr>
                        <td>{{$a[0]}}</td>
                        <td>{{$a[1]}}</td>
                        <td>{{$a[2]}}</td>
                        <td>{{$a[3]}}</td>
                        <td>{{$a[4]}}</td>
                        <td>{{$a[5]}}</td>
                        <td>{{$a[6]}}</td>
                        <td>{{$a[7]}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div style="float: right;width: 100px;height: 300px;
        background-color: lightblue;margin-right: 20px">

        </div>
    </div>
    <div class="section_blank"></div>
</div>
@endsection