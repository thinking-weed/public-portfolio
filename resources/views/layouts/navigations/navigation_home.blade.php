<nav x-data="{ open: false }" class="global_nav">
    <div class="navbar navbar-expand-lg bd-navbar sticky-top sm:fixed sm:top-0 sm:right-0 text-right z-10 flex">
        <div  class="navcontents home_nav">
            <h2 style="text-align:center;margin:auto 1rem;">Portfolio <br>Home</h2>
            <div class="pagelinks">
                <a href="{{ route('contact.view') }}" class="contact_form" style="width:40%;">{{ 'Contact' }}</a>
                <a href="{{ route('WasWorks.view') }}" class="was_works_link" style="width:50%;margin-right:0.5rem;">{{'Works supported by WAS'}}</a>
                <a href="https://team171-system-9ae6c37d5beb.herokuapp.com/" class="team_development_link" style="width:50%;">{{'team_development at TECH I.S.'}}</a>
                <a href="#" class="NoTenki" id="NoTenki" onclick="event.preventDefault(); showAlert()"style="width:30%;">{{'NoTenki'}}</a>
                @if(Auth::user() && Auth::user()->role > 0)
                <a href="#" class="Administrator" id="secure-link1" onclick="event.preventDefault(); Modalshow1()" style="width:50%;padding-right:1rem;">{{'Administrator only'}}</a>
                @endif
            </div>
            <div class="about_account_links" >
                @auth
                    <a href="{{ route('main.members') }}" id="member-s_btn" class="member-s_btn btn btn-outline-primary btn-sm font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{!! "Member's" !!}<br>会員専用</a>
                @else
                    <a href="{{ route('login') }}"  id="login_btn" class="login_btn btn btn-outline-primary btn-sm font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="width:50%;padding:0;">Login<br>ログイン</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"  id="register_btn" class="register_btn btn btn-outline-primary btn-sm ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="width:50%;padding:0;">Register<br>新規会員登録</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
    {{--  パスワード入力用モーダル  --}}
    @include('modals.password-authentication-modal.password-authentication-modal1')
</nav>
