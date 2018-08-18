<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   <title>{{ config('app.name', 'Laravel') }} | {{ $post->title }}</title>
@include('shared.header')
</head>
<body>
@include('shared.navtop')


<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">

			<!-- Хлебные крошки -->
			<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Посты</a></li>
				<li class="breadcrumb-item active" aria-current="page">Последние</li>
			</ol>
			</nav>

			<!-- Пост -->
			<h1>{{ $post->title }}</h1>
			<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
			<p>{!! $post->body !!}</p>

		</div>
	</div>
@include('shared.footer')
</div>


</body>
</html>