<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$chapter->name}}</div>

                <ul class="list-group">
                    @foreach($chapter->questions as $question)
                        <a class="list-group-item" href="{{url('/question/'.$question->slug)}}">
                            {{$question->title}}
                        </a>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</div>