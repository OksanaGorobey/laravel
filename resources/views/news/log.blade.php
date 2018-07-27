@if (Auth::check())
    <li><a href="{{ route('logout') }}">{{Auth::user()->name}}/Выйти</a></li>
@else
    <li><a href="{{ route('login') }}">Войти</a></li>
@endif