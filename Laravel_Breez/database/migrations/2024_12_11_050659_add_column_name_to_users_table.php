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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number', 20)->nullable(); // Define phone_number as string with length 20
            $table->text('bio')->nullable(); // Corrected 'nullable' spelling
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone_number'); // Drop the 'phone_number' column
            $table->dropColumn('bio'); // Drop the 'bio' column
        });
    }
};
