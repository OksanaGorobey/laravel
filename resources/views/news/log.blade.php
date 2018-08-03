@if (Auth::check())
    @if(Auth::user()->role_id === 'admin')
        <li><a href="{{ route('logout') }}">{{Auth::user()->name}}/Выйти</a></li>
        <li><a href="{{ route('admin.profile') }}">Админка</a></li>
        @else
        <li><a href="{{ route('logout') }}">{{Auth::user()->name}}/Выйти</a></li>
        @endif
@else
    <li><a href="{{ route('login') }}">Войти</a></li>
@endif