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
        Schema::create('academic_user_views', function (Blueprint $table) {
            $table->id();
            $table->string('academic_name');
            $table->string('section');
            $table->string('routine');
            $table->string('text_book');
            $table->integer('total_student');
            $table->integer('male_student');
            $table->integer('female_student');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_user_views');
    }
};
