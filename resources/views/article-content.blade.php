@extends('layouts.site')

@section('content')

    <!--Main jumbotron-->
    <div class="jumbotron">
        <div class="container">
            <h1>{{ $header }}</h1>
            <p>This is a template... blah, blah, blah...</p>
            <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more</a></p>
        </div>
    </div>

    <div class="container">
        <!--Example row of columns-->
        <div class="row">
            @if($article)
                            <div>
                                <h2>{{ $article->title }}</h2>
                                <p>{{ $article->text }}</p>
                            </div>
            @endif
        </div>

        <hr>

        <footer>
            <p>&copy 2017 Petrovichev Sergey</p>
        </footer>
    </div> <!--/container-->

@endsection