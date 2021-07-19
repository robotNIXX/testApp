<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateUserMoneyPrizesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('money_prizes', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('value');
                $table->tinyInteger('status')->default(\App\Models\MoneyPrize::STATUS_OPEN);
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
            Schema::dropIfExists('user_money_prizes');
        }
    }
