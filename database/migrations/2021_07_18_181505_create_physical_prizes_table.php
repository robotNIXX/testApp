<?php

    use App\Models\PhysicalPrizeItem;
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreatePhysicalPrizesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('physical_prize_items', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->boolean('status')->default(PhysicalPrizeItem::STATUS_AVAILABLE);
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
            Schema::dropIfExists('physical_prizes');
        }
    }
