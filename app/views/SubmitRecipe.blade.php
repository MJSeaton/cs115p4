@extends('BaseTemplate')
@section('Header')
<div class="bar_element">
    <h1></h1>
</div>
@stop
@section('Content')
<div class="recipe_Content_Header">
    <H1>Submit a new recipe</H1>
  
    </div>
<div class="recipe_Content">
   
    <div class="ingredients_And_Amounts">
        
        {{ Form::open(array('url'=>'submitted', 'method'=>'put')) }}
        {{ Form::textarea('title')}}
        {{ Form::textarea('ingredients')}}
        {{ Form::textarea('amounts')}}
        {{ Form::textarea('directions')}}
        {{ Form::submit('submit') }}
        {{ Form::close() }}
        
    </div>
    

    </div>


@stop
