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

            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string("whatsapp")->unique();
            $table->string("line_id")->unique();
            /* $table->set("gender", ["male", "female"]);
            $table->date("date_of_birth");
            $table->string('place_of_birth');
            $table->string('city');
            $table->string('address');
            $table->string('nim');
            $table->string('campus');
            $table->string('major');
            $table->bigInteger('schedule_id');
            $table->string('lnt_course'); */

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
