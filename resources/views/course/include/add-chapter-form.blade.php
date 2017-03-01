<div class="container collapse" id="add-chapter-form">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Chapter</div>

                <div class="panel-body">
                    @include('spark::shared.errors')

                    <form class="form-horizontal" role="form" method="POST" action="/chapter">
                    {{ csrf_field() }}

                        <!-- Chapter Name -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Chapter Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
                            </div>
                        </div>

                        <!-- Chapter Name -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Slug</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="slug" value="{{ old('slug') }}" autofocus>
                            </div>
                        </div>
                        
                        <!-- Associated Chapter -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Subject</label>

                            <div class="col-md-6">
                                <select class="form-control" name="subject_id">
                                    @foreach($subjects as $subject)
                                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Login Button -->
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa m-r-xs fa-sign-in"></i>Add Chapter
                                </button>

{{--                                <a class="btn btn-link" href="{{ url('/chapter') }}">View Existing Chapters</a>--}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>