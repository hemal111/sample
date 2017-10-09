<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\helpers\url;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
<?= Html::a( 'Add Contact', 'addcontact', $options = ['class'=>'btn btn-success pull-right'] ) ?>

        <?php
 //echo "<pre>";print_r($model);exit;
         echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'id',
                'name',
                'email',
                'subject',
                'body',
                'created_at:datetime',
                'modified_at:datetime',
               [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{download} {view} {update} {delete}',
                    'buttons' => [
                        'download' => function ($url) {
                            return Html::a(
                                '<i class="glyphicon glyphicon-download"></i>',
                                '',[
                                    'class'=> '', 
                                    'title' => 'Download',
                                    'data-pjax' => '0',
                                ]
                            );
                        },
                        'view' => function ($url,$model) {
                            return Html::a(
                                '<i class="glyphicon glyphicon-eye-open"></i>',
                               // URL::to(['view', 'id' => $models->id]),
                                Yii::$app->urlManager->createUrl([
                                'contact/view/',
                                'id' => $model['id']
                                ]),
                                [
                                    'class'=> '', 
                                    'title' => 'View',
                                    'data-pjax' => '0',
                                ]
                            );
                        },
                        'update' => function ($url,$model) {
                            return Html::a(
                                '<i class="glyphicon glyphicon-pencil"></i>',
                               // URL::to(['view', 'id' => $models->id]),
                                Yii::$app->urlManager->createUrl([
                                'contact/addcontact/',
                                'id' => $model['id']
                                ]),
                                [
                                    'class'=> '', 
                                    'title' => 'View',
                                    'data-pjax' => '0',
                                ]
                            );
                        },
                        'delete' => function($url, $model){
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['contact/delete', 'id' => $model['id']], [
                                'class' => '',
                                'data' => [
                                    'confirm' => 'Are you absolutely sure ? You will lose all the information about this user with this action.',
                                    'method' => 'post',
                                ],
                            ]);
                        }
                    ],
                ],
            ],
        ]);
/*

echo DetailView::widget([

    'model' => $model,
    'attributes' => [
        'title',                                           // title attribute (in plain text)
        'description:html',                                // description attribute formatted as HTML
        [                                                  // the owner name of the model
            'label' => 'Owner',
            'value' => $model[0]['name'],            
            'contentOptions' => ['class' => 'bg-red'],     // HTML attributes to customize value tag
            'captionOptions' => ['tooltip' => 'Tooltip'],  // HTML attributes to customize label tag
        ],
        'created_at:datetime',                             // creation date formatted as datetime
    ],
]);*/
        ?>




   </div>
