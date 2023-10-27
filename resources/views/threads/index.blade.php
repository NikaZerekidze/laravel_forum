@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Forum Threads</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="panel-body">
                            @foreach($threads as $thread)
                                <a href="/threads/{{$thread->id}}"> <article> {{$thread->title}} </article> </a>
                                <div class="thread-body">{{$thread->body}}</div>
                                <br/>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
