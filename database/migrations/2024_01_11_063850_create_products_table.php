<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cate_id')->nullable();
            $table->string('name')->nullable();
            $table->decimal('gia', 20)->nullable();
            $table->integer('amount')->nullable();
            $table->text('des')->nullable();
            $table->string('img')->nullable();
            $table->boolean('publish')->nullable();
            $table->integer('sort')->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
