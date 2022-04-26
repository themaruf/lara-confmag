<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapersTable extends Migration
{
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {

		$table->id();
		$table->string('paper_name');
		$table->string('paper_keywords');
		$table->text('abstract');
		$table->boolean('status')->default(1);
		$table->integer('review_id')->nullable();
		$table->boolean('deleted')->default(0);
        $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

        });
    }

    public function down()
    {
        Schema::dropIfExists('papers');
    }
}