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
        Schema::create('students', function (Blueprint $table) {
            //$table->id();
            $table->int('idstudents',7);
            $table->varchar('nis',12)->unique();
            $table->string('fullname',100);
            $table->enum('gender',['m','f']);
            $table->string('address',100);
            $table->string('emailaddress',100);
            $table->char('phone',20);
            $table->primary('idstudents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
