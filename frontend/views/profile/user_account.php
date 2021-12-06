<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
/** @var \common\models\User $user */
/** @var \yii\web\View $this */

?>

<?php if(isset($success) && $success): ?>
    <div class="alert alert-success">
        Your account was successfully updated!
    </div>
<?php endif; ?>

<?php $form = ActiveForm::begin([
    'action' => ['/profile/update-account'],
    'options' => [
        'data-pjax' => 1
    ]
]); ?>

<div class="row">
    <div class="col-md-6">
        <?= $form->field($user, 'firstname')->textInput(['autofocus' => true]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($user, 'lastname')->textInput(['autofocus' => true]) ?>
    </div>
</div>

<?= $form->field($user, 'username')->textInput(['autofocus' => true]) ?>
<?= $form->field($user, 'email') ?>
<?= $form->field($user, 'password')->passwordInput() ?>

<button class="btn btn-primary">Update</button>

<?php ActiveForm::end(); ?>
