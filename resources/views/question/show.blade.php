@extends('spark::layouts.app')

@section('content')
    <home :user="user" inline-template>
        
        <div>

            @include('question.include.breadcrumbs')
            
            <div class="container">
                <!-- Application Dashboard -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default question-panel">
                            <div class="panel-heading">{{$question->title}}</div>
    
                            <form action="/question/{{$question->slug}}/solution" method="post">
                                {{csrf_field()}}
                                <div class="panel-body">
                                    {!! $question->body !!}
                                </div>
                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa m-r-xs fa-sign-in"></i>Get Solution
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </home>
@endsection

@push('header-scripts')
<style>
    .question-panel{
        color: #000000;
    }

    .img-responsive{
        max-height: 250px;
    }
</style>
@endpush

@push('footer-scripts')
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
  tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
});
</script>
<script type="text/javascript" async
        src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_CHTML">
</script>
@endpush