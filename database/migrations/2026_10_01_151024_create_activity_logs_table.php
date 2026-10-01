<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();

            // Device
            $table->foreignId('device_id')
                ->constrained()
                ->cascadeOnDelete();

            // Application or website
            $table->foreignId('application_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('website_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            // Activity
            $table->timestamp('started_at');
            $table->timestamp('ended_at');

            // Duration in seconds
            $table->unsignedInteger('duration_seconds');

            // Activity type
            $table->enum('type', [
                'application',
                'website',
            ]);

            // Optional productivity classification
            $table->enum('category', [
                'productive',
                'neutral',
                'distracting',
            ])->default('neutral');

            $table->timestamps();

            // Useful indexes
            $table->index([
                'device_id',
                'started_at',
            ]);

            $table->index('type');
            $table->index('category');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};
