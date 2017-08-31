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

    //医学专家
    public function expert(Request $request){
        $page = "frontend.welcome";
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION
        ]);
    }

    //联系我们
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
}


