<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class crud extends Controller
{
    public function show(){

        return view('index');
    }

    public function insert(Request $req){

        $insert = DB::table('axios_crud')->insert([

            'name'=>$req->name,
            'email'=>$req->email,
            'dept'=>$req->dept,



        ]);
        if($insert){
            echo "data send success";
        }else{
            echo "data send failed";
        }
    }

    public function OnSelect(){

        $select = DB::table('axios_crud')->select()->get();

        return view('select',compact('select'));
    }

    public function deletedata($id){
        $delete = DB::table('axios_crud')->where('id',$id)->delete();
    }

    public function editdata($id){

        $edit = DB::table('axios_crud')->where('id',$id)->first();

        $arr = array();
        $arr = $edit;

        return json_encode($arr);
    }

    public function updatedata(Request $req,$hiddenID){
        $update = DB::table('axios_crud')->where('id',$hiddenID)->update([
                
            'name'=>$req->name,
            'email'=>$req->email,
            'dept'=>$req->dept,

        ]);

    }
}
