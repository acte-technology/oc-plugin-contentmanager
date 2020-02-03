<?php namespace Acte\ContentManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateActeContentmanagerFields extends Migration
{
    public function up()
    {
        Schema::create('acte_contentmanager_fields', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('sort_order')->nullable();
            $table->integer('element_id')->nullable();
            $table->integer('field_type_id')->nullable();
            $table->string('code')->nullable();
            $table->text('data')->nullable();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('acte_contentmanager_fields');
    }
}
