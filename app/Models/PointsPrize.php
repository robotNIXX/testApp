<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class PointsPrize extends Model
    {
        protected $table = 'point_prizes';

        protected $guarded = ['id'];

        /**
         * Money Prize
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function moneyPrize()
        {
            return $this->belongsTo(MoneyPrize::class, 'money_prize_id');
        }
    }
