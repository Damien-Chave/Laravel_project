<!doctype html>
<html lang="en">
    <head>
        @include("partials._head")
    </head>
    <body class="body">
       <!-- include nav -->
        @include("partials._nav")
    
        <br>
        <div class="container">
            <!-- Messages on top -->
             @include("partials._messages") 
            <!-- Content filled from view -->
             @yield("content") 
             
             <br><br><br><br>
             <hr>
             <footer>
             @include("partials._footer")
             </footer>
        </div> <!-- end of class .container -->
     
        @include("partials._javascript")
        <!-- Optional scripts -->
        @yield("scripts")
    </body>
</html>
