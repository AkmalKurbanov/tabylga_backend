<?php namespace Akmal\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalEvents13 extends Migration
{
    public function up()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }
}
