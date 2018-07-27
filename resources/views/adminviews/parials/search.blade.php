  {{Form::open(['method'=>'get'])}}
<div class="input-group input-group-sm" style="width: 400px;">
    {{Form::text('search',null,['class'=>'form-control float-right', 'placeholder'=>'Search...'])}}

        <div class="input-group-append">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        </div>
</div>
  {{Form::close()}}
