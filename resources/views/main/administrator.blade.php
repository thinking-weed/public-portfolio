<x-app-layout>
    <x-slot name="header">
        <div class="conditional-include1">
            @include('layouts.navigations.navigation_admin')
        </div>
        <div class="conditional-include2">
            @include('layouts.navigations.responsive_nav')
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="opacity:0.8;">
                    <div class="p-6 text-black-900">
                        {{ 'ここは管理者のページです。' }}
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    <div class="admin_inner">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-13">

            <div class="opinion_index scale-100  bg-white dark:bg-gray-800 dark:bg-gradient-to-bl
                            from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex
                            motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div class="passwordbox rounded-full" style="margin:0 auto">
                    <div>
                        <img src="{{ asset('/images/admin-images/non-github-users.png') }}" alt="Githubを使ったことがない可能性が高い人の意見一覧">
                    </div>
                    <h2 class="password_show_check font-semibold text-black-900 dark:text-white">
                        <a href="#" onclick="event.preventDefault(); Modalshow4()" style="margin:auto 0;text-align:center;padding:1rem;">
                            <p>{{ '　パスワードを入力して下さい' }}</p>
                        </a>
                    </h2>
                </div>
            </div>
            <div class="opinion_index scale-100 dark:bg-gradient-to-bl
                            from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none
                            motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div class="passwordbox rounded-full" style="margin:0 auto">
                    <div>
                        <img src="{{ asset('/images/admin-images/github-users.png') }}" alt="Githubを使ったことのある可能性が高い人の意見一覧">
                    </div>
                    <h2 class="password_show_check font-semibold text-black-900 dark:text-white">
                        <a href="#" onclick="event.preventDefault(); Modalshow5()" style="margin:auto 0;text-align:center;padding:1rem;">
                            <p>{{ '　パスワードを入力して下さい' }}</p>
                        </a>
                    </h2>
                </div>
            </div>

        </div>
    </div>
    <div class="flex" style="width: 100%;">
        <div>
            {{--  パスワード入力用モーダル  --}}
            @include('modals.admin_modal.admin_password_modal4')
        </div>
        <div>
            {{--  パスワード入力用モーダル  --}}
            @include('modals.admin_modal.admin_password_modal5')
        </div>
    </div>
    <div style="margin-top: 15rem;width:100rem;">
        @include('layouts.footer')
    </div>
</x-app-layout>
