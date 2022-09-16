<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('admin_id', true);
            $table->interger('shop_id', );
            $table->string('detail', 1000)->unique();
            $table->string('email', 254)->unique();
            $table->string('password', 24);
            $table->datetime('create_at', );
            $table->datetime('updated_at', );


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
