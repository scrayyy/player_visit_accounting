<?php
namespace App\Helpers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Models\Tunuqi_category;
use App\Models\Company_req;



class AppHelper
{

 

    public function company_info($column){

        $info = Company_req::where('company_req_id', '1')->first();
        return $info->$column;
    }




    public function get_tunuqi_price($id){

        $info = Tunuqi_category::where('tunuqi_category_id', $id)->first();
        if($info){
            return $info->tunuqi_category_name_kv_fasi;
        } else {
            return "კატეგორია წაშლილია";
        }
    }




    public function get_tunuqi_sisqe($id){

        $info = Tunuqi_category::where('tunuqi_category_id', $id)->first();
        if($info){
            return $info->tunuqi_category_name_sisqe;
        } else {
            return "კატეგორია წაშლილია";
        }
    }


    

     public static function instance()
     {
         return new AppHelper();
     }
}