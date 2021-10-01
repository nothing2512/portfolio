<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCounterView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW counter_view AS
            SELECT
                (SELECT COUNT(id) FROM projects) as projects,
                (SELECT COUNT(id) FROM skills) as skills,
                (SELECT COUNT(id) FROM specializations) as specializations
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counter_view');
    }
}
