<?php namespace Acte\ContentManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;
use Db;

class BuilderTableCreateActeContentmanagerFormats extends Migration
{
    public function up()
    {
        Schema::create('acte_contentmanager_formats', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->string('mode')->nullable()->default('auto');
            $table->integer('quality')->nullable()->default(80);
        });
        
        Db::table('acte_contentmanager_formats')->insert([
        ['name' => 'X Large', 'width' => 2560, 'height' => 2560, 'mode' => 'auto', 'quality' => 80],
        ['name' => 'Large', 'width' => 1920, 'height' => 1920, 'mode' => 'auto', 'quality' => 80],
        ['name' => 'Medium', 'width' => 1024, 'height' => 1024, 'mode' => 'auto', 'quality' => 80],
        ['name' => 'Crop 300x300', 'width' => 300, 'height' => 300, 'mode' => 'crop', 'quality' => 80],
        ['name' => 'Crop 100x100', 'width' => 100, 'height' => 100, 'mode' => 'crop', 'quality' => 80],

        ]);
    }
    
    public function down()
    {
        Schema::dropIfExists('acte_contentmanager_formats');
    }
}