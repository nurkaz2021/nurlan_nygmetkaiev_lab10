<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnLangToTableNewspost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('newspost', function (Blueprint $table) {
             $table->string('lang')->default('en'); // use this for field after specific column.
         });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('newspost', function (Blueprint $table) {
            $table->dropColumn('lang');
        });
    }
}
