<x-app-layout>
    <x-slot name="header">
        <div class="conditional-include1">
            @include('layouts.navigations.navigation_admin')
        </div>
        <div class="conditional-include2">
            @include('layouts.navigations.responsive_nav')
        </div>
    </x-slot>
        {{-- ここに入力したものは、resourceのlayoutsフォルダの中のapp.blade.phpの
            {{ slot }}のところに挿入され、「app.blade.php」が表示される--}}

    <div class="container">
        <div class="container mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <div class="each_item_show container" >
                    <p style="font-size:2rem;"><strong>個別表示</strong></p>
                </div>
            </div>

            <div class="mt-4 p-8 bg-white w-full rounded-2xl">

                <h2 class="contact_id_at p-4 font-semibold">
                    <p>{{ '～投稿・更新日時：' . $post->updated_at .'～'}}</p>
                    {{-- アロー演算子の右のオプションはここではカラム名 --}}
                    <div class="btn_part flex">
                        <a href="{{ route('github_users_posts.editor.view',$post->id) }}" class="block">
                            <x-primary-button>
                                編集
                            </x-primary-button>
                        </a>
                        <form action="{{ route('github_user_post.destroy', ['id' => $post->id]) }}" method="POST" class="block">
                        {{-- itemテーブルのidカラムを取り出す --}}
                        @csrf   {{-- ←の@csrfがないとPOSTできない --}}
                        @method('DELETE')
                            <x-primary-button id="delete-post_id-{{ $post->id }}">削除</x-primary-button>
                            <input type="hidden" class="" name="post_id" value="{{ $post->id }}">
                        </form>
                        <a href="{{ route('administrator.github_users_indexview') }}" >
                            <x-primary-button class='back_btn'>
                                戻る
                            </x-primary-button>
                        </a>
                    </div>
                </h2>

                <hr class="w-full">

                <h2 class="visitorname_email p-4 font-semibold">
                    <p>{{ 'お名前、または御法人名：' . $post->VisitorName }}</p>
                    <p>{{ 'Emailアドレス：' . $post->VisitorEmail }}</p>
                </h2>
                    <hr class="w-full">
                <p class=""></p>
                <textarea class="question_or_opinion">　{{ $post->QuestionOrOpinion }}</textarea>
            </div>

        </div>
    </div>
</x-app-layout>

