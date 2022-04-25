<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperFilesTable extends Migration
{
    public function up()
    {
        Schema::create('paper_files', function (Blueprint $table) {

		$table->integer('paper_file_id',11);
		$table->integer('paper_id');
		$table->string('file_name',30);
		$table->timestamp('upload_time')->default(DB::raw('CURRENT_TIMESTAMP'));
        $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));


        });
    }

    public function down()
    {
        Schema::dropIfExists('paper_files');
    }
}