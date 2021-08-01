<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('fullName');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gender');
            $table->date('birthDate');
            $table->string('placeBirth');
            $table->string('domicile');
            $table->string('address');
            $table->string('personal_email')->unique();
            $table->string("whatsapp")->unique();
            $table->string("line_id")->unique();
            $table->string('nim')->unique();
            $table->string('campus');
            $table->string('major');
            $table->string('batch');
            $table->json('schedule');
            $table->string('is_esport')->nullable();
            $table->string('lnt_course');
            $table->integer('role')->default(0);
            $table->string('payment_pic')->nullable();
            $table->integer('status')->nullable();
            $table->integer('is_reregistered')->default(0);

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
