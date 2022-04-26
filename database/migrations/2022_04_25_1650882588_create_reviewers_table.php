<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewersTable extends Migration
{
    public function up()
    {
        Schema::create('reviewers', function (Blueprint $table) {

		$table->id();
		$table->string('first_name',30);
		$table->string('last_name',30);
		$table->string('phone_number',30)->unique();
		$table->date('dob');
		$table->string('address_line_1')->nullable();
		$table->string('address_line_2')->nullable();
		$table->string('city',30)->nullable();
		$table->string('country',30)->nullable();
		$table->string('website',100)->nullable();
		$table->string('affiliation',1000)->nullable();
		$table->text('description')->nullable();
		$table->string('keywords')->nullable();
		$table->string('cv_url')->nullable();
		$table->string('email',30)->unique();
		$table->string('password');
		$table->boolean('deleted')->default(0);
		$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

        });
    }

    public function down()
    {
        Schema::dropIfExists('reviewers');
    }
}