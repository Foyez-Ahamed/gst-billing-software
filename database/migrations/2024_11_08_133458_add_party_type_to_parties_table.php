<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('parties', function (Blueprint $table) {
            $table->enum("party_type", ['vendor', 'client', 'employee'])->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('parties', function (Blueprint $table) {
            $table->dropColumn('party_type');
        });
    }
};
