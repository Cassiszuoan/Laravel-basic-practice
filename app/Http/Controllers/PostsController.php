<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\PostRequest;


class PostsController extends Controller
{
    
    public function index()

    {
        $postType='文章總覽';
    	$posts = \App\Post::orderBy('created_at','desc');
    	$data=compact('postType','posts');
    	return view('posts.index',$data);
    }

    public function hot()
    {
        $postType='熱門文章';
        $posts = \App\Post::where('page_view','>=',100)
                           ->orderBy('page_view','desc')
                           ->orderBy('created_at','desc')
                           ->get();
        $data=compact('postType','posts');
        return view('post.index',$data);



    }

    public function random()
    {
     
       $post = \App\Post::all()->random();
       if(is_null($post)){
        return redirect()->route('posts.index')
                         ->with('warning','目前沒有文章');
       }
       $data = compact('post');
       return view('posts.view',$data);
    }

    public function create()
    {
        return redirect()->route('post.show',$post->id)
                         ->with ('success','新增文章完成');
    }

    public function show($id)
    {
    	$post = \App\Post::find($id);
        if(is_null($post)){
            return redirect()->route('posts.index')
                             -> with('warning','找不到該文章');
        }

        $post->page_view +=1;
        $post->save();
    	$data = compact('posts');
    	return view('posts.show',$data);
    }


    public function store(PostRequest $request){
        $post = \App\Post::create($request->all());
        return redirect()->route('posts.show',$post->id);
    }

    public function edit($id)
    {

    $post = \App\Post::find($id);
    $data = compact($post);

    return view('posts.edit',$data);

    }

    public function update($id,PostRequest $request)
    {
        $post = \App\Post::find($id);
        if(is_null($post)){
            return redirect()->route('posts.index')
                             -> with('warning','找不到該文章');
        }
        $post->update($request->all());
        return redirect()->route('posts.show',$post->id)
                         ->with('success','文章更新完成');
    }

    public function destory($id)
    {
        $post = \App\Post::find($id);
        foreach($post->comments as $comment){
            $comment -> delete();
        }
        $post->delete();
        return redirect()->route('posts.index')
                         ->with('success','刪除文章及留言成功');

    }



    public function comment ($id,CommentRequest $request){
        $post = \App\Post::find($id);
        $comment = \App\Comment::create($request->all());
        $post->comments()->save($comment);
        return redirect()->route('posts.show',$post->id)
                         ->with('success','回覆留言成功');
    }
}
