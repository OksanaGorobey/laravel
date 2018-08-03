
<style>
    * {box-sizing: border-box;}
    form {
        position: relative;
        width: 300px;
        margin: 0 auto;
        background: transparent;
        border-bottom: 4px solid #F9F0DA;
    }
    input, button {
        border: none;
        outline: none;
        background: transparent;
    }
    input {
        width: 100%;
        height: 42px;
        padding-left: 15px;
    }
    button {
        height: 42px;
        width: 42px;
        position: absolute;
        top: -48px;
        right: -236px;
        cursor: pointer;
    }
    button:before {
        content: "\f002";
        font-size: 20px;
        color: #F9F0DA;
    }
</style>
{{Form::open(['method'=>'get','route'=>'live_search'])}}

{{Form::text('search',null,['placeholder'=>'Для живого поиска нажмит Enter'])}}
<button type="submit" class="button special icon fa-search"></button>
{{Form::close()}}
