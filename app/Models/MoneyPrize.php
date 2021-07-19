<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class MoneyPrize extends Model
    {
        protected $table = 'money_prizes';

        protected $guarded = ['id'];

        const STATUS_OPEN = 0;
        const STATUS_ARRIVED = 1;
        const STATUS_CONVERTED = 2;
    }
