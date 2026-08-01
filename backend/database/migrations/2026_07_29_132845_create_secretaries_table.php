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
        Schema::create('secretaries', function (Blueprint $table) {
            $table->id();

$table->foreignId('doctor_id')->constrained()->cascadeOnDelete();

$table->string('first_name');
$table->string('last_name');
$table->string('national_code', 20)->unique();
$table->string('mobile', 20);
$table->string('email')->nullable()->unique();
$table->string('password');

$table->boolean('is_active')->default(true);

$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('secretaries');
    }
};
