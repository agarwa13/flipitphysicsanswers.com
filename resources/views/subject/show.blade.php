@extends('spark::layouts.app')

@section('content')
    <home :user="user" inline-template>

        <div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <ol class="breadcrumb">
                            <li><a href="{{url('/course')}}">Home</a></li>
                            <li><a href="{{url('/course/'.$subject->course->slug)}}">{{$subject->course->name}}</a></li>
                            <li class="active">{{$subject->name}}</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>{{$subject->name}}</h1>
                    </div>
                </div>
            </div>

            @foreach($subject->chapters as $chapter)
                @include('chapter.include.list-of-questions',['chapter' => $chapter])
            @endforeach
        </div>

    </home>
@endsection
