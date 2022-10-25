<?php

namespace App\Controller;

use App\Model\RankModel;

class RankController extends Controller {

    public static function index() {
        $model = new RankModel();
        $arr_rank = $model->getRankPlayerByTime();

        include "./View/modules/Rank/rank.php";
    }
}