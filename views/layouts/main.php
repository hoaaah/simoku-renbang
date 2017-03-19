<?php

/* (C) Copyright 2017 Heru Arief Wijaya (http://belajararief.com/) untuk Renbang Biro Kepegawaian BPKP.*/

use app\assets\AppAsset;
use app\widgets\MainMenu;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
	<head>
		<meta charset="<?= Yii::$app->charset ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?= Html::csrfMetaTags() ?>
		<title><?= Html::encode($this->title) ?></title>
		<?php $this->head() ?>
	</head>
	<body>
		<?php $this->beginBody() ?>

		<div class="wrap">
			<?= MainMenu::widget() ?>

			<div class="container">
				<?=
				Breadcrumbs::widget([
					'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
				])
				?>
				<?= $content ?>
			</div>
		</div>

		<footer class="footer">
			<div class="container">
				<p class="pull-left"><?= Yii::$app->name ?> &copy; Renbang BPKP <?= date('Y') ?></p>

				<p class="pull-right"><?= Html::a('<i class="fa fa-twitter-square"></i> @hoaaah', 'http://belajararief.com', [
					'class' => 'btn btn-sm btn-default',
				]) ?></p>
			</div>
		</footer>

		<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>
