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
        Schema::create('parties', function (Blueprint $table) {

            $table->id();

            $table->string('phone_no', 15)->nullable();

            $table->string('city')->nullable();

            $table->text("address")->nullable();

            $table->string('account_holder_name')->nullable();
            $table->string('account_no')->nullable();
            $table->string('bank_name')->nullable();

            $table->string('ifsc_code')->nullable();
            
            $table->text("branch_address")->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parties');
    }
};
