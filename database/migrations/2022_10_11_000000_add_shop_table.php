<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appoints', function (Blueprint $table) {
            $table->date('appoint_at')->after('tel')->comment('予約日');
        });
        Schema::table('shops', function (Blueprint $table) {
            $table->dropColumn('create_at');
            $table->datetime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appoints', function (Blueprint $table) {
            $table->dropColumn('appoint_at');
        });
    }
}
