@extends('spark::layouts.app')

@section('content')
    <home :user="user" inline-template>

        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <ol class="breadcrumb">
                            <li><a href="{{url('/course')}}">Home</a></li>
                            <li><a href="{{url('/course/'.$chapter->subject->course->slug)}}">{{$chapter->subject->course->name}}</a></li>
                            <li><a href="{{url('/subject/'.$chapter->subject->slug)}}">{{$chapter->subject->name}}</a></li>
                            <li class="active">{{$chapter->name}}</li>
                        </ol>
                    </div>
                </div>
            </div>

            @include('chapter.include.list-of-questions',['chapter'=>$chapter])

        </div>
    </home>
@endsection
