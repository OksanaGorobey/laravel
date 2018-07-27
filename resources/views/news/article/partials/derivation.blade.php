<section class="split contact">
    @foreach($comments as $comm)
    <section class="alt">
        <h3>{{$comm->user_name}}<br>
            <strong><sub>{{ $comm->updated_at}}</sub></strong>
        </h3>
        <p>{{ $comm->comment}}</p>
 @if(Auth::check())
        <ul class="icons">
            <li><a href="{{route('news.pluslike', [$new->id,$comm->id])}}"><span class="label">💛</span></a></li>
            <li><b>{{ $comm->like}}</b></li>
            <li><a href="{{route('news.minuslike', [$new->id,$comm->id])}}" ><span class="label">💔</span></a></li>
        </ul>
     @else
            <ul class="icons">
                 <li><b>{{ $comm->like}}</b></li>
            </ul>
        @endif
    </section>
        @endforeach
        <section class="alt">
            {{$comments->links()}}
        </section>
</section>