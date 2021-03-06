<?php
	/* @var $this SoftskillController */
	/* @var $model CareerpediaSoftskill */
	/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
	'id'=>'careerpedia-softskill-form',
	'enableAjaxValidation'=>true,
	//'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

<div class="dialog-content">

	<fieldset>

		<?php //begin.Messages ?>
		<div id="ajax-message">
			<?php echo $form->errorSummary($model); ?>
		</div>
		<?php //begin.Messages ?>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'publish'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'publish'); ?>
				<?php echo $form->error($model,'publish'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'softskill'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'softskill',array('size'=>32,'maxlength'=>32)); ?>
				<?php echo $form->error($model,'softskill'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'desc'); ?>
			<div class="desc">
				<?php echo $form->textArea($model,'desc',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'desc'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

	</fieldset>
</div>
<div class="dialog-submit">
	<?php echo CHtml::submitButton($model->isNewRecord ? Phrase::trans(1,0) : Phrase::trans(2,0) ,array('onclick' => 'setEnableSave()')); ?>
	<?php echo CHtml::button(Phrase::trans(4,0), array('id'=>'closed')); ?>
</div>
<?php $this->endWidget(); ?>
