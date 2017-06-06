<?php namespace Nambit\Staff\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNambitStaffEntries extends Migration
{
    public function up()
    {
        Schema::create('nambit_staff_entries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->text('entries');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nambit_staff_entries');
    }
}
