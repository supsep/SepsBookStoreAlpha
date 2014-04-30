@extends('layout')

@section('head')

<link rel="stylesheet" type="text/css" href="{{ URL::to('public/css/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::to('public/css/bootstrap-theme.min.css') }}" />

<script type="text/javascript" src="{{URL::to('public/js/jquery.min.js') }}"></script>  
<script type="text/javascript" src="{{URL::to('public/js/bootstrap.min.js') }}"></script>  


@endsection


@section('result')
		        
	@if (isset($results) AND 1 > count($results))

		   <h2>No Result</h2>
	@elseif (isset($results) AND count($results)>0)
 <div id="resultsTable">
	<h3>Results</h3>
		  @foreach($results as $result)
			<!-- Button -->	
		    <a class="btn" data-toggle="modal" data-target="#{{ $result->ISBN}}">{{ $result->book_title }}</a><br>
			<!-- Modal -->			
			<div class="modal fade" id="{{ $result->ISBN}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title" id="myModalLabel"><b>{{ $result->book_title }}</b></h4><h5>By {{ $result->author_last_name }}, {{ $result->author_first_name }}</h5>
			      </div>
			      <div class="modal-body">
			      <H5>ISBN : </H5>{{ $result->ISBN }}
			      <H5>Description : </H5>  {{ $result->book_description }}
			      <H5>Date Published : {{ $result->date_published }}</H5>
			        			      </div>
			    </div>
			  </div>
			</div>
	   		 @endforeach  
</div>

	@endif   
@endsection
@stop