<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(){
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('position');
            $table->date('start');
            $table->date('end');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('boards');
    }
};
