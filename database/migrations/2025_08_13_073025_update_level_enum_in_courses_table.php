<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Step 1: Update old enum values to new ones
        DB::table('courses')->where('level', 'a')->update(['level' => 'BEGINNER']);
        DB::table('courses')->where('level', 'b')->update(['level' => 'Advanced']);

        // Step 2: Change the enum definition
        Schema::table('courses', function (Blueprint $table) {
            $table->enum('level', ['BEGINNER', 'Advanced'])->change();
        });
    }

    public function down(): void
    {
        // Step 1: Revert new enum values back to old ones
        DB::table('courses')->where('level', 'BEGINNER')->update(['level' => 'a']);
        DB::table('courses')->where('level', 'Advanced')->update(['level' => 'b']);

        // Step 2: Revert enum definition
        Schema::table('courses', function (Blueprint $table) {
            $table->enum('level', ['a', 'b'])->change();
        });
    }
};
