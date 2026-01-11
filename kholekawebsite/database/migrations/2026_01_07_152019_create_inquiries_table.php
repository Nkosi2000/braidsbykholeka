<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('service_interest')->nullable();
            $table->date('preferred_date')->nullable();
            $table->text('message');
            $table->enum('status', ['new', 'contacted', 'booked', 'cancelled'])->default('new');
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inquiries');
    }
};