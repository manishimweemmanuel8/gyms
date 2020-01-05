<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntityPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entity_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('entity_id');
            $table->integer('receptionist_id');
            $table->integer('sport_id');
            $table->integer('membership_id');
            $table->integer('customer_list_id');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entity_payments');
    }
}
