<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('phonenumber');
            $table->string('email');
            $table->unsignedBigInteger('roomid');
            $table->string('rentdue' ,5,2);
            $table->double('rentpaid',5,2);
            $table->double('balance',5,2);
           
            $table->date('datemovedin');
            $table->date('datemovedout')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
};
