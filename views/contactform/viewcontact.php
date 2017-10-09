<?php


use yii\widgets\DetailView;
use yii\helpers\Html;



$this->title = 'View Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
<?= Html::a('<span style="font-size:20px" class="glyphicon glyphicon-list"></span>',
 'index', $options = ['class'=>'pull-right'] ) ?>

        <?php
 
echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'name',                                           // title attribute (in plain text)
       'subject',
       'body',
        'created_at:datetime',                             // creation date formatted as datetime
    ],
]);

?>
</div>