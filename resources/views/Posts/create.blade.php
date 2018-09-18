@extends("main")

@section("title")
    | Create Post
@stop

@section("stylesheets")
    {!! Html::style('css/parsley.css') !!}
@stop

@section("content")
    
     <div class="row">
      <div class="col-md-8 mx-auto">
       <h2>Create a new post</h2>
       <hr>
       
        {!! Form::open(['route' => 'posts.store']) !!}
            <br>
            {{ Form::label("title", "Title:") }}
            {{ Form::text("title", null, array("class" => "form-control", 'required', 'minlength' => "3", 'maxlength="80"')) }}
            <br>
            {{ Form::label("body", "Post:") }}
            {{ Form::textarea("body", null, array("class" => "form-control", 'required', 'minlength' => "6")) }}
            
            {{ Form::submit("Create post", ["class" => "btn btn-success btn-lg", "style" => "margin-top: 20px"]) }}
        {!! Form::close() !!}
       
      </div>
     </div>


@stop

@section("scripts")
    {!! Html::script('js/parsley.min.js') !!}
@stop