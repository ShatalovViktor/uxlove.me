<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    
    <img id="User_photo" src="#" />

	<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'login'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'pass'); ?>
		<?php echo $form->passwordField($model,'pass',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textField($model,'surname',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'patronymic'); ?>
		<?php echo $form->textField($model,'patronymic',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'patronymic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>22,'maxlength'=>22)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php echo $form->textField($model,'birthday'); ?>
		<?php echo $form->error($model,'birthday'); ?>
	</div>
<!--
	<div class="row">
		<?php //echo $form->labelEx($model,'balance_likes'); ?>
		<?php //echo $form->textField($model,'balance_likes'); ?>
		<?php //echo $form->error($model,'balance_likes'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'balance_bn'); ?>
		<?php //echo $form->textField($model,'balance_bn'); ?>
		<?php //echo $form->error($model,'balance_bn'); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->labelEx($model,'occupation'); ?>
		<?php echo $form->textArea($model,'occupation',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'occupation'); ?>
	</div>
<!--
	<div class="row">
		<?php //echo $form->labelEx($model,'rating'); ?>
		<?php //echo $form->textField($model,'rating'); ?>
		<?php //echo $form->error($model,'rating'); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->labelEx($model,'fb_id'); ?>
		<?php echo $form->textField($model,'fb_id',array('size'=>60,'maxlength'=>99)); ?>
		<?php echo $form->error($model,'fb_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vk_id'); ?>
		<?php echo $form->textField($model,'vk_id',array('size'=>60,'maxlength'=>99)); ?>
		<?php echo $form->error($model,'vk_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tw_id'); ?>
		<?php echo $form->textField($model,'tw_id',array('size'=>60,'maxlength'=>99)); ?>
		<?php echo $form->error($model,'tw_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_id'); ?>
		<?php echo $form->textField($model,'g_id',array('size'=>60,'maxlength'=>99)); ?>
		<?php echo $form->error($model,'g_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
   
<!--Регистрация через VK-->   
    <a onclick="VK.Auth.login(userRegVK)">Регистрация через VK</a>
    <div id="vk_api_transport"></div>
    <script type="text/javascript">
	window.vkAsyncInit = function(){
	  VK.init({
		apiId:3911313
	  });
	};
	
	function userDate(user){
		if(typeof user.photo != "undefined") document.getElementById('User_photo').setAttribute('src', user.photo);
		if(typeof user.login != "undefined") document.getElementById('User_login').value = user.login;
		if(typeof user.name != "undefined") document.getElementById('User_name').value = user.name;
		if(typeof user.second_name != "undefined") document.getElementById('User_patronymic').value = user.second_name;
		if(typeof user.last_name != "undefined") document.getElementById('User_surname').value = user.last_name;
		if(typeof user.country != "undefined") document.getElementById('User_country').value = user.country;
		if(typeof user.city != "undefined") document.getElementById('User_city').value = user.city;
		if(typeof user.email != "undefined") document.getElementById('User_email').value = user.email;
		if(typeof user.phone != "undefined") document.getElementById('User_phone').value = user.phone;
		if(typeof user.sex != "undefined") document.getElementById('User_gender').value = user.sex;
		if(typeof user.bday != "undefined") document.getElementById('User_birthday').value = user.bday;
		if(typeof user.acc_id != "undefined") document.getElementById('User_vk_id').value = user.acc_id;
	}
	  
	function userRegVK(user){
		var object = {};
		VK.Api.call('users.get', {uids:user.session.mid, fields:'nickname,first_name,last_name,second_name,country,city,contacts,sex,bdate,photo_200'}, function(users){
			if(users.response){
				if(users.response[0].country) VK.Api.call('places.getCountryById', {cids:users.response[0].country}, function(country){object.country = country.response[0].name});
				if(users.response[0].city) VK.Api.call('places.getCityById', {cids:users.response[0].city}, function(city){object.city = city.response[0].name});
				if(users.response[0].sex == 2) var sex = "Мужчина";
				else var sex = "Женщина";		
				object.photo = users.response[0].photo_200;
				object.login = users.response[0].nickname;
				object.name = users.response[0].first_name;
				object.second_name = users.response[0].second_name;
				object.last_name = users.response[0].last_name;
				object.email = user.session.user.email;
				object.phone = users.response[0].mobile_phone;
				object.sex = sex;
				object.bday = users.response[0].bdate;
				object.acc_id = user.session.mid;			
				userDate(object);
			}
		});
	}
	
	setTimeout(function() {
	  var el = document.createElement("script");
	  el.type = "text/javascript";
	  el.src = "http://vk.com/js/api/openapi.js";
	  el.async = true;
	  document.getElementById("vk_api_transport").appendChild(el);
	}, 0);
    </script>

<?php $this->endWidget(); ?>

</div><!-- form -->