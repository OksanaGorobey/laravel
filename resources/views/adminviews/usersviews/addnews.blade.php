@extends ('adminviews.layout')

@section('page-title','New News')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">ADD NEWS</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" enctype="multipart/form-data" action="{{route('admin.action')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label>Article</label>
                                <textarea name="article" class="form-control" placeholder="Enter Article"></textarea>
                            </div>
                            <label>Category</label>
                            <div class="form_cbx">
                                <select name="category">
                                    @foreach($ct as $cat)
                                        <option value="{{$cat->id}}">{{$cat->category}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label">Choose Pic</label>
                                    </div>
                                </div>
                            </div>
                            <label>Tags</label>
                            <div class="form-check">

                                @foreach($tg as $tag)
                                    <input type="checkbox" class="checkbox" name="tags[]" value="{{$tag->id}}"
                                           id="{{$tag->tag_name}}"/>
                                    <label for="{{$tag->tag_name}}">{{$tag->tag_name}}</label>
                                @endforeach
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.row -->
        </div>
    </section>
    <style>

        .form_cbx select {
            background: transparent;
            height: 34px;
            border: 0; /* убираем рамку, рамка будет у div-а такой, какой мы её сделаем. */
            width: 750px;
        }

        .form_cbx {
            border: 1px solid #0000ff; /* делаем свою рамку */
            overflow: hidden; /* всё, что выходит за границу не показываем */
            height: 34px;
            background: no-repeat right #c0c3ff; /* картинка кнопки со стрелкой вниз */
            width: 700px;
        }

        .checkbox {
            position: absolute;
            z-index: -1;
            opacity: 0;
            margin: 10px 0 0 20px;
        }

        .checkbox + label {
            position: relative;
            padding: 0 0 0 60px;
            cursor: pointer;
        }

        .checkbox + label:before {
            content: '';
            position: absolute;
            top: -4px;
            left: 0;
            width: 50px;
            height: 26px;
            border-radius: 13px;
            background: #CDD1DA;
            box-shadow: inset 0 2px 3px rgba(0, 0, 0, .2);
            transition: .2s;
        }

        .checkbox + label:after {
            content: '';
            position: absolute;
            top: -2px;
            left: 2px;
            width: 22px;
            height: 22px;
            border-radius: 10px;
            background: #FFF;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .3);
            transition: .2s;
        }

        .checkbox:checked + label:before {
            background: #9FD468;
        }

        .checkbox:checked + label:after {
            left: 26px;
        }

        .checkbox:focus + label:before {
            box-shadow: inset 0 2px 3px rgba(0, 0, 0, .2), 0 0 0 3px rgba(255, 255, 0, .7);
        }


    </style>
@endsection