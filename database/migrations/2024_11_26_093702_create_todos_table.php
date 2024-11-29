<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('task');
            $table->string('description');
            $table->string('status', ['Active', 'Inactive'])->default('Active');

            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('todos');
    }
};
