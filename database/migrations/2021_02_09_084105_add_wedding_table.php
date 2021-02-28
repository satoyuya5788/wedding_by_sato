<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWeddingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('weddings', function (Blueprint $table) {
            $table->string('name_low', 255)->nullable()->after('name');
            $table->string('name_kana_low', 255)->nullable()->after('name_kana');
            $table->string('attend')->nullable()->default(1)->after('id');
            $table->string('human')->nullable()->default(1)->after('id');
            $table->string('partner_name_one', 255)->nullable()->after('mail');
            $table->string('partner_name_two', 255)->nullable()->after('mail');
            $table->string('partner_name_three', 255)->nullable()->after('mail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('weddings', function (Blueprint $table) {
            Schema::dropIfExists('weddings');
        });
    }
}
