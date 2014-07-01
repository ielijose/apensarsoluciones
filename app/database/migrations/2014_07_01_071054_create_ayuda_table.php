<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAyudaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ayudas', function($table)
		{
		    $table->increments('id');
		    $table->string('ip');
		    $table->integer('solucion_id')->unsigned();
		    $table->timestamps();

		    $table->foreign('solucion_id')->references('id')->on('soluciones');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ayudas');
	}

}
