<?php

use yii\db\Query;
use yii\widgets\ListView;
use common\models\News;
use yii\data\ActiveDataProvider;
/* @var $this yii\web\View */

$dataProvider = new ActiveDataProvider([
    'query' => News::find()->orderBy('created_at DESC'),
    'pagination' => [
        'pageSize' => 20,
    ],
]);

echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '../News/_list',
]);
