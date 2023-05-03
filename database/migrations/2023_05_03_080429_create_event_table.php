<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('tensukien');
            $table->string('slug_sukien');
            $table->string('diadiem');
            $table->longText('chitietsukien');
            $table->string('image');
            $table->double('giave', 12, 2);
            $table->date('ngaybatdau');
            $table->date('ngayketthuc');
            $table->integer('tinhtrang');
            $table->integer('kichhoat');

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
        Schema::dropIfExists('event');
    }
}
