<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use Illuminate\Support\Facades\DB;

class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function OpinionIndex()
    {
        $posts = ContactForm::all();
        /**
         * ContactFormモデルと紐付いた、contact_formsテーブルからデータを全て取得
         * **/
        return view('main.admin_menu.opinionindex',compact('posts'));
        //上で取得した$postsをmain.admin_menu.opinionindex.blade.phpで使えるようにする。
    }

        /**
     * Display a listing of the resource.
     */
    public function OpinionCheckedIndex()
    {
        $posts_checked = ContactForm::all();//後でcheckedが押された物だけ選択されるようにする
        /**
         * ContactFormモデルと紐付いた、contact_formsテーブルからデータを全て取得
         * **/
        return view('main.admin_menu.opinioncheckedindex',compact('posts_checked'));
        //上で取得した$postsをmain.admin_menu.opinionindex.blade.phpで使えるようにする。
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

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('main.administrator');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
