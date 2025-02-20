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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('nav_items');
            $table->text('movies');
            $table->text('subscriptions');
            $table->text('voluntaries');
            $table->smallInteger('user_id');
            $table->smallInteger('invoices_limit');
            $table->string('dummy_url');
            $table->string('dummy_pdf_url');
            $table->string('dummy_zip_url');
            $table->string('base_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
