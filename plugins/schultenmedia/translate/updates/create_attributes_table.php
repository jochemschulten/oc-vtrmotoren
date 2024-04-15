<?php namespace SchultenMedia\Translate\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateAttributesTable extends Migration
{
    public function up()
    {
        Schema::create('sm_translate_attributes', function($table)
        {
            $table->increments('id');
            $table->string('locale')->index();
            $table->string('model_id')->index()->nullable();
            $table->string('model_type')->index()->nullable();
            $table->mediumText('attribute_data')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sm_translate_attributes');
    }
}
