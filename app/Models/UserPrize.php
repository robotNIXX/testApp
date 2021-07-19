<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class UserPrize extends Model
    {
        protected $table = 'user_prizes';

        const TYPE_PHYSICAL = 'physical';
        const TYPE_MONEY = 'money';
        const TYPE_POITNS = 'points';

        public $guarded = ['id'];

        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
        }

        public function physicalPrizes()
        {
            return $this->belongsTo(PhysicalPrize::class, 'prize_id')->where('prize_type', self::TYPE_PHYSICAL);
        }

        public function moneyPrizes()
        {
            return $this->belongsTo(MoneyPrize::class, 'prize_id')->where('prize_type', self::TYPE_MONEY);
        }

        public function pointsPrizes()
        {
            return $this->belongsTo(PointsPrize::class, 'prize_id')->where('prize_type', self::TYPE_POITNS);
        }
    }
