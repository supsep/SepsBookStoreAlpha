<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    	body{
    		background-image: url('http://static.tumblr.com/430e1c00b49c4be1fb909879998aa646/vf6amcv/sVNn1hagx/tumblr_static_library_cool.jpg');
    	}
    	#searchquerytwo{
    		width: 50%;
    	}
	</style>


		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


    	@yield('head')


	 <!-- Bootstrap -->

  </head>
		 <body>
		<center>
		<br><br>
			<!-- Jumbotron-->
		 	 <div style="background-color:rgba(255,255,255,0.8);" class="jumbotron">
		    <h1>Seps Bookstore</h1><br>

		    		{{  Form::open( [ 'method' => 'post','route' => 'bookstore.ajaxcreate' ] )  }}
		{{ Form::model(null, array('route' => array('bookstore.ajaxcreate'))) }}
		 {{  Form::text('searchquerytwo', '', array('id' => 'searchquerytwo','placeholder' => 'Book title, Author or ISBN','maxlength'=>30))  }} 
		  <br><br>
		  {{  Form::submit('Search', array('class' => 'btn btn-info'))  }} 
		 
		{{  Form::close()  }}

		        	<!-- Results-->
 <div id="resultsTable">

		        @yield('result')
		        		          </div>
</div>
   <script type="text/javascript">
   	$(document).ready(function() {
    		$("#searchquerytwo").keyup( function(e) {
    			var q = $(this).val();
			    $.post("{{ route('bookstore.ajaxcreate') }}", {q: q}).done(function(data) {
			    	$("table#resultsTable").html(data);
					$("div#resultsTable").html(data);
			    });
			});
	
 		});
   </script>





		        <a class="btn btn-primary" style="position:absolute; bottom:100px; left:45%;" href="http://sepehr.ca" style="color:white;">Sepehr Taheri 2014</a>
		        </center>
		      </body>
</html>