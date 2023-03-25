<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;

class TagController extends Controller
{
    //
    public function setting(){
         return response()->view('setting.tagSetting');
    }
}
