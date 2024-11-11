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


             $table->string('account_holder_name')->nullable();

             $table->string('account_no')->nullable();

             $table->string('bank_name')->nullable();

             $table->string('ifsc_code')->nullable();

             $table->string('branch_address')->nullable();
         });
     }
     
     public function down()
     {
         Schema::table('parties', function (Blueprint $table) {
             $table->dropColumn(['account_holder_name', 'account_no', 'bank_name', 'ifsc_code', 'branch_address']);
         });
     }
     

};
