<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewerInvitationsTable extends Migration
{
    public function up()
    {
        Schema::create('reviewer_invitations', function (Blueprint $table) {

		$table->id();
		$table->string('email');
        $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

        });
    }

    public function down()
    {
        Schema::dropIfExists('reviewer_invitations');
    }
}