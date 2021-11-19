<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGenre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('genres')->insert(
            [['name'=>'Fantasy'],
            ['name'=>'Horror'],
            ['name'=>'Mystery'],
            ['name'=>'Thriller'],
            ['name'=>'Western'],
            ['name'=>'Psychological'],
            ['name'=>'Historical'],
            ['name'=>'Paranormal'],
            ['name'=>'Fairy Tale'],
            ['name'=>'Sci-fi'],
            ['name'=>'Dystopian'],
            ['name'=>'Utopian'],
            ['name'=>'Apocalypse'],
            ['name'=>'Adventure']]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
