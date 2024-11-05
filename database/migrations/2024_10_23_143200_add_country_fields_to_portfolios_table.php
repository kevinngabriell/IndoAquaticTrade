<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCountryFieldsToPortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portofolios', function (Blueprint $table) {
            $table->string('country_name')->nullable()->after('description'); // Add country_name column
            $table->string('country_flag')->nullable()->after('country_name'); // Add country_flag column (for emoji or image URL)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portofolios', function (Blueprint $table) {
            $table->dropColumn('country_name');
            $table->dropColumn('country_flag');
        });
    }
}
