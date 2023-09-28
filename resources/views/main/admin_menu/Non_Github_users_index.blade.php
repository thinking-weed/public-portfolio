<x-app-layout>
    <x-slot name="header">
        <div class="conditional-include1">
            @include('layouts.navigations.navigation_admin')
        </div>
        <div class="conditional-include2">
            @include('layouts.navigations.responsive_nav')
        </div>

        <h2 class="admin_index font-semibold leading-relaxed">
            一覧表示{{ '（※Githubユーザーでない可能性が高い）' }}
        </h2>
    </x-slot>

    <div class="mx-auto px-6">
        @foreach($non_Github_users_posts as $post){{-- compact等で渡した変数を組み込むときは.blade.phpファイル内では、$をつける --}}
            <div class="mt-4 p-8 bg-white w-full rounded-2xl">

                <h2 class="contact_id_at p-4 font-semibold">
                    <p>{{ $loop->index + 1 }} 番目の投稿です。</p>
                    <p>{{ '～投稿・更新日時：' . $post->created_at .'～'}}</p>
                    {{-- アロー演算子の右のオプションはここではカラム名 --}}
                    <div class="btn_part flex">
                        <a href="{{ route('non_github_users_posts.editor.view',$post->id) }}" class="block">
                            <x-primary-button>
                                編集
                            </x-primary-button>
                        </a>
                        <form action="{{ route('non_github_user_post.destroy', ['id' => $post->id]) }}" method="POST" class="block">
                        {{-- itemテーブルのidカラムを取り出す --}}
                        @csrf   {{-- ←の@csrfがないとPOSTできない --}}
                        @method('DELETE')
                            <x-primary-button id="delete-post_id-{{ $post->id }}">削除</x-primary-button>
                            <input type="hidden" class="" name="post_id" value="{{ $post->id }}">
                        </form>
                        <a href="{{ route('administrator.view') }}" >
                            <x-primary-button class='back_btn'>
                                戻る
                            </x-primary-button>
                        </a>
                    </div>
                </h2>

                <hr class="w-full">

                <h2 class="visitorname_email p-4 font-semibold">
                    <p>{{ 'お名前、または御法人名：' . $post->VisitorName }}</p>
                    <p>{{ 'Emailアドレズ：' . $post->VisitorEmail }}</p>
                </h2>
                    <hr class="w-full">
                <p class=""></p>
                <textarea class="question_or_opinion">　{{ $post->QuestionOrOpinion }}</textarea>
            </div>
        @endforeach
    </div>

</x-app-layout>
