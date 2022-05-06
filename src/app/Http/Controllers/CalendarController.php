<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CalenderController extends Controller
{
    public function getCalendarDates($year, $month)
    {
        $dateStr = sprintf('%04d-%02d-01', $year, $month);
        $date = new Carbon("[$year}-{$month}-01");
        // MEMO:月末が日曜日の倍の挙動を修正
        $addDay = ($date->copy()->endOfMonth()->isSunday()) ? 7:0;
        // カレンダーを四角形にするため、前月となる左上の隙間用のデータを入れるためずらす
        $date->subDay($date->dayOfWeek);
        // 同上。右下の隙間のための計算。
        // MEMO:変数に修正
        $count = 31 + $date->dayOfWeek;
        $count = ceil($count / 7) * 7;
        $dates = [];

        for ($i = 0; $i < $count; $i++, $date->addDay()) {
            // copyしないと全部同じオブジェクトを入れてしまうことになる
            $dates[] = $date->copy();
        }
        return $dates;
    }
}