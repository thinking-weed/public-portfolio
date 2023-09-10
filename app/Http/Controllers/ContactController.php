<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactController extends Controller
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
    public function storeContactForm(Request $request){
        //Request $requestの部分でフォームから送信されたデータを受け取る
        //最初のRequestは、use宣言で使われているillumiinate\Http\Requestを指している

        $validated1 = $request->validate([
            'VisitorName' => 'required',//バリデーション、requiredは必須入力
            'VisitorEmail' => 'required',
            'QuestionOrOpinion' => 'required|max:500'
            ]);

        //上2つを組み合わせて、テーブルに挿入するデータを作成
        $dataToInsert1 = [
            'VisitorName' => $validated1['VisitorName'],
            'VisitorEmail' => $validated1['VisitorEmail'],
            'QuestionOrOpinion' => $validated1['QuestionOrOpinion'],
            //なんかどうやら、idとtimestampsは自動でなんとかしてくれる
        ];

        //整理して作った$dataToInsertを挿入する
        $ContactFormPost = ContactForm::create($dataToInsert1);
        //ここの::左は対応するModel名から拡張子を除いたもの
        return back()->with('message','無事送信されました。');
    }


    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('links.contact');

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
