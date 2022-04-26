<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperAuthorTable extends Migration
{
    public function up()
    {
        Schema::create('paper_author', function (Blueprint $table) {

		$table->id();
		$table->integer('author_id');
		$table->integer('paper_id');
		$table->string('co_author_name0',30)->nullable();
		$table->string('co_author_email0',30)->nullable();
		$table->string('co_author_name1',30)->nullable();
		$table->string('co_author_email1',30)->nullable();
		$table->string('co_author_name2',30)->nullable();
		$table->string('co_author_email2',30)->nullable();
		$table->string('co_author_name3',30)->nullable();
		$table->string('co_author_email3',30)->nullable();
        $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));


        });
    }

    public function down()
    {
        Schema::dropIfExists('paper_author');
    }
}