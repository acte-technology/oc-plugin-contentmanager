<?php namespace Acte\ContentManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;
use Db;

class BuilderTableCreateActeContentmanagerFieldTypes extends Migration
{
    public function up()
    {
        Schema::create('acte_contentmanager_field_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('code')->nullable();
        });

        Db::table('acte_contentmanager_field_types')->insert([
            ['code' => 'string'],
            ['code' => 'text'],
            ['code' => 'textarea'],
            ['code' => 'number'],
            ['code' => 'richeditor'],
            ['code' => 'image'],
            ['code' => 'images'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('acte_contentmanager_field_types');
    }
}