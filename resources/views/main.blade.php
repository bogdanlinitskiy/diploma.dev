@extends('template')

@section('content')
    @foreach($categories as $category)
        <div class="col-md-4">
            <a href="/categories/{{$category['alias']}}">
                <img width="150px" height="150px" src="{{$category['logo']}}">
                <p>{{$category['name']}}</p>
            </a>
        </div>
    @endforeach
@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            {{--<h1 class="display-4"></h1>--}}
            <p> гайд как использовать сайт </p>
        </div>
    </div>

@endsection