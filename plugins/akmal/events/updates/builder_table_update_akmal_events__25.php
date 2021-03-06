<?php namespace Akmal\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalEvents25 extends Migration
{
    public function up()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->text('title')->default('null')->change();
            $table->text('location')->default('null')->change();
            $table->text('content')->default('null')->change();
            $table->dropColumn('sort_order');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->text('title')->default('NULL')->change();
            $table->text('location')->default('NULL')->change();
            $table->text('content')->default('NULL')->change();
            $table->integer('sort_order')->default(1);
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
