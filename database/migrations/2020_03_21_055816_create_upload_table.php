<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
	    $table->string('col1',100);
	    $table->string('col2',100);
	    $table->string('col3',100);
	    $table->string('col4',100);
	    $table->string('col5',100);
	    $table->string('col6',100);
	    $table->string('col7',100);
	    $table->string('col8',100);
	    $table->string('col9',100);
	    $table->string('col10',100);
	    $table->string('col11',100);
	    $table->string('col12',100);
	    $table->string('col13',100);
	    $table->string('col14',100);
	    $table->string('col15',100);
	    $table->string('col16',100);
	    $table->string('col17',100);
	    $table->string('col18',100);
	    $table->string('col19',100);
	    $table->string('col20',100);
	    $table->string('col21',100);
	    $table->string('col22',100);
	    $table->string('col23',100);
	    $table->string('col24',100);
	    $table->string('col25',100);
	    $table->string('col26',100);
	    $table->string('col27',100);
	    $table->string('col28',100);
	    $table->string('col29',100);
	    $table->string('col30',100);
	    $table->string('col31',100);
	    $table->string('col32',100);
	    $table->string('col33',100);
	    $table->string('col34',100);
	    $table->string('col35',100);
	    $table->string('col36',100);
	    $table->string('col37',100);
	    $table->string('col38',100);
	    $table->string('col39',100);
	    $table->string('col40',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upload');
    }
}
