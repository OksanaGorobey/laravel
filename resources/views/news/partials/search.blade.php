
<style>
    * {box-sizing: border-box;}
    form {
        width: auto;
        float: right;
        margin-right: 30px;
    }
    input {
        width: 250px;
        height: 42px;
        padding-left: 15px;
        border-radius: 42px;
        border: 2px solid #324b4e;
        background: #F9F0DA;
        outline: none;
        position: absolute;
        right: 124px;
        top: 57px;
        transition: .3s linear;
    }
    input:focus {
        width: 300px;
    }
    button {
        width: 72px;
        height: 42px;
        background: #324b4e;
        border: none;
        position: absolute;
        top: 56px;
        right: 124px;
        border-radius: 42px;
    }
    button:before{
        content: "Искать";
        font-style: italic ;
        color: #F9F0DA;
    }


</style>
{{Form::open(['method'=>'get', 'route'=>'live_search'])}}

    {{Form::text('search',null,['class'=>'who','placeholder'=>'Для живого поиска нажмит Enter'])}}
        <button type="submit"></button>

{{Form::close()}}
