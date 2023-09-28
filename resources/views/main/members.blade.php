<x-app-layout>
    <x-slot name="header">
        {{-- Settings Dropdown --}}
        <div class="hidden sm:flex sm:items-center sm:ml-6" style="position:absolute; top:1rem; right:2rem;">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    {{-- slotはcomponentに対しても使える※dropdown.blade.php参照 --}}
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div>@if(Auth::check())
                            {{ Auth::user()->name }}
                            @else
                            ゲスト
                            @endif</div>
                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('biography.edit')" style="padding:0.5rem;">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    {{-- Authentication --}}
                    <form method="POST" action="{{ route('logout') }}" style="padding:0.5rem;">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <div style="margin:auto 1rem;">
                    <a href="{{ route('home.view') }}" >
                        <x-primary-button class='home_back_btn' >
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
