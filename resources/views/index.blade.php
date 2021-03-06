@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel">
                    <div class="panel-body">
                        @include('components.search-form')
                        <ul id="articles" class="list-unstyled">
                            @foreach($articles as $article)
                                <li>
                                    <div>
                                        <a title="{{ $article -> title }}" href="{{ $article -> showUrl() }}"><h3>{{ $article -> display_title }}</h3></a>
                                    </div>
                                    <div>
                                        {!! trim(strip_tags(mb_substr($article -> body,0,120))) !!}
                                    </div>
                                    <a title="{{ $article -> title }}" href="{{ $article -> showUrl() }}">阅读全文</a>
                                    <hr>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="text-center">
                        <a style="" class="btn btn-primary btn-lg" href="{{ url('/') }}">再来一波</a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script>
    </script>

@endsection