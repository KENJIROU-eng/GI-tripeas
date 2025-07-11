<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('belongings', 'description')) {
        Schema::table('belongings', function (Blueprint $table) {
            $table->text('description')->nullable()->after('name');
        });
        }
    }

    public function down(): void
    {
        Schema::table('belongings', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }

};
