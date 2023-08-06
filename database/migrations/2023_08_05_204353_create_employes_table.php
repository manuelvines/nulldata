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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->date("birth");
            $table->string("address");
            $table->string("longitud")->nullable();
            $table->string("latitud")->nullable();

            
            
            $table->foreignId("job_id")->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');;


            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
