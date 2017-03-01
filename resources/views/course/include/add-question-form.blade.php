<div class="container collapse" id="add-question-form">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add Question</div>

                <div class="panel-body">
                    @include('spark::shared.errors')

                    <form class="form-horizontal" role="form" method="POST" action="/question" id="create-question-form">
                    {{ csrf_field() }}

                        <!-- Question Name -->
                        <div class="form-group">
                            <label class="col-md-2 control-label">Title</label>

                            <div class="col-md-10">
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}" autofocus>
                            </div>
                        </div>

                        <!-- Question Slug -->
                        <div class="form-group">
                            <label class="col-md-2 control-label">Slug</label>

                            <div class="col-md-10">
                                <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                            </div>
                        </div>
                        
                        <!-- Associated Chapter -->
                        <div class="form-group">
                            <label class="col-md-2 control-label">Chapter</label>

                            <div class="col-md-10">
                                <select class="form-control" name="chapter_id">
                                    @foreach($chapters as $chapter)
                                    <option value="{{$chapter->id}}">{{$chapter->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Question Body -->
                        <div class="form-group">
                            <label class="col-md-2 control-label">Body</label>

                            <div class="col-md-10">
                                <div id="body"></div>
                                <textarea class="form-control" rows="3" name="body" id="question-body"></textarea>
                            </div>
                        </div>

                        <!-- Solution -->
                        <div class="form-group">
                            <label class="col-md-2 control-label">Solution</label>
                            <div class="col-md-10">
                                <div id="solution"></div>
                                <textarea class="form-control" rows="3" name="solution" id="question-solution"></textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-2 control-label">Solved?</label>
                            <div class="col-md-10">
                                <input type="checkbox" name="solved" checked> Has this question been solved?
                            </div>
                        </div>

                        <!-- Login Button -->
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa m-r-xs fa-sign-in"></i>Add Question
                                </button>

{{--                                <a class="btn btn-link" href="{{ url('/question') }}">View Existing Questions</a>--}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
</div>

@push('footer-scripts')

    <!-- We use the Ace Editor for the Solution -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.6/ace.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.6/theme-monokai.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.6/mode-php.js"></script>
    <script>

        // Setup the Ace Editor for Solution
        var solutionEditor = ace.edit("solution");
        solutionEditor.setTheme("ace/theme/monokai");
        solutionEditor.getSession().setMode("ace/mode/php");
        solutionEditor.getSession().setUseWrapMode(true);
        solutionEditor.getSession().setWrapLimitRange(80,80);

        // Setup the Ace Editor for Body
        var bodyEditor = ace.edit("body");
        bodyEditor.setTheme("ace/theme/monokai");
        bodyEditor.getSession().setMode("ace/mode/html");
        bodyEditor.getSession().setUseWrapMode(true);
        bodyEditor.getSession().setWrapLimitRange(80,80);

        // Copy the Contents of the Ace Editor to the Text Area prior to Submit
        $('#create-question-form').submit(function(){
            $('textarea[name="body"]').val(bodyEditor.getSession().getValue());
            $('textarea[name="solution"]').val(solutionEditor.getSession().getValue());
        });
    </script>

@endpush

@push('header-scripts')
<!-- Display the Solution Ace Editor and Hide the Solution Text Area -->
<style type="text/css" media="screen">
    #solution, #body {
        height: 300px;
    }
    #question-solution, #question-body{
        display: none;
    }
</style>
@endpush