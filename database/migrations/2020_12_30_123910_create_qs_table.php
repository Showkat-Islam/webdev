<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qs', function (Blueprint $table) {
            $table->id();
            $table->String('Question')->default('0')->nullable();
              $table->String('(a)')->default('0')->nullable();
                $table->String('(b)')->default('0')->nullable();
                  $table->String('(c)')->default('0')->nullable();
                    $table->String('(d)')->default('0')->nullable();
                    $table->String('ans')->default('0')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qs');
    }
}
