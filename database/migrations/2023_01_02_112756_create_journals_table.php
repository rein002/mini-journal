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
        Schema::create('journals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('organization_id', 26);
            $table->date('trade_date')->comment('取引き日');
            $table->text('summary')->comment('摘要');
            $table->timestamps();
            $table->char('created_user', 26)->nullable();
            $table->char('updated_user', 26)->nullable();

            // 外部キー制約
            $table->foreign('organization_id')->references('id')->on('organizations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journals');
    }
};
