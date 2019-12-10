<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialsTable extends Migration {

	public function up()
	{
		Schema::create('materials', function(Blueprint $table) {
			$table->increments('id');
            $table->bigInteger('guide_id')->unsigned();
			$table->string('material')->nullable();
			$table->integer('quantity')->nullable();
			$table->string('unit')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('materials');
	}
}
