<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelState extends Migration
{
   public function up()
    {
        Schema::create('state', function($t) {
			$t->increments('id');
            $t->string('code');
			$t->string('name');
		});
    }

    
    public function down()
    {
        Schema::drop('state');
    }
} 
