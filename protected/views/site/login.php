<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Mi</b>RED</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'login-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                    'validateOnSubmit'=>true,
            ),
    )); ?>
    
    <div class="form-group has-feedback">
        <?php echo $form->textField($model,'username',array('class'=>"form-control")); ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback" style="top: 0"></span>
        <?php echo $form->error($model,'username'); ?>
        
    </div>
    
    <div class="form-group has-feedback">
        <?php echo $form->passwordField($model,'password',array('class'=>"form-control")); ?>
        <span class="glyphicon glyphicon-lock form-control-feedback" style="top: 0"></span>
        <?php echo $form->error($model,'password'); ?>
        
    </div>
    
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
                <?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    <?php $this->endWidget(); ?>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

