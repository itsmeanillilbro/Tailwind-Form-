<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->date('dob');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->string('ethnic_group')->nullable();
            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->string('municipality')->nullable();
            $table->text('address')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_number')->nullable();
            $table->string('mother_number')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('college_name')->nullable();
            $table->decimal('percentage', 5, 2)->nullable();
            $table->text('notes')->nullable();
            $table->string('image')->nullable();
            $table->string('document')->nullable();
            $table->string('other_document')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
