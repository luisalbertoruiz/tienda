<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('codigo');
			$table->string('nombre');
			$table->string('marca');
			$table->string('modelo');
			$table->string('descripcion');
			$table->integer('costo');
			$table->integer('precio');
			$table->integer('existencia');
			$table->integer('categoria_id')->unsigned();
			$table->foreign('categoria_id')->references('id')->on('categorias');
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
		Schema::drop('productos');
	}

}
