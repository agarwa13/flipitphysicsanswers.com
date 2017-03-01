<div class="container collapse" id="add-course-form">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Course</div>

                <div class="panel-body">
                    @include('spark::shared.errors')

                    <form class="form-horizontal" role="form" method="POST" action="/course">
                    {{ csrf_field() }}

                    <!-- Course Name -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Course Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
                            </div>
                        </div>

                    <!-- Course Name -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Slug</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="slug" value="{{ old('slug') }}" autofocus>
                            </div>
                        </div>

                        <!-- Login Button -->
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa m-r-xs fa-sign-in"></i>Add Course
                                </button>

                                {{--<a class="btn btn-link" href="{{ url('/course') }}">View Existing Courses</a>--}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>