<?php
// 遊びファイル
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request, Response $response) {
        $data = [
            'req'=>$request,
            'res'=>$response,
            'msg'=>'use Blade Template',
            'id'=>$request->id,
            'url'=>$request->url(),
            'full_url'=>$request->fullUrl(),
            'path'=>$request->path(),
            'post_msg'=>'文字を入力'
        ];
        return view('hello.index', $data);
    }

    public function post(Request $request) {
        // request->input name で値を取り出せる
        $post_msg = $request->post_msg;
        $data = [
            'post_msg'=>'hello!' . $post_msg . '.action post!',
        ];
        return view('hello.index', $data);
    }
}
