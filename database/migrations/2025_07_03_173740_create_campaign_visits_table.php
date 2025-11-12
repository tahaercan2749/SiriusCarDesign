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
        Schema::create('campaign_visits', function (Blueprint $table) {
            $table->id();
            $table->string('utm_source')->nullable();
            $table->string('utm_medium')->nullable();
            $table->string('utm_campaign')->nullable();
            $table->string('utm_content')->nullable();

            // Google Ads
            $table->string('gad_campaignid')->nullable();
            $table->string('ad_group_id')->nullable();
            $table->string('gclid')->nullable();
            $table->string('gbraid')->nullable(); // GA4 için yeni ID

            // Trafik bilgileri
            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->string('referrer')->nullable();
            $table->string('landing_url')->nullable();

            $table->timestamp('visited_at')->nullable(); // net ziyaret zamanı
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_visits');
    }
};
