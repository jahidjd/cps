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
        Schema::create('add_services', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('service_id');
            // $table->foreign('service_id')->references('id')->on('services')->onUpdate('cascade')->onDelete('cascade');
            // $table->unsignedBigInteger('pricing_id');
            // $table->foreign('pricing_id')->references('id')->on('price_lists')->onUpdate('cascade')->onDelete('cascade');
            $table->json('pricing_id',100);
            $table->char('name',100);
            $table->char('phone',100);
            $table->char('email',100);
            $table->char('address',100);
            $table->integer('sub_total');
            $table->integer('grand_total');
            $table->char('comments',255);
            $table->enum('status', ['pending', 'done'])->default('pending');
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
        Schema::dropIfExists('add_services');
    }
};
