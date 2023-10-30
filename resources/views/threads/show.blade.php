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
                                <article> {{$thread->title}} </article>
                                <br/>
                                <div class="thread-body">{{$thread->body}}</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Forum Threads</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                          @if (!$thread->replies->isEmpty())
                              @foreach($thread->replies as $key => $replay)
                                    <br/>
                                    <div class="panel-body">
                                        <h3>Commet {{$key + 1}}</h3>
                                        <hr/>

                                        <article> {{$replay->user->name}} </article>
                                        <article> {{$replay->created_at->diffForHumans()}} </article>

                                        <br/>
                                        <div class="thread-body">{{$replay->body}}</div>
                                    </div>
                                @endforeach
                            @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
