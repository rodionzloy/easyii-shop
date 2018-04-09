<?php

use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\helpers\Html;

?>

<?php 
Modal::begin([
	'id' => 'lead-form-modal',
    'header' => '<h2>Заявка</h2>',
]); ?>

<form action="<?= Url::to(['/lead']) ?>" method="post">

	<?php echo Html :: hiddenInput(\Yii :: $app->getRequest()->csrfParam, \Yii :: $app->getRequest()->getCsrfToken(), []); ?>

	<div class="form-group">
		<label for="name">Имя</label>
		<input name="name" type="text" class="form-control">
	</div>
	<div class="form-group">
		<label for="name">Телефон</label>
		<input name="phone" type="text" class="form-control">
	</div>
	<div class="form-group">
		<button class="btn btn-success">Отправить</button>
	</div>
</form>

<?php Modal::end(); ?>