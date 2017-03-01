@extends('spark::layouts.app')

@section('content')

    <!-- Forms to Create Resources -->
    @if (Auth::check() && Spark::developer(Auth::user()->email))

        <div class="collapse-group">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#add-course-form">Add Course</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#add-subject-form">Add Subject</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#add-chapter-form">Add Chapter</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#add-question-form">Add Question</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('course.include.create-course-form')
            @include('course.include.add-subject-form')
            @include('course.include.add-chapter-form')
            @include('course.include.add-question-form')

            <hr>

        </div>
    @endif

    @foreach($courses as $course)
        @include('course.include.list-of-subjects',['course' => $course])
    @endforeach

@endsection