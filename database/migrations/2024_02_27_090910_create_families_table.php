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
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('religion');
            $table->text('address');
            $table->string('phone_number');
            $table->string('last_education');
            $table->string('working_as');
            $table->string('varchar');
            $table->UnsignedBigInteger('student_id');
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
        $table->dropForeign('lists_student_id_foreign');
        $table->dropIndex('lists_student_id_index');
        $table->dropColumn('student_id');
    }
};
