Route::get('/test', function(){
    return View::make('RecipePage')
        ->with('infoSeed', $inputArray=array($recipeTitle->'Recipe Title', $instructionsArray-> array('instruction1','instruction2'), $ingredientArray->array('ingredient1','ingredient2'), $amountsArray->array('amount1', 'amount2')));})

Route::get('recipe/{recipeID}', function($recipeID){
    $recipe_Shell = DB::table('recipes')->where('id', $recipeID);
    $sliced_Ingredients_ID = explode("!x!", ($recipe_Shell->ingredient_ids));
    $ingredient_Names=array();
    $sliced_Directions=explode("!x!", $recipe_Shell->cooking_directions);

    foreach($sliced_Ingredients_ID as $ingredient){
        $ingredient_Names[] = DB::table('ingredients')->where('id',$ingredient);
    }
    foreach($cooking_Direction as $direction){

    }
    return View::make('RecipePage')
    ->with('infoSeed', $inputArray=array($recipeTitle->$recipe_Shell->name, $instructionsArray->$sliced_Directions, $ingredientsArray->$ingredient_Names, $amountsArray-> $recipe_Shell->amounts_of_ingredients));})   


Route::get('recipe/submit', function(){
    return View::make('SubmitRecipe.blade.php');
})

Route::get('/search/{recipeName}', function($recipeName) {

    $recipe = Recipe::where('name', 'LIKE', '%$recipeName')->first();

    if($recipe) {
        $sliced_Ingredients_ID = explode("!x!", ($recipe->ingredient_ids));
        $sliced_Directions=explode("!x!", $recipe->cooking_directions);

        return View::make('RecipePage')
    ->with('infoSeed', $inputArray=array($recipeTitle->$recipe->name, $instructionsArray->$sliced_Directions, $ingredientsArray->$ingredient_Names, $amountsArray-> $recipe->amounts_of_ingredients));
    }
    else {
        return 'Recipe not found.';
    }

});