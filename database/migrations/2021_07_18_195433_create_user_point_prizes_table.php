<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateUserPointPrizesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('point_prizes', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('value');
                $table->unsignedBigInteger('money_prize_id')->nullable();
                $table->foreign('money_prize_id')->references('id')->on('money_prizes');
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
            Schema::dropIfExists('user_point_prizes');
        }
    }
