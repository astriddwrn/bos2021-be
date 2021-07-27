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

            $table->string("whatsapp")->unique();
            $table->string("line_id")->unique();
            $table->string('nim')->unique();
            $table->string('campus');
            $table->string('major');
            $table->string('batch');
            // $table->bigInteger('schedule_id')->unsigned()->nullable()/*inget untuk hapus nullable*/;
            // $table->foreign('schedule_id')->references('id')
            //                               ->on('schedules');
            $table->string('schedule');
            $table->string('lnt_course');
            $table->integer('role')->default(0);
            $table->string('payment_pic')->nullable();
            $table->integer('status')->default(0);
            $table->integer('is_re-registered')->default(0);
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
