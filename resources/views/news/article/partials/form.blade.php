<section>
    @if (Auth::check())
    {{Form::open(['method'=>'post', 'route' => ['news.art.store' ,$cat,$new->id]])}}
    {{ csrf_field() }}
    <div class="field">
        <label for="message">Комментарий<sub>(255 символов)</sub></label>
        {{Form::textarea('message')}}
    </div>
    <ul class="actions">
        {{Form::submit('Оставить свое мнение !')}}
    </ul>
    {{Form::close()}}
        @else
        Оставлять комментарии
        могут только авторизированые пользователи
        <li><a href="{{ route('login') }}" class="button special fit">Войти</a></li>
        @endif
</section>
