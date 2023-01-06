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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->dateTime('start');
            $table->string('title')->default('');
            $table->foreignId('assignment_group_id')->constrained();
            $table->foreignId('assignment_type_id')->constrained();
            $table->decimal('planned_hours',5,2)->default(0);
            $table->integer('planned_employee_count')->default(1);
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
        Schema::dropIfExists('assignments');
    }
};
