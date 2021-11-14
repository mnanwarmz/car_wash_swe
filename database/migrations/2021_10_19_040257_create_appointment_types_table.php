<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('appointment_types', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('transcation_id');//transcation id == paymnent id
            $table->integer('total')->deafult(0);
            $table->string("name");
            $table->string("slug")->unique();
            $table->integer("price")->default(0); //updated price to integer for better integration with stripe API
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
        Schema::dropIfExists('appointment_types');
    }
}
