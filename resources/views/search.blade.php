<!DOCTYPE html>
<html>
<head>
    <title>Live search in laravel using AJAX</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Вас может волновать вопрос, почему живой поиск здесь, а не там где должен быть? К сожалению, обстоятельства сложились не в мою пользу, те шаблоны, что я выбрала для оформления не дали мне возможности реализовать его там</h1>
<h2>Надеюсь вы простите меня</h2>

<form>
            <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />

</form>
<table>
    <tbody>

    </tbody>
</table>
<h2>получить все новости по тегу можно перейдя с самой новости по  тегу)))</h2>
<h3>Да, это не ссылки:((((</h3>
<a href="{{route('news.main')}}">Home</a>
<script>
  $(document).ready(function(){

    fetch_customer_data();

    function fetch_customer_data(query = '')
    {
      $.ajax({
        url:"{{ route('live_search.action') }}",
        method:'GET',
        data:{query:query},
        dataType:'json',
        success:function(data)
        {
          $('tbody').html(data.table_data);
          $('#total_records').text(data.total_data);
        }
      })
    }

    $(document).on('keyup', '#search', function(){
      var query = $(this).val();
      fetch_customer_data(query);
    });
  });
</script>