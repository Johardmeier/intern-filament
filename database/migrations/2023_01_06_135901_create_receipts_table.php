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
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('employee_id')->nullable()->constrained();
            $table->date('date')->nullable();
            $table->string('title');
            $table->integer('paid_by')->default(0);
            $table->decimal('amount',7,2);
            $table->string('picture_link')->default('');
            $table->integer('accounting_nr')->default(0);
            $table->string('accounting_text')->default('');
            $table->text('remarks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipts');
    }
};
