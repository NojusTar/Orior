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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            
            $table->string("logo")->nullable();
            $table->string("name");
            $table->string("companyService");
            $table->string("companyCode");
            $table->string("pvm");
            $table->string("director");
            $table->date("age");
            $table->string("location");
            $table->string("postalCode");
            $table->string("state");
            $table->string("activities");
            $table->string("services");
            $table->string("incomeLatest");
            $table->string("profit");
            $table->string("cars");
            $table->integer("deptsSodra");
            $table->string("financialState");
            $table->double("workers");
            $table->integer("jobAds");
            $table->double("avgSalary");
            $table->double("salary");
            $table->longText("description");
            $table->longText("imgDescription");
            $table->string("images")->nullable();
            $table->longText("about");
            $table->string("phone");
            $table->string("website");
            $table->string("contactWeb");
            $table->string("email");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
