<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInstructionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_instructions', function (Blueprint $table){

            #incrementing ID field
            $table->increments('id');

            #created/updated timestamps
            $table->timestamps();
            
            #create FK fields
            ##fk initialize
            $table->integer('recipe_id')->unsigned();
            ##make fk
            $table->foreign('recipe_id')->references('id')->on('user_recipes');

            #main data
            $table->string('instruction_text');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_instructions');
    }
}
