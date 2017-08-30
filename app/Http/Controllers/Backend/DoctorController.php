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

    //首页
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

    //定制体检
    public function examination(Request $request){
        $page = "frontend.welcome";
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION
        ]);
    }

    //医疗美容
    public function beauty(Request $request){
        $page = "frontend.welcome";
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION
        ]);
    }

    //重大疾病治疗
    public function treatment(Request $request){
        $page = "frontend.treatment";
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION
        ]);
    }

    //跨境医疗及陪护
    public function escort(Request $request){
        $page = "frontend.welcome";
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION
        ]);
    }

    //复健理疗
    public function rehabilitation(Request $request){
        $page = "frontend.welcome";
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

    //远程会诊
    public function remote(Request $request){
        $page = "frontend.welcome";
        return view($page, [
            "title" => "IDoctor",
            "keyword" => DoctorController::META_KEYWORD,
            "description" => DoctorController::META_DESCRIPTION
        ]);
    }
}


