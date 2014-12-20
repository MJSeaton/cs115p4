<?php
class SubmissionController extends BaseController
{
    
    public function Submit_Recipe_to_DB($form_Data){
        $recipe = new Recipe();
        $recipe -> name = $form_Data["title"];
        $recipe -> primary_tag= "N/A";
        $recipe -> secondary_tag= "N/A";
        $recipe -> cooking_directions= $form_Data["directions"];
        $split_Ingredients = explode("!x!", $form_Data['ingredients']);
        foreach($split_Ingredients as $ingredientID){
            $row_Obj=DB::table('ingredients')->where('name', (substr($ingredientID), 0, -3))->first();
            if (is_null($row_Obj)){
                $ingredient = new Ingredient();
                $ingredient -> name= $ingredientID;
                $ingredient -> primary_tag="N/A";
                $ingredient -> secondary_tag="N/A";
                $ingredient -> save();
            }
        }
        $recipe -> ingredient_IDs= $form_Data['ingredients'];
        $recipe -> amounts_of_ingredients =$form_Data["amounts"];
        $recipe -> save();
    }

    public function 
} 

?>