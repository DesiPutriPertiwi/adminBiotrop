<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelProvince extends Migration
{
    public function up()
    {
        Schema::create('province', function($t) {
			$t->increments('id');
			$t->string('name');
			$t->unsignedInteger('id_state');
			$t->foreign('state_id')
				->references('id')->on('state')
				->onDelete('cascade');
		});
    }

    
    public function down()
    {
        Schema::drop('province');
    }
}


