<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsnbcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esnbcs', function (Blueprint $table) {
            $table->string('batches_info', 100)->primary();
            $table->string('product_id', '100');
            $table->string('product_name', '100');
            $table->string('certification', '500')->nullable();
            $table->string('supplier', '100')->nullable();
            $table->string('origin', '100')->nullable();
            $table->float('price', 8, 2)->nullable();
            $table->string('update_type', 10)->default('Create');
            $table->boolean('is_updated_to_fabric')->default(false);
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
        Schema::dropIfExists('esnbcs');
    }
}
