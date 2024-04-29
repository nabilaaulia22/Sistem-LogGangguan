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
        Schema::table('down', function (Blueprint $table) {
            $table->dropColumn('sid');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('down', function (Blueprint $table) {
            $table->string('sid')->after('id')->nullable();
        });
    }
};
