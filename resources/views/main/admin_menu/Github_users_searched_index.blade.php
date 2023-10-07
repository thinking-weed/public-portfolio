<x-app-layout>
    <x-slot name="header">
        <div class="conditional-include1">
            @include('layouts.navigations.navigation_admin')
        </div>
        <div class="conditional-include2">
            @include('layouts.navigations.responsive_nav')
        </div>

        <div class="flex">
            <h2 class="admin_index font-semibold leading-relaxed" style="width:10%;margin-top:5rem;color:blue;">
                検索結果
            </h2>
            <div class="search_count container" style="width:30%;margin-top:5rem;color:white;font-weight:bold;">
                <p style="font-size:1rem;">検索されたキーワードを含む件数は、全部で <strong style="font-size:2rem;">{{ $count_search_results }}</strong>件です。</p>
            </div>
        </div>
    </x-slot>

    <div class="mx-auto px-6">
        @foreach($search_results as $search_result){{-- compact等で渡した変数を組み込むときは.blade.phpファイル内では、$をつける --}}
            <div class="mt-4 p-8 bg-white w-full rounded-2xl">

                <h2 class="contact_id_at p-4 font-semibold">
                    <p>{{ '～投稿・更新日時：' . $search_result->updated_at .'～'}}</p>
                    {{-- アロー演算子の右のオプションはここではカラム名 --}}
                    <div class="btn_part flex">
                        <a href="{{ route('GithubContactForm.showeach',$search_result) }}" class="block">
                            <x-primary-button>
                                個別表示
                            </x-primary-button>
                        </a>
                        <a href="{{ route('github_users_posts.editor.view',$search_result->id) }}" class="block">
                            <x-primary-button>
                                編集
                            </x-primary-button>
                        </a>
                        <form action="{{ route('github_user_post.destroy', ['id' => $search_result->id]) }}" method="POST" class="block">
                        {{-- itemテーブルのidカラムを取り出す --}}
                        @csrf   {{-- ←の@csrfがないとPOSTできない --}}
                        @method('DELETE')
                            <x-primary-button id="delete-post_id-{{ $search_result->id }}">削除</x-primary-button>
                            <input type="hidden" class="" name="post_id" value="{{ $search_result->id }}">
                        </form>
                        <a href="{{ route('administrator.view') }}" >
                            <x-primary-button class='back_btn'>
                                管理者画面へ戻る
                            </x-primary-button>
                        </a>
                    </div>
                </h2>

                <hr class="w-full">

                <h2 class="visitorname_email p-4 font-semibold">
                    <p>{{ 'お名前、または御法人名：' . $search_result->VisitorName }}</p>
                    <p>{{ 'Emailアドレス：' . $search_result->VisitorEmail }}</p>
                </h2>
                    <hr class="w-full">
                <p class=""></p>
                <textarea class="question_or_opinion">　{{ $search_result->QuestionOrOpinion }}</textarea>
            </div>
        @endforeach
        <div class="pagination">
            {{ $search_results->links() }}
        </div>
    </div>

</x-app-layout>
