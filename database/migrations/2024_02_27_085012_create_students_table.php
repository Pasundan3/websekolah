<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nisn');
            $table->string('nik');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('religion');
            $table->text('address');
            $table->string('phone_number');
            $table->string('last_education');
            $table->UnsignedBigInteger('user_id');
            $table->boolean('verify_status');
            $table->text('verify_information')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
        $table->dropForeign('lists_user_id_foreign');
        $table->dropIndex('lists_user_id_index');
        $table->dropColumn('user_id');
    }
};
