<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
   
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('bkash no');
            $table->string('bkash Transaction ID');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
}
