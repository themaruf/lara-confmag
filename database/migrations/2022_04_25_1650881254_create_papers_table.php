<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapersTable extends Migration
{
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {

		$table->integer('paper_id',11);
		$table->string('paper_name',200);
		$table->string('paper_keywords',200);
		$table->text('abstract');
		$table->tinyInteger('status')->default(1);
		$table->integer('review_id')->nullable();
		$table->timestamp('added_time')->default(DB::raw('CURRENT_TIMESTAMP'));
		$table->tinyInteger('deleted')->default(0);
        $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

        });
    }

    public function down()
    {
        Schema::dropIfExists('papers');
    }
}