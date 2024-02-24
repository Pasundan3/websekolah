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
        Schema::create('parent_biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik');
            $table->date('birth_of_date');
            $table->string('gender');
            $table->string('religion');
            $table->text('address');
            $table->string('phone_number');
            $table->string('last_education');
            $table->string('working_as');
            $table->string('income');
            $table->unsignedBigInteger('user_profile_id')->index();
            $table->timestamps();

            $table->foreign('user_profile_id')->references('id')->on('userprofiles')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent_biodatas');
    }
};
