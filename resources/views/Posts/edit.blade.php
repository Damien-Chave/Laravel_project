@extends("main")

@section("title", "| Edit Post")

@section("content")
  <div class="row">
   <div class="col-md-8">
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
            <br>
            {{ Form::label("title", "Title:") }}
            {{ Form::text("title", $post->title, array("class" => "form-control", 'required', 'minlength' => "3", 'maxlength="80"')) }}
            <br>
            {{ Form::label("body", "Post:") }}
            {{ Form::textarea("body", $post->body, array("class" => "form-control", 'required', 'minlength' => "6")) }}
            
            {{ Form::submit("Save changes", ["class" => "btn btn-lg btn-success", "style" => "margin-top: 20px"]) }}
   </div>
  
  <div class="col-md-4">
     <br><br>
     
     <div class="jumbotron">
      <div class="container">
          <div class="well">
            <dl class="dl-horizontal">
              <dt>Last update :</dt>
               <dd> {{ date('M, jS Y', strtotime($post->updated_at)) }} at {{ date('g:i A', strtotime($post->updated_at)) }} 
               </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Posted :</dt>
                <dd> {{ date('M, jS Y', strtotime($post->created_at)) }} at {{ date('g:i A', strtotime($post->created_at)) }} 
                </dd>
                <hr>
                <div class="row">
                <div class="col"><br>          
                   {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-outline-info btn-block')) !!}
                   </div>
<!--
                   <div class="col"><br>
                 {!! Html::linkRoute('posts.update', 'Save Changes', array($post->id), array('class' => 'btn btn-success btn-block')) !!}
                </div>
-->
                </div>
             </dl>
          </div>
      </div>
    </div>
  </div>
</div>
@stop