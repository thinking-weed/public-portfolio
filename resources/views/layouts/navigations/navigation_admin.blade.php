<nav x-data="{ open: false }" class="border-b border-gray-100">
    <div class="navbar navbar-expand-lg bd-navbar sticky-top sm:fixed sm:top-0 sm:right-0 text-right z-10 flex">
        <div  class="navcontents home_nav">
            <h2 class="admin_title" style="font-size:1.2rem;width:10%;">管理者ページ</h2>
            <div class="pagelinks">
                <a href="{{ route('contact.view') }}" >{{ 'Contact' }}</a>
                <a href="{{ route('WasWorks.view') }}" class="was_works_link" >{{'Works supported by WAS'}}</a>
                <a href="https://team171-system-9ae6c37d5beb.herokuapp.com/" class="team_development_link">{{'team_development at TECH I.S.'}}</a>
                <a href="#" class="NoTenki" id="NoTenki" onclick="event.preventDefault(); showAlert()">{{'NoTenki'}}</a>
                <a href="{{ route('home.view') }}" >{{'Home'}}</a>
            </div>
            <div class="users_selectbox">
                <select class="form-select rounded-md" aria-label="Default select example" name = Auth::user()->name id="members_name" >
                    @if(Auth::check())
                        <option value = {{ Auth::user()->name }}>{{ Auth::user()->name }}</option>
                    @else
                    <option selected>ゲスト</option>
                    @auth
                    @foreach ( $auth_users as $auth_user)
                        <option value= {{ $auth_user -> id }}>{{ $auth_user -> name }}</option>
                    @endforeach
                    @endauth
                    @endif
                    {{-- なお、GPT大先生によると、@if(Auth::check())と@authは微妙にちがいがあり、
                        前者は現在、誰かがログインしている状態、後者は、今ログインしていなくても過去に１回でもログインしており
                        データーベースにユーザーの情報が残っている場合を指すらしい--}}
                </select>
            </div>
        </div>
    </div>
</nav>
