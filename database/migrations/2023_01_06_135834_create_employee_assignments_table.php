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
        Schema::create('employee_assignments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('employee_id')->constrained();
            $table->foreignId('assignment_id')->constrained();
            $table->decimal('planned_hours',5,2)->default(0);
            $table->decimal('flat_rate')->default(0);
            $table->decimal('worked_hours',5,2)->default(0);
            $table->decimal('sick_hours',5,2)->default(0);
            $table->decimal('forfeited_hours',5,2)->default(0);
            $table->decimal('cancelled_hours',5,2)->default(0);
            $table->decimal('reported_hours',5,2)->default(0);
            $table->string('crediting_reason')->default('');
            $table->decimal('expenses',5,2)->default(0);
            $table->string('expenses_text')->default('');
            $table->text('remarks')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_assignments');
    }
};
