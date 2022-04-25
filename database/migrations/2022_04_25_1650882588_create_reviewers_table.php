<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewersTable extends Migration
{
    public function up()
    {
        Schema::create('reviewers', function (Blueprint $table) {

		$table->integer('reviewer_id',11);
		$table->string('first_name',30);
		$table->string('last_name',30);
		$table->string('phone_number',30);
		$table->datetime('dob');
		$table->string('address_line_1',100)->nullable();
		$table->string('address_line_2',100)->nullable();
		$table->string('city',30)->nullable();
		$table->string('country',30)->nullable();
		$table->string('website',100)->nullable();
		$table->string('affiliation',1000)->nullable();
		$table->string('description',1000)->nullable();
		$table->string('keywords',500)->nullable();
		$table->string('cv_url',500)->nullable();
		$table->string('email',30);
		$table->string('password',30);
		$table->tinyInteger('deleted')->default(0);
		$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

        });
    }

    public function down()
    {
        Schema::dropIfExists('reviewers');
    }
}