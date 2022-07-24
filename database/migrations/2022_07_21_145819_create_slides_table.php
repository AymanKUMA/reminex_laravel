<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id('id_slide');
            $table->string('title',50);
            $table->string('subtitle',50);
            $table->longText('description');
            $table->tinyInteger('layout');
            $table->foreignId('id_user')
                ->references('id_user')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE slides ADD image MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slides');
    }
};
