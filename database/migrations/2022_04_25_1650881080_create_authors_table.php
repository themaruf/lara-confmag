<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {

		$table->integer('author_id',11);
		$table->string('first_name',30);
		$table->string('last_name',30);
		$table->string('phone_number',30);
		$table->date('dob');
		$table->string('address_line_1',100)->nullable()->default('NULL');
		$table->string('address_line_2',100)->nullable()->default('NULL');
		$table->string('city',30)->nullable()->default('NULL');
		$table->string('country',30)->nullable()->default('NULL');
		$table->string('website',100)->nullable()->default('NULL');
		$table->string('affiliation',1000)->nullable()->default('NULL');
		$table->string('description',1000)->nullable()->default('NULL');
		$table->string('email',30);
		$table->string('password',40);
		$table->string('recovery_identity',40)->nullable()->default('NULL');
		$table->tinyInteger('deleted')->default(0);
		$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

        });
    }

    public function down()
    {
        Schema::dropIfExists('authors');
    }
}