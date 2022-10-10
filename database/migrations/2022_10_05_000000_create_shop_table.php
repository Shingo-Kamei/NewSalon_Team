<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name', 256)->comment('店舗名');
            $table->text('detail')->comment('店舗詳細');
            $table->string('open_hour', 254)->comment('営業時間');
            $table->string('close_day', 254)->comment('定休日');
            $table->text('address')->comment('店舗住所');
            $table->string('tel', 13)->comment('電話番号');
            $table->integer('seat_num')->comment('座席数');
            $table->integer('staff_num')->comment('スタッフ人数');
            $table->integer('parking')->comment('駐車場 あり／なし');
            $table->datetime('create_at');
            $table->datetime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
