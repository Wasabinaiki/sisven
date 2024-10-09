<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->char('document_number', 15)->unique();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->char('address', 80);
            $table->date('birthday');
            $table->char('phone_number', 16);
            $table->string('email', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
