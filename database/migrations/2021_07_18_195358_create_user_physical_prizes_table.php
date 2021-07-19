<?php

    use App\Models\PhysicalPrize;
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateUserPhysicalPrizesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('physical_prizes', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('item_id');
                $table->tinyInteger('status')->default(PhysicalPrize::STATUS_OPEN);
                $table->foreign('item_id')->references('id')->on('physical_prize_items');
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
            Schema::dropIfExists('user_physical_prizes');
        }
    }
