<?php namespace Acte\ContentManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateActeContentmanagerFields extends Migration
{
    public function up()
    {
        Schema::table('acte_contentmanager_fields', function($table)
        {
            $table->integer('format_id')->nullable()->default(2);
        });
    }
    
    public function down()
    {
        Schema::table('acte_contentmanager_fields', function($table)
        {
            $table->dropColumn('format_id');
        });
    }
}