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

        @foreach($articles as $article)
            <div class="col-md-4">
                <h2>{{ $article->title }}</h2>
                <p>{{ $article->desc }}</p>
                <p><a href="{{ route('articleShow',['id'=>$article->id]) }}" class="btn btn-primary btn-lg" role="button">View details >></a></p>
            </div>
        @endforeach

    </div>

    <hr>

    <footer>
        <p>&copy 2017 Petrovichev Sergey</p>
    </footer>
</div> <!--/container-->

@endsection