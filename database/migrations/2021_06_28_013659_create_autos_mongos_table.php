<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosMongosTable extends Migration
{
    protected $connection = 'mongodb';

    public function up()
    {
    }

    public function down()
    {
        Schema::connection('mongodb')->dropIfExists('autos_mongos');
    }
}
