<?php

/**
 * Created by PhpStorm.
 * User: who
 * Date: 9/11/18
 * Time: 1:24 AM
 */

namespace App;

use Illuminate\Support\Facades\Route;

class helpers
{
    public static $ROLE = ['ADMIN' => 0, 'USER' => 1];
    public static $USER_SEX = ['MALE' => 1, 'FEMALE' => 0];
    public static $STATUS_USER = ['BLOCK' => 0, 'ACTIVE' => 1];
    public static $STATUS_ORDER = [
        'CANCEL' => -1,
        'INIT' => 0,
        'UPDATED' => 1,
        'BOOK' => 2,
        'QUEUED' => 3,
        'LOCKED' => 4,
        'TRACKING' => 5,
        'FINISHED' => 6
    ];
    public static $COINS_INIT = 0;
    public static $COIN_PAY = ['RECHARGE' => 0, 'FEES' => 1, 'WAGE' => 2];

    public static function isActive($name)
    {
        return Route::current()->getName() == $name ? 'class=active' : '';
    }

    public static function genCodeOrder()
    {
        return 'TT' . date('y') . date('m') . date('d') . date('H') . date('i') . date('s');
    }
}