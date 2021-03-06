<?php namespace Ardani\Stikes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateGalleriesTable extends Migration
{

    public function up()
    {
        Schema::create('ardani_stikes_galleries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('judul', 100);
            $table->text('deskripsi');
            $table->integer('kategori_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ardani_stikes_galleries');
    }

}
