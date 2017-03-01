@extends('spark::layouts.app')

@section('content')
    <home :user="user" inline-template>

        <div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <ol class="breadcrumb">
                            <li><a href="{{url('/course')}}">Home</a></li>
                            <li class="active">{{$course->name}}</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>{{$course->name}}</h1>
                    </div>
                </div>
            </div>

            @include('course.include.list-of-subjects',['course' => $course])
        </div>

    </home>
@endsection
