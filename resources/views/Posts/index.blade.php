@extends("main")

@section("title", "| All Posts")

@section("content")
    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-outline-dark btn-lg" style="background-color: lightgrey;" >Create new post</a>
        </div>
    </div>
   
   <div class="row" style="margin-top: 15px">
    <div class="col-md-12">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th> {{ $post->id }} </th>
                        <td> {{ $post->title }} </td>
                        <td> {{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }} </td>
                        <td> {{ date('M, jS Y', strtotime($post->created_at)) }}<br>{{ date('g:i A', strtotime($post->created_at)) }} </td>
                        <td>
                        {!! Html::linkRoute('posts.show', 'View', array($post->id), array('class' => 'btn btn-sm btn-dark btn-block')) !!}
                        
                        {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-sm btn-info btn-block')) !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   </div>
   <div class="pagination">
        <div class="row" style="margin: auto;">
            {!! $posts->links() !!}
         </div>
      </div>
@stop