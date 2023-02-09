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
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->char('logo',100);
            $table->char('card_image',100);
            $table->text('footer_text');
            $table->text('free_trl_text');
            $table->char('email',50);
            $table->char('home_button_text',150);
            $table->char('bennar_text_small',250);
            $table->text('bennar_text',150);
            $table->char('phone',50);
            $table->char('address',250);
            $table->text('map');
            $table->char('contact_text',200);
            $table->char('pricing_text',200);
            $table->char('portfolio_text',200);
            $table->char('service_text',200);
            $table->char('copyright_text',200);
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
        Schema::dropIfExists('generals');
    }
};
