<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up()
    {
      Schema::create('skills', function (Blueprint $table) {
          $table->id();
          $table -> string("skill_name");
          $table -> integer("skill_precent");
          $table->timestamps();
      });
    }
    public function down()
    {
        Schema::dropIfExists('skills');
    }
};
