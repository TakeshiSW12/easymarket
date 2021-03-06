<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTypesTable extends Migration
{
   public function up()
   {
      Schema::create('payment_types', function (Blueprint $table) {
         $table->increments('id')->unsigned();
         $table->string('name');
      });
   }

   public function down()
   {
      Schema::drop('payment_types');
   }
}
