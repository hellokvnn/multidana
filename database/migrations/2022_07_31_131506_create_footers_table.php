<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo');
            $table->string('kota');
            $table->string('alamat');
            $table->string('telp');
            $table->string('fax');
            $table->string('email');
            $table->string('solution_centre');
            $table->string('whatsapp');
            $table->string('link_whatsapp');
            $table->string('link_instagram');
            $table->string('link_twitter');
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
        Schema::dropIfExists('footers');
    }
}
