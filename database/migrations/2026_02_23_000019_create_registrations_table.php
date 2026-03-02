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
            $table->string('registration_number', 50)->unique();
            $table->string('full_name', 150);
            $table->string('email', 150);
            $table->string('phone', 20);
            $table->foreignId('study_program_id')->constrained('study_programs')->cascadeOnDelete();
            $table->string('birth_place', 200);
            $table->date('birth_date');
            $table->enum('gender',['male','female']);
            $table->text('address');
            $table->string('school_origin', 150);
            $table->year('graduation_year');
            $table->enum('status',['pending','verified','accepted','rejected']);
            $table->enum('payment_status',['unpaid','paid','confirmed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
