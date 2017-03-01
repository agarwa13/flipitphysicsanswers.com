<div class="container collapse" id="add-subject-form">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Subject</div>

                <div class="panel-body">
                    @include('spark::shared.errors')

                    <form class="form-horizontal" role="form" method="POST" action="/subject">
                    {{ csrf_field() }}

                        <!-- Subject Name -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Subject Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
                            </div>
                        </div>

                        <!-- Subject Name -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Slug</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="slug" value="{{ old('slug') }}" autofocus>
                            </div>
                        </div>
                        
                        <!-- Associated Subject -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Course</label>

                            <div class="col-md-6">
                                <select class="form-control" name="course_id">
                                    @foreach($courses as $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Login Button -->
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa m-r-xs fa-sign-in"></i>Add Subject
                                </button>

{{--                                <a class="btn btn-link" href="{{ url('/subject') }}">View Existing Subjects</a>--}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>