<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    //
    const META_KEYWORD = "";
    const META_DESCRIPTION = "";

    //首页-
    public function index(Request $request){
        $page = "frontend.welcome";
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION
        ]);
    }

    //关于我们
    public function about(Request $request){
        $page = "frontend.welcome";
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION
        ]);
    }

    //定制体检-
    public function examination(Request $request){
        $page = "frontend.examination";
        $arr = [
            ["Detailed initial consultation","专家初诊断","x","x"],
            ["ECG at rest and under stress","静态和动态心电图","x","x"],
            ["Ultrasound – heart","超声波—心脏","x","x"],
            ["Ultrasound – arteries supplying the brain","超声波—脑动脉供血","","x"],
            ["Ultrasound – abdominal organs","超声波—腹腔","","x"],
            ["Ultrasound – thyroid gland","超声波—甲状腺","","x"],
            ["Pulmonary function","肺功能","x","x"],
            ["Complete laboratory work","实验室血检（明细见下表）","x","x"],
            ["Orthopaedic examination","骨科矫形检查","x","x"],
            ["Final discussion with tailored advice","诊断和定制建议","x","x"],
            ["Accompanied by qualified interpreter","全天医学翻译","x","x"],
        ];
        $arr2 = [
          ["Blood count.partia","血球计数","Immunoglobulin A","免疫球蛋白A","CK","","soluble transferrin receptor","可溶性转铁蛋白受体"],
          ["Differential blood count","差分血细胞计数","Immunoglobulin G","免疫球蛋白G","CK-MB","","SHBG",""],
          ["Reticulocytes","网织红细胞","Immunoglobulin M","免疫球蛋白M","y-GT","","For men: free PSA",""],
          ["Calcium","钙","Immunoglob ulin E","免疫球蛋白E","AST (GOT)","","For men: PSA",""],
          ["Chloride","氯化物","Total protein","总蛋白质","ALT (GPT)","","Oestradiol","雌二醇"],
          ["Potassium","钾","Electrophores is. serum","电泳 血清","Lipase","脂肪酶","fT3",""],
          ["Sodium","钠","Bilirubin","胆红素","aPTT","","fT4",""],
          ["Glucose","葡萄糖","Bilirubin. direct","直接胆红素","Quick","","TSH",""],
          ["HbA1c","","Uric acid","尿酸","Iron","铁","DHEAS",""],
          ["Cholesterol","胆固醇","Urea","尿素","Magnesium","镁","Testosterone","睾酮"],
          ["HDL cholesterol","HDL胆固醇","Creatinine","肌酸酐","BSG","","BNP",""],
          ["HDL cholesterol","","Alkaline phosphatase","碱性磷酸酶","Homocysteine","同型半胱氨酸","25-OHvitamin D",""],
          ["Triglycerides","甘油三酯","ChE","","Lipoprotein","脂蛋白","Vitamin B12","维生素B12"],
          ["Albumin","蛋白蛋","CK","","CRP","","Immunoglobulin A","免疫球蛋白A"],
        ];
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION,
            "arr"=>$arr,
            "arr2"=>$arr2,
            "i"=>1,
        ]);
    }

    //医疗美容-
    public function beauty(Request $request){
        $page = "frontend.beauty";
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION
        ]);
    }

    //重大疾病治疗-
    public function treatment(Request $request){
        $page = "frontend.treatment";
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION
        ]);
    }

    //跨境医疗及陪护-
    public function escort(Request $request){
        $page = "frontend.escort";

        $arr = [
          "1. 预诊断" => [
              "病人递交全部 医学报告，包括但不限于验血报告和CT/MRI 等放射科诊断报告，支付预诊断全部费用",
              "全部医学资料翻译 成英语／德语",
              "资料递交给德国医 院国际医疗部",
              "国际医疗部转角相关诊疗小组，并同时 指派客户经理（第三方）",
              "病人根据要求增补相关检查报 告的翻译件（如有）",
              "国际医疗部转达初 步诊疗意见，意见 包括对于病灶的诊断，合 适的治疗方法和初步的成本，住院天数",
          ],
            "2. 视频或者转诊安排"=>[
                "根据病人意见安排视 频门诊或者 转诊，支付视频门诊费用",
                "视主治医生的日程安排， 进行30分钟视频 会议 ，病人 医院，+ 翻译的一对一咨询问答",
                "视频结束后发布会议小结， 结案或者准备转诊",
                "根据医生建议和 病人意 愿，决定转诊",
            ],
            "3. 转诊准备" => [
                "病人签署 转诊服务同意书 ，提供个人信息，开始转诊准备",
                "医院签发 医疗证明邀请函",
                "病人 办理签证， 订机票，或由本司代办",
                "支付部 分手 术费用，转诊成行",
            ],
            "4. 海外保障" => [
                "手 术前，入 住临时住所，习惯 德国饮食和调整时差",
                "支付 手术全款",
                "入住病房，术前检查",
                "手术",
                "术后总结报告，出院 ，手术费用清算",
            ],
            "5. 术后康复" => [
                "出院后在德国 的短期 康复，回复体 力，必要的康复锻炼",
                "获得医 生允许后 ，准备回国康复",
            ],
            "6. 回国" => [
                "清算德国 全部费用 ，支付全部余款",
                "回国",
            ]
        ];

        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION,
            "arr" => $arr
        ]);
    }

    //复健理疗-
    public function rehabilitation(Request $request){
        $page = "frontend.rehabilitation";
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION
        ]);
    }

    //医学专家-
    public function expert(Request $request){
        $page = "frontend.expert";
        $experts_asklepios = [
            [
                "avatar"=>"",
                "name"=>"约亨·盖尔克博士",
                "name_en"=>"Dr. Jochen Gehrke",
                "title"=>"Asklepios汉堡北部医院老年病学科主任医师",
                "description"=>"德国老年病协会会员，是德国老年病学领域的领头医生之一",
            ],
            [
                "avatar"=>"",
                "name"=>"托马斯·尼迈尔教授",
                "name_en"=>"Prof. Dr. Thomas Niemeyer",
                "title"=>"Asklepios 汉堡圣乔治医院脊柱中心主任医师",
                "description"=>"持有德国脊柱学会DWG 卓越证书口荣登德国焦点杂志评选的2015年度最佳医生（德国范围内顶尖脊柱外科专家之一）",
            ],
            [
                "avatar"=>"",
                "name"=>"于尔根·贝尔教授",
                "name_en"=>"Prof. Dr. Jurgen Behr",
                "title"=>"Asklepios 慕尼黑高廷专科医院肺病科主任医师",
                "description"=>"作为一家德国最大的肺癌及肺病诊断科室之一的负责人（德国范围内顶尖肺病学专家）",
            ],
            [
                "avatar"=>"",
                "name"=>"海克·格拉辛教授",
                "name_en"=>"Prof. Dr. Heiko Graichen",
                "title"=>"Asklepios 林登洛厄医院骨科主任医师",
                "description"=>"荣登德国焦点杂志评选的2014 & 20 15年度最佳医生（德国范围内顶尖膝盖外科专家之一）",
            ],
            [
                "avatar"=>"",
                "name"=>"卡尔－海因兹·佛罗施教授",
                "name_en"=>"Prof. Dr. Karl-Heinz Frosch",
                "title"=>"Asklepios 汉堡阿尔通纳医院妇产科主任医师",
                "description"=>"作为一家德国最大的妇产科医院之一的科室领头人（德国范围内顶尖妇产科专家）",
            ],
            [
                "avatar"=>"",
                "name"=>"托马斯·尼迈尔教授",
                "name_en"=>"Prof. Dr. Boulos Asfour",
                "title"=>"Asklepios 圣奥古斯丁儿竞医院 小儿心胸外科主任医师",
                "description"=>"荣登德国焦点杂志评选的2014 年度最佳医生（德国范围内顶尖小儿心胸外科专家）",
            ],
        ];
        $experts_ethianum = [
            [
                "title"=>"ETHIANUM 诊所的创始人和医疗负责人，Germann 博士（教授）",
                "img"=>"",
                "des"=>"不久前，他曾任具有国际声望的、最大的德国整形、再造和美容手
术公司的总裁。Germann博士（教授）以主任医师的身份担任德
国路德维希港职业合作社型事故诊所的负责人。在他的领导下，这
家诊所具有了极高的世界威望。他是世界范围为最出色的微型手术
专家，在从业以来的三十多年里一直致力于整容手术，并在手部手
术方面有25年的经验。在ETHIANUM落成之时，内务部部长授予
这位教授\"整形手术的罗马教皇\"的称号。Germann教授早在2001
年就获得了罗切斯特大学（纽约）的McCormack奖，以表彰他的
科学成就。他是世界上大量科学天才中的一员。从1999年开始，
他就获得了海德堡大学整容手术和手部手术的教授席位。"
            ],
            [
                "title"=>"整形外科及创伤外科专家
Gerd Gruber 教授（医学博士）",
                "img"=>"",
                "des"=>"他是髋关节重建术、运动系统的超声波扫描和婴幼儿髋关节超声诊
断领域的专家，在全欧洲具有极高的声望。作为整形外科教授，
Gruber精于进行髋关节及膝关节的置换手术，包括骨水泥型和非
骨水泥型外科手术。他所实施的手术，对周围组织的入侵和影响极
小。就置换术使用的设备而言，他只专门使用瑞士制造商Symbios
的产品。"
            ],
            [
                "title"=>"弗朗兹医生
Dr. med. Wolfgang Franz
是外科、创伤外科和运动医学专科医生",
                "img"=>"",
                "des"=>"他是国际认可的膝盖专家，每年做的膝盖手术超过1400例。他通过
微创处理治疗关节炎、十字韧带撕裂和半月板撕裂。专业领域之一
是软骨移植（ArtroCell 3D）和自体同源基质诱导软骨再生（AMIC
）方法。同时他还著有膝盖关节炎和膝盖疾病方面备受关注的书籍
。各种各样保守的措施用完后，还有一些经过考验的手术方法可供
医生采用，从关节镜到微骨折方法。如果膝关节这样无法救治， 格
鲁贝尔医生（Prof. Dr. Gruber）在ETHIANUM做人工膝关节置换"
            ],
            [
                "title"=>"医学博士 - Ralph Ingo Kern",
                "img"=>"",
                "des"=>"医学博士Ralph-Ingo Kern
曾是一名成功的体操运动员。因此，
这位专科医生从事于骨科和创伤外科，并附带脊椎治疗、运动医学、
骨骼放射诊断、针灸和保守骨科的整骨（DVO）资质。其中包括，
例如各种止痛药及质酸的渗润，也包括按摩疗法和针灸。此外，
Kern 博士也是“霍芬海姆足球俱乐部”（TSG 1899 Hoffenheim）
球队队医。
Eva Koellensperger 医学博士
医学博士Eva Koellensperger 是女性私密外科手术（例如阴唇缩
减术或处女膜重建）和现代化疤痕治疗（例如事故、烧伤或肿瘤手
术以及自残割伤）的专家。
在修正疤痕的工作中，这位专业医师采用整形和美容手术方法，如
磨皮、针刺或系统性切除，同时也运用皮肤移植的特殊科技（喷雾
皮肤、印制疗法...）以及其它手段，如皮瓣移植、扩张器等等。她
还为客户提供极为私密的联络氛围。"
            ],
            [
                "title"=>"整形手术科
Matthias Reichenberger 博士",
                "img"=>"",
                "des"=>"Matthias Reichenberger博士是整形手术的专业医生，并在德国
和瑞士的知名大学中获得了博士学位。
他先前也是路德维希港职业合作社型事故诊所的主治医师，后来追
随Germann 教授来到了海德堡。他的专业领域是胸部重建和胸部
整形手术、面部整容手术、减肥后的拉提手术。
Reichenberger 博士致力于创伤治疗、神经再生和避免胸部植入手
术后的脂肪颗粒纤维化的新方法的研究。"
            ],
            [
                "title"=>"Eva Koellensperger 医学博士",
                "img"=>"",
                "des"=>"医学博士Eva Koellensperger 是女性私密外科手术（例如阴唇缩
减术或处女膜重建）和现代化疤痕治疗（例如事故、烧伤或肿瘤手
术以及自残割伤）的专家。
在修正疤痕的工作中，这位专业医师采用整形和美容手术方法，如
磨皮、针刺或系统性切除，同时也运用皮肤移植的特殊科技（喷雾
皮肤、印制疗法...）以及其它手段，如皮瓣移植、扩张器等等。她
还为客户提供极为私密的联络氛围。"
            ],
            [
                "title"=>"全球脊柱外科Juergen Harms 博士（教授）",
                "img"=>"",
                "des"=>"Juergen Harms博士（教授），是全球脊柱外科经验最丰富的专家
之一，擅长整形外科手术和事故外科手术，现就职于ETHIANUM。
Juergen Harms因其研究和新开发的成果而被誉为脊椎病治疗领域
的先驱。他研究出了许多创新成果，其中“Harms钛网融合器”与
“多轴螺钉”被誉为当今脊柱外科手术领域最先进的技术。此前，
Harms教授在Karlsbad的Klinikum Karlsbad-Langensteinbach担
任了30多年的整形外科和脊柱外科的主治医生。
他还是最负盛名的脊柱研究协会“脊柱侧凸研究学会（简称SRS）”
的荣誉会员。"
            ],
            [
                "title"=>"脊椎外科医生医学博士Berk Orakcioglu",
                "img"=>"",
                "des"=>"脊椎外科医生、私人讲师兼医学博士Berk Orakcioglu 是腰背疾病
患者的福音。他是神经外科的专业医师，并具有重症监护治疗的资
质。这位经验丰富的外科医生曾担任海德堡大学医院神经外科分院
脊柱外科主任。
Orakcioglu 博士致力于个性化的治疗方案，从由CT 引导下的疼
痛治疗和采用最新科技的微创外科手术，乃至借助脊柱导航和持续
神经监测进行复杂的脊柱介入。"
            ],
            [
                "title"=>"整形外科运动医学Michael Lehmann 博士",
                "img"=>"",
                "des"=>"Michael Lehmann博士是整形外科和运动医学领域的专家。他在
肩部和臀部手术领域，特别是关节镜及微创治疗领域，享有蜚声国
际的声誉。
在年，他是德国首批采用关节镜对髋关节病进行微创治疗的整形
外科专家。
Michael Lehmann博士还为高水平运动员提供治疗服务，并将高
效的理疗理念用于对其病人的治疗。"
            ],
            [
                "title"=>"骨科医学博士Helge Schmitz",
                "img"=>"",
                "des"=>"Helge Schmitz 博士是骨科专科医生以及Lehmann 博士的合作伙
伴。这位骨科医生是运动伤害领域杰出的诊断学家，特别是肩颈
和膝盖部位的伤害。
归功于多年来在大学医院积累的专业经验，他获得了宝贵的全方位
视野。Schmitz 博士也是门诊手术、人工医疗、脊椎矫正（德国人
工医疗协会）和放射科医生。"
            ],
            [
                "title"=>"预防科医学博士Reinhold Busch",
                "img"=>"",
                "des"=>"经验丰富的预防医学博士Reinhold Busch 是内科、心内科、运动
医学和急诊医学的专业医师。
这位心脏病专家将为您在ETHIANUM 进行各种健康检查并针对心
血管系统方面的问题提供咨询。同时，他也陪同职业及业余运动员
进行运动医学方面的性能诊断。
他在相关诊所作为急诊医师以及心脏病专家的丰富经验显示，预防
医学对其客户来说是何等重要，客户均在经过精确诊断后并带着个
性化的治疗建议离开ETHIANUM：»在当下选择健康的生活，就
能在未来加倍受益于健康——直到终老。"
            ],
            [
                "title"=>"皮肤科和静脉病Sylvia Proske 博士",
                "img"=>"",
                "des"=>"Sylvia Proske博士是可以为女性提供咨询服务的专家。她接受了很
多专业的医学教育，尤其是曾就读于加拿大多伦多大学的皮肤科和
美国波士顿的哈佛医学院。
Proske博士是皮肤科和静脉病的专业医生，另外，她也从事变态性
学、静脉学、直肠病学和男科学方面的工作。
作为激光治疗方面的专家，尤其是肿瘤专家，她与ETHIANUM的
外科专家保持亲密的合作关系。"
            ],
            [
                "title"=>"Peter Goerlich 博士",
                "img"=>"",
                "des"=>"Peter Goerlich博士，ETHIANUM的负责人，从1995年开始，一
直担任保健领域的领导职务。通过一支充满干劲的团队，
我们以过程为导向来进行诊所经营--完全取决于我们病人的利益。
通过建成数字化病人档案和创新的IT结构等措施，等待时间得以缩
短，就诊过程也变得非常舒适。同时，医生或专家可以专注于他们
的病人--无需深陷官僚主义的泥沼，也无需从事行政工作。"
            ],
            [
                "title"=>"运动伤理疗医师Stefan Korn",
                "img"=>"",
                "des"=>"这里有一流运动员的专业理疗医师，即运动伤理疗医师Stefan
Korn。他是一名深受认可的高尔夫理疗医师®和高尔夫物理训练
师®。
在ETHIANUM物理治疗诊所，他采用针对性的训练方案，让客户
在手术后或受伤后迅速康复。他的团队由经验丰富的理疗师组成，
服务包括使用常规的运动疗法（比如手动理疗）以及物理疗法（比
如常规的按摩、手动淋巴引流、电疗）"
            ],
        ];
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION,
            "arr"=>$experts_asklepios,
            "arr_1"=>$experts_ethianum
        ]);
    }

    //联系我们-
    public function contact(Request $request){
        $page = "frontend.welcome";
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION
        ]);
    }

    //远程会诊-
    public function remote(Request $request){
        $page = "frontend.remote";
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION
        ]);
    }

    //子页面新增两个栏目
    //合作伙伴
    public function partner(Request $request){
        $page = "frontend.partner";
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION
        ]);
    }

    //预防医院
    public function prevention(Request $request){
        $page = "frontend.prevention";


        $arr = [
          "ETHIANUM海德堡健康体检能清 晰呈现您当前的身体状况,并告 诉您如何保持健康",
          "您将全程和医学专家联系,包括 第一次会面、身体检查、结果分 析,以及为您量身定制的医疗建 议",
          "面对遗传病的日常应对",
          "基于50,000多次体检后得出的结 论",
          "如何面对压力与睡眠不足",
          "医疗诊断是根据您的实际要求量 身定制",
          "压力分析程序",
          "所有体检结果和医生谈话都将为 您保密",
          "采取整体法:我们并不仅仅分析 您的身体如何应对压力。",
          "我们要评估的是您的大脑如何应 对压力——基于您之前填写过的 一个心理问卷(AVEM测试=职业 压力和应对量表).",
          " 我们的特殊测量单位结果能显示, 您的心脏循环系统是如何应对严 重的压力",
        ];


        $arr1 = [
          [
              "img" => "",
              "title" => "早晨",
              "des" => "早上8.15:到达ETHIANUM后,您将和您的医生见面,医护人员全程为您的健康体检保驾护航。随后, 我们将评估您填写的问卷,之后您便可以和医生进行初次的深入谈话。
",
              "memo" => "具体见后几页的模块"
          ],
            [
                "img" => "",
                "title" => "上午",
                "des" => "首先进行一项全面身体检查,随后是对腹部进行超声波检查。之后,在医疗测试安排出来之前,
                    您可以享用健康早餐。",
                "memo" => ""
            ],
            [
                "img" => "",
                "title" => "中午",
                "des" => "下午一点左右,您可以查到检测结果。若有必要,可以重新进行体检。",
                "memo" => "对结果进行分析后,最后您的预防医疗专家将和您进行深入探讨,并为您的健康发展提出相关建 议。"
            ],
            [
                "img" => "",
                "title" => "结论",
                "des" => "大约下午两点,体检就能结束。几天后,最终报告将以文字形式寄送到您的私人地址,以此让您更 易理解。",
                "memo" => "报告不仅涵盖检查结果,也有相关医疗建议。"
            ],
        ];


        $arr2 = [
          [
              "title" => "高级心脏血管造影诊断",
              "img" => "",
              "des" => "以下检测能筛选循环障碍和患高血压的风险:",
              "items" => [
                  "24小时血压监测","踝肱指数的示波测量"
              ]
          ],
            [
                "title" => "高级成像",
                "img" => "",
                "des" => "最先进的技术有助于确定病理成因:",
                "items" => [
                    "胸部和骨骼系统器官的X射线检查",
                    "计算机断层扫描/心脏CT",
                    "磁共振成像",
                    "检查肌肉不平衡",
                    "磁共振血管造影",
                ]
            ],
            [
                "title" => "高级癌症筛查",
                "img" => "",
                "des" => "提供确定性:用于癌症的早期检测以及在特定情况
下的检查,例如家庭中有癌症史",
                "items" => [
                ]
            ],
            [
                "title" => "结肠镜检查",
                "img" => "",
                "des" => "",
                "items" => [
                    "胃镜检查(胃十二指肠镜检查)",
                    "PSA检测(前列腺癌筛查)",
                    "妇科癌症筛查",
                    "人射光显微术,包括影像文件(皮肤癌筛查)",
                ]
            ],
            [
                "title" => "运动医学",
                "img" => "",
                "des" => "我们提供经认证的、科学的相关运动测试,以此评估您当前的机体表现, 并在心脏循环训练上为您提供建议。",
                "items" => [
                    "自行车或活动平板测力计上进行机体性能诊断","通过乳酸阈值测量法,螺旋测量法,及培训建议来确定个体训练区"
                ]
            ],
            [
                "title" => "旅行医学",
                "img" => "",
                "des" => "无论是工作还是个人:我们很乐意为您的旅行计划提供建议和实用的预防
措施
我们还提供常规的疫苗接种。",
                "items" => [
                    "旅游医学相关考试/咨询",
                    "热带医学相关考试/咨询",
                    "确定是否适合在国外旅行和工作 以德国劳工赔偿保险制度第35号准则为准",
                ]
            ],
            [
                "title" => "脊柱功能分析",
                "img" => "",
                "des" => "我们与骨科医师和物理治疗师一起进行背部和关节的检查:",
                "items" => [
                    "检查背部肌肉的力量和性能以及脊柱的灵活性",
                    "检查关节功能",
                    "胸部和骨骼系统器官的X射线检查",
                    "计算机断层扫描/心脏CT",
                    "磁共振成像",
                    "检查肌肉不平衡",
                ]
            ],
            [
                "title" => "高级实验室检测",
                "img" => "",
                "des" => "如有注明或一经要求:在您的体检当日,可以从我们的合作 伙伴处预定实验室检测
提供确定性:用于癌症的早期检测 以及在特定情况下的检查,例如家庭中有癌症史.",
                "items" => [
                    "HIV检测,肿瘤参数,维生素水平,所有抗体水平, 幽门螺杆菌呼吸试验,甲状腺激素,激素水平, 类风湿关节炎诊断,疫苗滴定度测试"
                ]
            ],
            [
                "title" => "更高要求的体检模块",
                "img" => "",
                "des" => "",
                "items" => [
                    "专业和私人飞行员的飞行体检 (PPL,CPL,ATPL)","潜水体检"
                ]
            ],
        ];
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION,
            "arr" => $arr,
            "arr1" => $arr1,
            "arr2" => $arr2,
        ]);
    }
}


