<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
          Schema::create('recipes', function($table){
            $table->increments('id');
            $table->string('name');
            $table->string('primary_tag');
            $table->string('secondary_tag');
            $table->text('cooking_directions');
            $table->text('ingredient_ids');
            $table->text('amounts_of_ingredients');
            $table->timestamps();
        });
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        drop('recipes');
		//
	}

}
