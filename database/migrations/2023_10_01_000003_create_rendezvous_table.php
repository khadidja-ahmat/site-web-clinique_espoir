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
        Schema::create('rendezvous', function (Blueprint $table) {
            $table->id();
            $table->date('dates');
            $table->foreignId('patient_id')->constrained('patient')->cascadeOnDelete();
            $table->foreignId('medecin_id')->constrained('medecin')->cascadeOnDelete();
            $table->string('type');
            $table->string('statut')->default('planifié');
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
        Schema::dropIfExists('rendezvous');
    }
};
