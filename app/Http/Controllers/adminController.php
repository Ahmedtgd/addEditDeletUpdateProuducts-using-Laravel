<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
public function contact($id,$name){
$arr=Array('id'=>1,'name'=>'ahmed');
return view('admin.contact',$arr);}
}
