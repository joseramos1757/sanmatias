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
        Schema::create('historials', function (Blueprint $table) {
            $table->id();
            $table->text('motivo');
            $table->text('enfermedad');
            $table->text('antepat');
            $table->text('antenopat');
            $table->text('antegine');
            $table->text('antefam');
            $table->text('anamnesis');
            $table->text('examenfis');
            $table->text('laboratorio');
            $table->text('diagnostico');
            $table->timestamps();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historials');
    }
};
