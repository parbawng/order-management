<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();

            $table->foreignId('application_module_id');
            $table->string('sub_type')->nullable()->comment('Addition Filter if necessary.');

            $table->string('group_name')->nullable();
            $table->string('addition_filter')->nullable();

            $table->string('file_code')->unique();
            $table->string('file_name');
            $table->enum('require',['yes', 'no'])->default('yes');
            $table->string('require_if')->nullable();
            $table->enum('uploadable_type',['single', 'multiple'])->default('single')->comment('Multiple or Single');

            $table->string('max_size')->nullable();
            $table->string('min_size')->nullable();
            $table->string('file_type')->nullable();
            $table->string('mimes');
            $table->string('uploadable_file_count')->default(1);
            $table->enum('status',['deleted', 'active'])->default('active');

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
        Schema::dropIfExists('documents');
    }
}
