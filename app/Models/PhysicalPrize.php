<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class PhysicalPrize extends Model
    {
        protected $table = 'physical_prizes';

        protected $guarded = ['id'];

        const STATUS_OPEN = 0;
        const STATUS_DECLINED = 1;
        const STATUS_SENT = 2;
        const STATUS_ARRIVED = 3;

        /**
         * Prize
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function prize()
        {
            return $this->belongsTo(PhysicalPrizeItem::class, 'prize_id');
        }
    }
