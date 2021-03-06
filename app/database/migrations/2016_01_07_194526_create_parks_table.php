<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parks', function($table)
		{
    		$table->increments('id'); //auto-increment, unsigned, primary key is handled by increments
    		// $table->string('name', 240)->nullable(); <- can be null
    		$table->string('name', 240);
    		$table->text('description');
    		$table->date('date_established');
    		$table->float('area_in_acres');
    		$table->string('location', 50);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parks');
	}

}
