<section>
    <header>
        <div class="flex">
            <h2 class="text-lg font-medium text-gray-900">
                    {{ 'Githubの経験があるであろう人へのコメント付与' }}
                    <br>{{ '論理削除用delete_flagは 0で表示、1で非表示' }}
            </h2>
            <div class="back_btn_area" style="padding:1rem;">
                <a href="{{ route('administrator.github_users_indexview',$post) }}" >
                <x-primary-button class='back_btn'>
                    戻る
                </x-primary-button>
                </a>
            </div>
        </div>
    </header>

    <form method="post" action="{{ route('github_users_posts.info.update', $post) }}" class="mt-6 space-y-6" >
        {{-- route('')の行き先はupdateのメソッドの方、第二引数は、おそらく個別の表示の時と同様に統一する必要がある --}}
        @csrf
        @method('patch')

        <div>
            <label for="id">{{ __('フォームに投稿された順（idが若い方が早い）') }}</label>
            <x-text-input id="id" name="id" type="text" class="mt-1 block w-full" :value="old('id', $post->id)"  />
            <x-input-error class="mt-2" :messages="$errors->get('id')" />
        </div>
        @error('id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div>
            <label for="VisitorName">{{ __('お名前・御法人名（Visitor Name）') }}</label>
            <x-text-input id="VisitorName" name="VisitorName" type="text" class="mt-1 block w-full" :value="old('VisitorName', $post->VisitorName)" />
            <x-input-error class="mt-2" :messages="$errors->get('VisitorName')" />
        </div>
        @error('VisitorName')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div>
            <label for="VisitorEmail">{{ __('連絡先Eメール（Visitor Email）') }}</label>
            <x-text-input id="VisitorEmail" name="VisitorEmail" type="email" class="mt-1 block w-full" :value="old('VisitorEmail', $post->VisitorEmail)" />
            <x-input-error class="mt-2" :messages="$errors->get('VisitorEmail')" />
        </div>
        @error('VisitorEmail')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div>
            <label for="QuestionOrOpinion">{{ __('ご質問・ご意見等（Question Or Opinion）') }}</label>
            <x-text-input id="QuestionOrOpinion" name="QuestionOrOpinion" type="text" class="mt-1 block w-full" :value="old('QuestionOrOpinion', $post->QuestionOrOpinion)" />
            <x-input-error class="mt-2" :messages="$errors->get('QuestionOrOpinion')" />
        </div>
        @error('QuestionOrOpinion')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div>
            <label for="research_password">{{ __('再検索用パスワード（research_password）') }}</label>
            <x-text-input id="research_password" name="research_password" type="text" class="mt-1 block w-full" :value="old('research_password', $post->research_password)" />
            <x-input-error class="mt-2" :messages="$errors->get('research_password')" />
        </div>
        @error('research_password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div>
            <label for="delete_flag">{{ __('（論理）削除フラグ（delete_flag）') }}</label>
            <x-text-input id="delete_flag" name="delete_flag" type="text" class="mt-1 block w-full" :value="old('delete_flag', $post->delete_flag)" />
            <x-input-error class="mt-2" :messages="$errors->get('delete_flag')" />
        </div>
        @error('delete_flag')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="flex items-center gap-4">
            <x-primary-button class='edit_save_btn'>
                更新
            </x-primary-button>
        </div>
    </form>

</section>
