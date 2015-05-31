<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('peserta', function(Blueprint $table)
		{
            $table->string('noKP', 12);
            $table->primary('noKP');
            $table->string('nama', 100);
            $table->text('alamat');
            $table->string('jantina', 10);
            $table->string('noTel', 15);
            $table->string('agama', 15);
            $table->string('bangsa', 15);
            $table->string('pekerjaan', 50);
            $table->string('perkahwinan', 15);
            $table->string('pendidikan', 25);
            $table->string('photo');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('peserta');
	}

}
