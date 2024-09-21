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
        Schema::create('group_tests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });

        Schema::table('tests', function (Blueprint $table) {
            $table->integer('group_test_id')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_tests');
        Schema::table('tests', function (Blueprint $table) {
            $table->dropColumn('group_test_id');
        });
    }
};
