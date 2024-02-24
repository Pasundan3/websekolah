<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userprofiles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');

            $table->string('username')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('gender')->nullable();

            $table->string('url_website')->nullable();
            $table->string('url_facebook')->nullable();
            $table->string('url_twitter')->nullable();
            $table->string('url_instagram')->nullable();
            $table->string('url_linkedin')->nullable();

            $table->text('bio')->nullable();
            $table->string('avatar')->nullable();
            $table->text('user_metadata')->nullable();
            $table->string('last_ip')->nullable();
            $table->integer('login_count')->default(0);
            $table->timestamp('last_login')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('status')->default(1)->unsigned();

            $table->string('name');
            $table->string('nisn')->unique();
            $table->string('nik')->unique();
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('religion');
            $table->text('address');
            $table->string('phone_number');
            $table->text('sekolah_asal');
            $table->boolean('verify_status');
            $table->text('verify_information')->nullable();

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userprofiles');
    }
};
