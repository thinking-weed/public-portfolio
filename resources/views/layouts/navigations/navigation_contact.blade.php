<nav x-data="{ open: false }" class="border-b border-gray-100">
    <div class="navbar navbar-expand-lg bd-navbar sticky-top sm:fixed sm:top-0 sm:right-0 text-right z-10 flex">
        <div  class="navcontents">
            <h2>Contact</h2>
            <div class="pagelinks">
                    <a href="{{ route('WasWorks.view') }}" style="margin-right: 1rem;">{{'Works supported by WAS'}}</a>
                    <a href="https://team171-system-9ae6c37d5beb.herokuapp.com/" class="team_development_link" style="margin-right: 1rem;">{{'team_development at TECH I.S.'}}</a>
                    <a href="#" class="SCD_map_link" id="SCD_map_link">{{'SCD map'}}</a>
                    <a href="#" class="NoTenki" id="NoTenki" onclick="event.preventDefault(); showAlert()">{{'NoTenki'}}</a>
                    <a href="#" class="OragaEC_maker" id="OragaEC_maker" onclick="event.preventDefault(); showAlert()">{{'OragaEC maker'}}</a>
                    <a href="#" class="OCO" id="OCO" onclick="event.preventDefault(); showAlert()">{{'OCO'}}</a>
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
