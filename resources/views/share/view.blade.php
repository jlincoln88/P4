@extends('layouts.master')

@section('title')

	View Recipe: {{ $recipe->recipe_name }}

@stop

@section('content')

	<h1>{{ $recipe->recipe_name }}</h1>
	<h3>{{ $recipe->recipe_description }}</h3>
	<div class='row container padded'>
	<img src=' {{ $recipe->recipe_image }}' class= 'img-responsive img-rounded recipe_image' alt= 'Image for {{ $recipe->recipe_name }}'>
	</div>

	<div class='list-group'>
		<a href="#" class="list-group-item active">Ingredients</a>
		@foreach($ingredients_for_this_recipe as $ingredient => $ingredient_id)
			<a href='#' class='list-group-item'>{{ $ingredient_id }}</a>
		@endforeach
	</div>

	<div class='list-group'>
		<a href="#" class="list-group-item active">Instructions</a>
		<a href='#' class='list-group-item'>
		@foreach($instructions_for_this_recipe as $instruction => $instruction_text)
			<p>{{ $instruction_text }}</p>
		@endforeach
		</a>
	</div>

	<div class="panel panel-danger">
		<div class="panel-heading">
			<h3 class="panel-title">Additional Options</h3>
		</div>
		<div class='panel-body'>
			<a href='/share/confirm-delete/{{ $recipe->id }}'>Delete recipe</a>	
			<br>
			<a href='/share/edit/{{ $recipe->id }}'>Edit recipe</a>
		</div>
	</div>


@stop

<!--
<div class="list-group">
  <a href="#" class="list-group-item active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item">Dapibus ac facilisis in
  </a>
  <a href="#" class="list-group-item">Morbi leo risus
  </a>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Panel primary</h3>
  </div>
  <div class="panel-body">
    Panel content
  </div>
</div>
-->