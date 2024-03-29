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
        Schema::create('responder_answers', function (Blueprint $table) {
            $table->id();
            $table->string('text')->nullable();
            $table->boolean('checked')->default(false);

            $table->foreignId('answer_id')->constrained()
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('responder_id')->constrained()
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responder_answers');
    }
};
