<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain__keys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('domain_id');
            $table->integer('KeyTransformationBase');
            $table->integer('rawScore');
            $table->integer('computedScore');
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
        Schema::dropIfExists('domain__keys');
    }
}
