<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedores extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//

		Schema::create('proveedores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre'); //nombre y appelido
			$table->string('direccion'); // Nombre de usuario para el login
			$table->string('pais');
			$table->string('telefono', 60);
			$table->string('descripcion', 60);
			$table->integer('users_id')->unsigned();
			$table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
		//
		Schema::drop( 'proveedores' );
	}

}
