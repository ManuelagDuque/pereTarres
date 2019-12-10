<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuidesTable extends Migration
{

	public function up()
	{
		Schema::create('guides', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('title');
			$table->text('topic')->nullable();
			$table->string('author')->nullable();
			$table->year('year')->nullable();
			$table->string('picture')->nullable();
			$table->text('goal')->nullable();
			$table->text('description')->nullable();
			$table->smallInteger('assistants_quantity')->nullable();
			$table->smallInteger('duration_hours')->nullable();
			$table->string('methodology')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('guides');
	}
}
