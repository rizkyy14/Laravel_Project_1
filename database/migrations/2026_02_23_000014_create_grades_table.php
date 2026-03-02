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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enrollment_id')->constrained('enrollments')->cascadeOnDelete();
            $table->decimal('attendance', 5,2)->default('0');
            $table->decimal('assignment', 5,2)->default('0');
            $table->decimal('mid_exam', 5,2)->default('0');
            $table->decimal('final_exam', 5,2)->default('0');
            $table->decimal('final_scroe', 5,2);
            $table->char('grade_letter',2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
