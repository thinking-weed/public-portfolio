<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GithubContactForm;

class GithubUrlOnController extends Controller
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

    public function storeGithubContactForm(Request $request){
        //Request $requestの部分でフォームから送信されたデータを受け取る
        //最初のRequestは、use宣言で使われているillumiinate\Http\Requestを指している

        $validated2 = $request->validate([
            'VisitorName' => 'required',//バリデーション、requiredは必須入力
            'VisitorEmail' => 'required',
            'QuestionOrOpinion' => 'required|max:500'
            ]);

        //上2つを組み合わせて、テーブルに挿入するデータを作成
        $dataToInsert2 = [
            'VisitorName' => $validated2['VisitorName'],
            'VisitorEmail' => $validated2['VisitorEmail'],
            'QuestionOrOpinion' => $validated2['QuestionOrOpinion'],
            //なんかどうやら、idとtimestampsは自動でなんとかしてくれる
        ];

        //整理して作った$dataToInsertを挿入する
        $GithubContactFormPost = GithubContactForm::create($dataToInsert2);//ここの::左は対応するModel名から拡張子を除いたもの
        return back()->with('message','無事送信されました。');
    }

    public function showGithubURL()
    {
        return view('links.github_contact');
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
