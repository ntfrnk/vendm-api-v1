<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Province;
use App\Models\City;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Province::class)->constrained()->nullable();
            $table->foreignIdFor(City::class)->constrained()->nullable();
            $table->unsignedBigInteger('addressable_id');
            $table->string('addressable_type');
            $table->string('name');
            $table->string('address');
            $table->string('address_extended')->nullable();
            $table->string('aditional_instructions')->nullable();
            $table->string('postal_code')->nullable();
            $table->integer('ordering')->default('0');
            $table->integer('status')->default('0');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
