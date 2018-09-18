@extends("main")

<!--
@section("stylesheets")
    <link rel="relstylesheet" type="text/css" href="styles.css">
@stop
-->

@section("title")
    Home
@stop

@section("content")
     <div class="row">
      <div class="col-md-12">
        <div class="jumbotron">
          <h1 class="display-4">Welcome to my blog!</h1>
          <p class="lead">Thank you for visiting my blog.</p>
            <a class="btn btn-dark btn-lg" href="/posts/2" role="button">Popular post</a>
          </p>
        </div>
      </div>
     </div>
     <div class="row justify-content-between">
      <div class="col-md-8">
       <div class="post">
         <h3>Post Title</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed eos harum, provident error nulla quidem officia perferendis corporis consequuntur quis rem explicabo eveniet molestiae praesentium debitis velit, perspiciatis non quae!</p>
       </div>
      </div>
      
      <div class="col-md-offset-1 col-md-3">
          <h2>Sidebar</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed eos harum, provident error nulla quidem officia perferendis corporis consequuntur quis rem explicabo eveniet molestiae praesentium debitis velit, perspiciatis non quae!</p>
      </div>
      
      <div class="col-md-8">
         <a role="button" class="btn btn-outline-dark btn-lg" style="background-color: lightgrey;" href="{{ route('posts.create') }}">Create new post</a>
         <br><br>
         {!! Html::linkRoute('posts.index', 'See all posts', array(), array('class' => 'btn btn-primary btn-lg')) !!}
      </div>
     </div>
     
@stop


<!--
@section("scripts")
    <script src="js/javascript"></script>
@stop-->
