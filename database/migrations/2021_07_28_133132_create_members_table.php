<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('email')->unique();
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
            $table->string('lnt_course');
            $table->string('bnccid')->unique();
            $table->string('linkedinUrl');
            $table->string('githubUrl');
            $table->string('ktp-upload');
            $table->string('fyp-upload');
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
        Schema::dropIfExists('members');
    }
}
