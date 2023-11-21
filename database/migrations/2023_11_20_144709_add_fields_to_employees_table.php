<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedBigInteger('company_id');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            // Foreign key constraint with cascade on delete
            $table->foreign('company_id')
                ->references('id')->on('companies')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn(['first_name', 'last_name', 'company_id', 'email', 'phone']);
        });
    }
};
