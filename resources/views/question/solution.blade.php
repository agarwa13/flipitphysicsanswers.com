@extends('spark::layouts.app')

@section('content')
    <home :user="user" inline-template>

        <div>

            @include('question.include.breadcrumbs')

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">{{$question->title}}</div>
                            <div class="panel-body">
                                <?php
                                include(storage_path('app/'.$question->solution))
                                ?>
                            </div>
                            {{--<div class="panel-footer">--}}
                                {{--<a class="btn btn-link" href="{{ url('/email') }}">Problem with the Solution? Email Us</a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </home>
@endsection
