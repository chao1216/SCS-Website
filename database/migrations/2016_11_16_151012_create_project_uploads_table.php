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
            $table->string('picName');
            $table->string('filePath');
            $table->integer('projectId')->unsigned();
            // Todo: add foreign key that points to pictures/videos that showcase the project
            $table->foreign('projectId')
                ->references('id')->on('projects');
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
        Schema::dropIfExists('project_uploads');
    }
}
