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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('registration_uid')->unique();
            $table->unsignedBigInteger('student_id');
            $table->string('status')->nullable();
            $table->string('status_information')->nullable();
            $table->double('amount')->nullable();
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
        $table->dropForeign('lists_student_id_foreign');
        $table->dropIndex('lists_student_id_index');
        $table->dropColumn('student_id');
    }
};
