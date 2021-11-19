<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('tags')->insert(
            [['name'=>'Alien'],
            ['name'=>'Ancient'],
            ['name'=>'Planet'],
            ['name'=>'Magic'],
            ['name'=>'Ghost'],
            ['name'=>'Time Travel'],
            ['name'=>'Robot'],
            ['name'=>'Monster'],
            ['name'=>'Espionage'],
            ['name'=>'Spy'],
            ['name'=>'Supernatural'],
            ['name'=>'Military'],
            ['name'=>'Detective'],
            ['name'=>'Mythic'],
            ['name'=>'Science'],
            ['name'=>'Cyberpunk'],
            ['name'=>'Crime'],
            ['name'=>'Political'],
            ['name'=>'Philosophical'],
            ['name'=>'Satanic'],
            ['name'=>'Survival'],
            ['name'=>'Roleplay'],
            ['name'=>'Medieval'],
            ['name'=>'Legend'],
            ['name'=>'Gambling'],
            ['name'=>'Magical'],
            ['name'=>'Country'],
            ['name'=>'Animal']]
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
