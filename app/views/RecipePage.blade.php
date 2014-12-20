@extends('BaseTemplate')
@section('Header')
<div class="bar_element">
    <h1></h1>
</div>
@stop
@section('Content')
<div class="recipe_Content_Header">
    
    @if(isset($infoSeed['imgLocation']))
    <br>
    {{ HTML::image($infoSeed['imgLocation'], $infoSeed['recipeTitle']) }}
    @endif
    @if((count($infoSeed['ingredientArray']))== (count($infoSeed['amountsArray'])))

@if((isset($infoSeed['recipeTitle'])) && (isset($infoSeed['instructionsArray'])) && (isset($infoSeed['ingredientArray'])) && (isset($infoSeed['amountsArray'])))
    
    <H1>{{$infoSeed['recipeTitle']}}</H1>
        
@else
    
 <H1>Take me to an error page here</H1>
        
@endif

    </div>
<div class="recipe_Content">
   
    <div class="ingredients_And_Amounts">
         <div class="subtitle_element">Ingredients</div>
        <ul>
        @for($i=0; $i<count($infoSeed['amountsArray']); $i++)
        <li>
        <div class="ingredient_Line">
            <div class="amount">
                {{{$infoSeed['amountsArray'][$i]}}}
                
            </div>
            <div class="ingredient_Name">
                {{$infoSeed['ingredientArray'][$i]}}
            </div>
        </div>
            </li>
        
        @endfor
        </ul>
    </div>
    
    <div class="cooking_Instructions">
        <div class="subtitle_element">Directions</div>
        <ul>
            @foreach($infoSeed['instructionsArray'] as $cookingInstruction)
                <li>
                <p class="cooking_Paragraph">
                    {{$cookingInstruction}}
                </p>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endif
@stop
