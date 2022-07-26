<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPulsaH2hItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pulsa_h2h_item', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode', 10);
            $table->string('operator');
            $table->double('harga');
            
            $table->foreignId('pulsa_h2h_item_id')
                    ->constrained('pulsa_h2h_item')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                    
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
        Schema::dropIfExists('detail_pulsa_h2h_item');
    }
}
