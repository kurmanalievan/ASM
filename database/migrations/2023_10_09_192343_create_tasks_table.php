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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutor_id')->constrained(
                table: 'users', indexName: 'id'
            );
            $table->foreignId('student_id')->constrained(
                table: 'users', indexName: 'id'
            );
            $table->string('title');
            $table->text('instructions');
            $table->date('date');
            $table->integer('points');
            $table->string('tutor_file')->nullable();
            $table->string('student_file')->nullable();
            $table->integer('grade')->nullable();
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
