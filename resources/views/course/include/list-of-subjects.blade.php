<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$course->name}}</div>

                {{--<div class="panel-body">--}}
                    {{--<p>--}}
                        {{--Course Descrption--}}
                    {{--</p>--}}
                {{--</div>--}}

                <div class="list-group">
                    @foreach($course->subjects as $subject)
                    <a href="{{url('/subject/'.$subject->slug)}}" class="list-group-item active">
                        <h4>{{$subject->name}}</h4>
                    </a>

                        @foreach($subject->chapters as $chapter)
                            <a href="{{url('/chapter/'.$chapter->slug)}}" class="list-group-item">
                                <div class="pull-left">
                                    {{$chapter->name}}
                                </div>
                                <div class="pull-right">
                                    {{$chapter->questions()->count()}} Questions
                                </div>
                                <div class="clearfix"></div>
                            </a>

                        @endforeach

                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>