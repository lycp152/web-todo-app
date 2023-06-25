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
        Schema::create('todo_items', function (Blueprint $table) {
            $table->id();

            // ここから追加
            $table->foreignId('user_id') // 外部キーを追加
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->text('title');
            $table->boolean('is_done')->default(false);
            // ここまで追加

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todo_items');
    }
};
