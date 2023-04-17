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
        Schema::create('_request_to_collect', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("House_Number");
            $table->string("Area_Name");
            $table->string("Road_No");
            $table->string("City");
            $table->string("Postal_Code");
            $table->string("mobile");
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
        Schema::dropIfExists('_request_to_collect');
    }
};
