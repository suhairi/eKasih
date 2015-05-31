<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBantuansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bantuan', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('noKP', 12);
            $table->text('program');
            $table->decimal('nilai', 7, 2);
            $table->integer('tahun');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bantuan');
	}

}
