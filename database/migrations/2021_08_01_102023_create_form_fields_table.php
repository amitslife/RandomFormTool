<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_id');
            $table->integer('sequence');
            $table->integer('section');
            $table->string('fieldName');
            $table->mediumText('fieldDescription');
            $table->mediumText('fieldHelp')->nullable();
            $table->string('fieldControl')->nullable();
            $table->string('fieldType')->nullable();
            $table->string('valOperation')->default('+'); //this value defines if the value will be added or subtracted
            $table->foreignId('domain_id')->nullable();
            $table->foreignId('user_id');
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
        Schema::dropIfExists('form__fields');
    }
}
