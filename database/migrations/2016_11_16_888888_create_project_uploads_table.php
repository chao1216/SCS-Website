<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_uploads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uploadName');
            $table->string('filePath');
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');
            $table->timestamps();
        });

        /*Schema::table('project_uploads',function(Blueprint $table) {
            $table->foreign('project_id')->references('id')->on('projects');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_uploads');
    }
}
