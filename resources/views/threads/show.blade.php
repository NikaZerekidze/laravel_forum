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
        </div>
    </div>
@endsection
