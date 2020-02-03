<?php namespace Acte\ContentManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateActeContentmanagerElements extends Migration
{
    public function up()
    {
        Schema::create('acte_contentmanager_elements', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('nest_depth')->nullable();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acte_contentmanager_elements');
    }
}