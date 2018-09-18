@extends("main")

@section("title", "| Show Post")

@section("content")
  <div class="row">
  @foreach($page as $post)
   <div class="col-md-8">
    <h1> {{ $post->title }} </h1>
     <p class="lead"> {{ $post->body }} </p>
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
<!--                   <a href="edit" class="btn btn-primary btn-block">Edit</a>-->
                   {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-info btn-block')) !!}
                   </div>
                   <div class="col"><br>
                   {!! Form::open(array('route' => ['posts.destroy', $post->id], 'method' => 'DELETE')) !!}
                   {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) !!}
                   {!! Form::close() !!}
                </div>
                </div>
             </dl>
          </div>
      </div>
      @endforeach
    </div>
     <div class="text-center">
      <div class="pagination">
        <div class="row" style="margin: auto;">
            {!! $page->links() !!}
         </div>
      </div>
      {!! Html::linkRoute('posts.index', 'See all posts', array(), array('class' => 'btn btn-sm btn-primary btn-lg')) !!}
    </div>
  </div>
</div>
@stop
