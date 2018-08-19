@extends('layouts/app')

@section('content')
   	<!-- Jumbo -->
   	<div class="row row-offcanvas row-offcanvas-right">
   		<div class="col-xs-12 col-sm-12">
   			<p class="pull-xs-right hidden-sm-up">
   				<button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
   			</p>
   			<div class="jumbotron">
   				<h1>Hello, world!</h1>
   				<p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
   			</div>
   		</div>
   	</div>

   	<!-- Posts -->
   	<div class="row">

@foreach($posts as $post)
   		<div class="col-xs-6 col-lg-4" id="posts_list">
   			<a href="/post/{{ $post->slug }}">
   				<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
   				<h2>{{ $post->title }}</h2>
   				<!--<p>{{ $post->excerpt }}</p>-->
   			</a>
   		</div><!--/span-->
@endforeach

		<div class="clear"></div>
	</div><!--/row-->

@endsection