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
       Schema::table('lessons', function (Blueprint $table) {
            // Drop old foreign key and column
            $table->dropForeign(['course_id']);
            $table->dropColumn('course_id');

            // Add new curriculum_id column with foreign key
            $table->unsignedBigInteger('curriculum_id')->after('id'); // adjust placement if needed
            $table->foreign('curriculum_id')->references('id')->on('curriculum')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lessons', function (Blueprint $table) {
            // Reverse the changes
            $table->dropForeign(['curriculum_id']);
            $table->dropColumn('curriculum_id');

            $table->unsignedBigInteger('course_id')->after('id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }
};
