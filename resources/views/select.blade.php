<!DOCTYPE html>
<html>
<head>
    <title>Filter of news</title>
    </head>
<body>
<style> legend {
        background-color: #000;
        color: #fff;
        padding: 3px 6px;}

    .form_cbx select {
        background: transparent;
        height: 34px;
        border: 0; /* убираем рамку, рамка будет у div-а такой, какой мы её сделаем. */
        width: 750px;
    }

    .form_cbx {

        border: 1px solid black; /* делаем свою рамку */
        overflow: hidden;  /* всё, что выходит за границу не показываем */
        height: 34px;
        background: no-repeat right #c0c3ff; /* картинка кнопки со стрелкой вниз */
        width: 700px;
    }
</style>
<h1>Я буду краток, как президент из Рокки и Буллвинкля, фильтры на отдельной странице так как шаблоны что были скачанные и установлены не дают возможности их вмонтировать там:а времени то мало</h1>
<a href="{{route('news.main')}}">Home</a>
<form method="get">
    <legend>Teги</legend>
    <p>
        @foreach($tgs as $tg)
            <input type="checkbox" name="tags[]" value="{{$tg->id}}">{{$tg->tag_name}}<br>
        @endforeach
    </p>
    <legend>Категории</legend>
    <p>
        @foreach($ctg as $ct)
        <input type="checkbox" name="category[]" value="{{$ct->id}}">{{$ct->category}}<br>

            @endforeach
    </p>

    <legend>Период времени</legend>
    <h5>Oт</h5>
    <div class="form_cbx">
        <select name="at">
            <option value="0" selected >Nothing</option>
            @foreach($nw as $news)
            <option value="{{$news->updated_at}}">{{$news->updated_at}}</option>
            @endforeach
        </select>
    </div>
    <h5>До</h5>
    <div class="form_cbx">
        <select name="to">
            <option value="0" selected >Nothing</option>
            @foreach($nw as $news)
                <option value="{{$news->updated_at}}">{{$news->updated_at}}</option>
            @endforeach
        </select>
    </div>
    <p><input type="submit" name="sub" value="Отправить"></p>
</form>

</body>
</html>