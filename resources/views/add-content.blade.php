@extends('layouts.site')

@section('content')

    <!--Main jumbotron-->
    <div class="jumbotron">
        <div class="container">
            <h1>{{ $header }}</h1>
            <p>{{ $message }}</p>
            <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="form">

                <form method="POST" action="{{ route('article-store') }}">
                    <div class="form-group">
                        <label for="title">Заголовок</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="alias">Псевдоним</label>
                        <input type="text" class="form-control" id="alias" name="alias">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Краткое описание</label>
                        <textarea class="form-control" name="desc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Полный текст</label>
                        <textarea class="form-control" name="text"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>

                    {{ csrf_field() }}
                </form>
            </div>
        </div>

        <hr>

        <footer>
            <p>&copy 2017 Petrovichev Sergey</p>
        </footer>
    </div> <!--/container-->
@endsection