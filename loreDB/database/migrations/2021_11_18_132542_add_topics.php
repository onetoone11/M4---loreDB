<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTopics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('topics')->insert(
            [['name'=>'Character'],
            ['name'=>'Location'],
            ['name'=>'Timeline'],
            ['name'=>'Species'],
            ['name'=>'Organization'],
            ['name'=>'Weapon'],
            ['name'=>'Historical'],
            ['name'=>'Paranormal'],
            ['name'=>'Vehicle'],
            ['name'=>'Society'],
            ['name'=>'Group'],
            ['name'=>'Race'],
            ['name'=>'Legend'],
            ['name'=>'Myth'],
            ['name'=>'Monster'],
            ['name'=>'Paranormal'],
            ['name'=>'Game'],
            ['name'=>'Magic'],
            ['name'=>'Ideology'],
            ['name'=>'Religion'],
            ['name'=>'Music'],
            ['name'=>'Crime'],
            ['name'=>'Technology'],
            ['name'=>'Planet'],
            ['name'=>'Nation'],
            ['name'=>'Solar System'],
            ['name'=>'Galaxy']]
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
