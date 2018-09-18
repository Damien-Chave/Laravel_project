@extends("main")

@section("title")
    Contact
@stop

@section("content")
    
     <div class="row">
      <div class="col-md-12 mx-auto">
       <h2>Contact</h2>
       <hr>
       <form action="#" data-parsley-validate>
           <div class="form-group">
               <label for="email">Email:</label>
               <input id="email" name="email" class="form-control" type="email" required>
           </div>
           <div class="form-group">
               <label for="subject">Subject:</label>
               <input id="subject" name="subject" class="form-control" minlength="3" required>
           </div>
           <div class="form-group">
               <label for="message">Message</label>
               <textarea id="message" name="message" class="form-control" minlength="6" required placeholder="Type your message here..."></textarea>
           </div>
           <input type="submit" class="btn btn-success" value="Send message">
       </form>
      </div>
     </div>


@stop

@section("scripts")
    {!! Html::script('js/parsley.min.js') !!}
@stop