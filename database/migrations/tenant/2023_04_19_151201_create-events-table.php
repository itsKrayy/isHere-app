<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->date('event_date');
            $table->time('event_time');
            $table->longText('event_desc');
            $table->timestamps();
        });

        Schema::create('attendancelogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id')
                    ->references('id')
                    ->on('events')->onDelete('cascade');
			$table->index('event_id');
            $table->string('student_id');
            $table->string('student_name');
            $table->string('department');
            $table->time('time_in');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('subs', function (Blueprint $table) {
            $table->id();
            $table->integer('is_sub');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
        Schema::dropIfExists('attendancelogs');
        Schema::dropIfExists('subs');
    }
}
