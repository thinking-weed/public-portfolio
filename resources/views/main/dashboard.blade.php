<x-app-layout>
    <x-slot name="header">
        <div class="conditional-include1 " >
            @include('layouts.navigations.navigation_home')
        </div>
        <div class="conditional-include2 ">
            @include('layouts.navigations.responsive_nav')
        </div>
    </x-slot>

    <div class="py-12" style="margin-top:2rem;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex">
                <div class="p-6 text-black-900">
                    {{ __("You're logged in!") }}
                </div>
                <div style="margin:auto 1rem;">
                    <a href="{{ route('home.view') }}" >
                        <x-primary-button class='home_back_btn'>
                            ホーム画面へ戻る
                        </x-primary-button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 25rem;width:100%;">
        @include('layouts.footer')
    </div>
</x-app-layout>
