<?php

    return [
        'prizes' => [
            'money_limit' => env('MONEY_PRIZE_LIMIT', 1000),
            'points_min' => env('POINTS_OF_LOYALTY_MIN', 10),
            'points_max' => env('POINTS_OF_LOYALTY_MAX', 100),
            'points_rate' => env('POINTS_OF_LOYALTY_RATE', 10)
        ]
    ];
