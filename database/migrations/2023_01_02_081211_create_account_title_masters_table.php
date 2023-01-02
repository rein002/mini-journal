<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_title_masters', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('category')->comment('勘定科目のカテゴリー');
            $table->string('name')->comment('勘定科目名');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_title_masters');
    }
};
