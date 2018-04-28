<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<div class="news-item">
    <h2 class="news-title"><?= Html::encode($model->title) ?></h2>
    <code>Дата публикации: <?=date('d.m.Y',$model->created_at)?>
          Автор: <?=$model->author?></code>
    <?= HtmlPurifier::process($model->content) ?>
</div>
