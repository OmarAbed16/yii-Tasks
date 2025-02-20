use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Register';
?>
<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($user, 'username') ?>
<?= $form->field($user, 'email') ?>
<?= $form->field($user, 'password')->passwordInput() ?>

<div class="form-group">
    <?= Html::submitButton('Register', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
