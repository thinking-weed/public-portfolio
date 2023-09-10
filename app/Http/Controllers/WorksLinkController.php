<?php

namespace App\Http\Controllers;

use App\Models\WorksLink;
use Illuminate\Http\Request;

class WorksLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function showWasWorks()
    {
        return view('links.was');

        //例
        //$posts = Post::all();
        /*モデルのPost.phpと紐付いたpostsテーブルのデータを全て取得*/
        //return view('post.index',compact('posts'));
        /*viewのpostファイル直下のindex.blade.phpを表示する。
        なお、その際に上で定義した変数$postsを使用する*/
    }

    public function showscd_map_imageWorks()
    {
        return view('links.scd_map_image');

        //例
        //$posts = Post::all();
        /*モデルのPost.phpと紐付いたpostsテーブルのデータを全て取得*/
        //return view('post.index',compact('posts'));
        /*viewのpostファイル直下のindex.blade.phpを表示する。
        なお、その際に上で定義した変数$postsを使用する*/
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorksLink $worksLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WorksLink $worksLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorksLink $worksLink)
    {
        //
    }
}
