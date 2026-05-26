<?php

use App\Enums\TicketStatus;
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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('number')->unique();
            $table->string('title', 255);
            $table->text('description')->nullable();

            $table->foreignId('requester_id')
                ->constrained('users')
                ->onDelete('restrict');

            $table->foreignId('technician_id')
                ->nullable()
                ->constrained('users')
                ->onDelete('restrict');

            $table->foreignId('category_id')
                ->constrained()
                ->onDelete('restrict');

            $table->foreignid('priority_id')
                ->constrained()
                ->onDelete('restrict');

            $table->foreignId('ticket_status_id')
                ->default(TicketStatus::Aberto->value)
                ->constrained()
                ->onDelete('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket');
    }
};
