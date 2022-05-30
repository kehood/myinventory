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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('category_id')->nullable();
            $table->foreignId('vendor_id')->nullable();
            $table->string('quick_lookup')->nullable();
            $table->string('description', 255);
            $table->integer('quantity_on_hand')->nullable();
            $table->integer('quantity_on_order')->nullable();
            $table->decimal('list_price', 13, 2, true)->nullable();
            $table->decimal('cost', 13, 2, true)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
