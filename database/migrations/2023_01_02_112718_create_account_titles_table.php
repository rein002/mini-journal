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
        Schema::create('account_titles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('organization_id', 26);
            $table->tinyInteger('category')->comment('勘定科目のカテゴリー');
            $table->string('name', 100)->comment('勘定科目名');
            $table->integer('order_num')->nullable();
            $table->timestamps();
            $table->string('created_user')->nullable();
            $table->string('updated_user')->nullable();

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
        Schema::dropIfExists('account_titles');
    }
};
