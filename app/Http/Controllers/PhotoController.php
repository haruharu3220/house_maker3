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
        $photos = Photo::getAllOrderByUpdated_at();
        return response()->view('photo.index',compact('photos'));
    }
    
    //create
    public function create()
    {
        return response()->view('photo.create');
    }

    
    
    //store
    public function store(Request $request)
    {
        
        $photo = new photo();
    // バリデーション
        // 今回は特に不要
    // バリデーション:エラー
        // if ($validator->fails()) {
        //   return redirect()
        //     ->route('tweet.create')
        //     ->withInput()
        //     ->withErrors($validator);
        // }
        // dd($request->image,$request->tags);
        // dd($request->file("image"));
        if(request('image')){
            $original = $request->file("image")->getClientOriginalName();
            $name = date("Ymd_His")."_".$original;
            request() ->file("image")->move("storage/image",$name);
            $photo -> image = $name;
        }
        
    // dd($name);
    // 編集 フォームから送信されてきたデータとユーザIDをマージし，DBにinsertする
    $data = $request->merge(['user_id' => Auth::user()->id])->all();
    // $result = Photo::create($data);

    $photo -> user_id = Auth::user() -> id;
    $photo-> save();
    
    //tagの登録はまだ
    
    
    // photo.index」にリクエスト送信（一覧ページに移動）
    return redirect()->route('photo.index');
    }
    
    
    
    
}
