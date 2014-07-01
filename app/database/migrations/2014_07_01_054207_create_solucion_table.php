<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolucionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('soluciones', function($table)
		{
		    $table->increments('id');
		    $table->string('solucion');
		    $table->string('letras');
		    $table->string('cantidad');
		    $table->string('imagen');
		    $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('soluciones');
	}

}
