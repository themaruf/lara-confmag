<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperReviewerTable extends Migration
{
    public function up()
    {
        Schema::create('paper_reviewer', function (Blueprint $table) {

		$table->id();
		$table->integer('reviewer_id');
		$table->integer('paper_id');
        $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

        });
    }

    public function down()
    {
        Schema::dropIfExists('paper_reviewer');
    }
}