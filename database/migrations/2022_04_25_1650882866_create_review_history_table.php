<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewHistoryTable extends Migration
{
    public function up()
    {
        Schema::create('review_history', function (Blueprint $table) {

		$table->id();
		$table->integer('paper_id');
		$table->integer('reviewer_id');
		$table->integer('review_id');
		// $table->datetime('timestamp');
        $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('review_history');
    }
}