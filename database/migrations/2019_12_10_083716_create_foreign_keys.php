<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('materials', function(Blueprint $table) {
			$table->foreign('guide_id')->references('id')->on('guides')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('materials', function(Blueprint $table) {
			$table->dropForeign('materials_guide_id_foreign');
		});
	}
}