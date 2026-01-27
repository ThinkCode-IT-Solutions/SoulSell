<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // generic data
            $table->string("name");
            $table->string("slug")->unique();
            $table->string("brand");
            $table->string("model");
            $table->string("description");
            $table->string("year");
            $table->double("selling_price");
            $table->double("old_selling_price")->nullable();
            $table->string("category_id");
            // laptop specifications
            $table->integer("ram");
            $table->string("display_type");
            $table->string("display_resolution");
            $table->string("display_size");
            $table->boolean("touch_capable");
            $table->integer("storage");
            $table->string("color");
            $table->string("build_material");
            $table->double("weight");
            $table->string("processor");
            $table->string("generation");
            $table->string("battery_capacity");
            $table->string("battery_timing");
            $table->string("charger_power");
            $table->string("charging_type");


            $table->boolean("is_active")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
