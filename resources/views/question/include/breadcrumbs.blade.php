<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <ol class="breadcrumb">
                <li><a href="{{url('/course')}}">Home</a></li>
                <li><a href="{{url('/course/'.$question->chapter->subject->course->slug)}}">{{$question->chapter->subject->course->name}}</a></li>
                <li><a href="{{url('/subject/'.$question->chapter->subject->slug)}}">{{$question->chapter->subject->name}}</a></li>
                <li><a href="{{url('/chapter/'.$question->chapter->slug)}}">{{$question->chapter->name}}</a></li>
                <li class="active">{{$question->title}}</li>
            </ol>
        </div>
    </div>
</div>