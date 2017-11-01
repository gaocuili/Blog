<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use DB;

class PostController extends Controller
{
    //文章列表
    public function index(){

        $posts = DB::table("posts")->paginate(3);
        return view("post/index",compact('posts'));
    }

    //文章详情页
    public function show(Post $post){
        return view('post/show',compact('post'));
    }

    //创建文章页面
    public function create(){
        return view('post/create');
    }

    //创建文章逻辑
    public function store(Request $request){

        //验证
        $this->validate($request, [
            'title' => 'required|string|max:255|min:4',
            'content' => 'required|min:100',
        ]);

        //逻辑
        $post = Post::create(request(['title','content']));
        //渲染

        return redirect('/posts');
    }

    //编辑文章
    public function edit(){

        return view('post/edit');
    }
    public function update(){

    }

    //删除文章
    public function delete(){

    }

    public function test(){

        // $posts = Post::orderBy('created_at','desc')->get();
        return view('welcome');
    }
}
