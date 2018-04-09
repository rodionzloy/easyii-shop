<?php
use yii\helpers\Html;
use yii\helpers\Url;
$asset = \app\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="<?= !empty($this->params['keywords']) ? $this->params['keywords'] : '' ?>">
        <meta name="description" content="<?= !empty($this->params['description']) ? $this->params['description'] : '' ?>">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <?php $this->head() ?>
        <link href="<?= Url::to(['/app/media/css/styles.css']) ?>" rel="stylesheet">
    </head>
    <body>
    <?php $this->beginBody() ?>
    <?= $content ?>
    <?php $this->endBody() ?>
    <script src="<?= Url::to(['/app/media/js/scripts.js']) ?>"></script>
    </body>
    </html>
<?php $this->endPage() ?>