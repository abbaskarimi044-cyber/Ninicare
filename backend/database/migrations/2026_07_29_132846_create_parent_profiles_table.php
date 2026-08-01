
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
        Schema::create('parent_profiles', function (Blueprint $table) {
            $table->id();

            // ارتباط با جدول کاربران
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            // اطلاعات پدر
            $table->string('father_name')->nullable();
            $table->string('father_mobile', 20)->nullable();

            // اطلاعات مادر
            $table->string('mother_name')->nullable();
            $table->string('mother_mobile', 20)->nullable();

            // اطلاعات تماس
            $table->string('email')->nullable();

            // اطلاعات هویتی
            $table->string('national_code', 10)->nullable();

            // محل سکونت
            $table->string('city')->nullable();
            $table->text('address')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent_profiles');
    }
};