<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Models\Photo;


class PhotoController extends Controller
{
    
    //index
    public function index(){
        return response()->view('photo.index');
    }
    
    //create
    public function create()
    {
        return response()->view('photo.create');
    }

    
    
    //store
    public function store(Request $request)
    {
    // バリデーション
        // 今回は特に不要
    // バリデーション:エラー
        // if ($validator->fails()) {
        //   return redirect()
        //     ->route('tweet.create')
        //     ->withInput()
        //     ->withErrors($validator);
        // }

    // 編集 フォームから送信されてきたデータとユーザIDをマージし，DBにinsertする
    $data = $request->merge(['user_id' => Auth::user()->id])->all();
    $result = Photo::create($data);

    // tweet.index」にリクエスト送信（一覧ページに移動）
    return redirect()->route('tweet.index');
    }
    
    
    
    
}
