<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsnbcSubsetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esnbc_subsets', function (Blueprint $table) {
            $table->id();
            $table->string('batches_info_id', 100)->references('batches_info')->on('esnbcs');
            $table->date('production_date');
            $table->date('best_before_date')->nullable();
            $table->float('net_weight', 8, 2)->nullable();
            $table->string('dimensions', 100)->nullable();
            $table->string('customer_purchase_order_number', 100)->nullable();
            $table->string('shipment_tracking_number', 100)->nullable();
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
        Schema::dropIfExists('esnbc_subsets');
    }
}
