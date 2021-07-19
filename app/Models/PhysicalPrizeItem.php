<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class PhysicalPrizeItem extends Model
    {
        use HasFactory;

        protected $table = 'physical_prize_items';

        protected $guarded = ['id'];

        const STATUS_AVAILABLE = 0;
        const STATUS_UNAVAILABLE = 1;
    }
