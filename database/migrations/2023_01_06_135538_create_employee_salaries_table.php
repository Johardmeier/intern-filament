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
        Schema::create('employee_salaries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('employee_id')->constrained();
            $table->date('valid_from')->useCurrent();
            $table->decimal('part_time_percent',5,3)->default(0);
            $table->decimal('yearly_hours_net',6,2)->default(0);
            $table->decimal('yearly_salary',8,2)->default(0);
            $table->string('hourly_wage',5, 2)->default(0);
            $table->decimal('ahv_percent',5,3)->default(0);
            $table->decimal('alv_percent',5,3)->default(0);
            $table->decimal('nbu_percent',5,3)->default(0);
            $table->decimal('nbu_percent',5,3)->default(0);
            $table->decimal('bvg_yearly_amount',8,2)->default(0);
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
        Schema::dropIfExists('employee_salaries');
    }
};
