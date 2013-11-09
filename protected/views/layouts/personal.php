<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="content" class="sssss">
    <div style="float: left; width: 20%; height: 100%;">
        <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Профиль', 'url'=>array('/personal/edit')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); 
       
        
        ?>
    </div>
    <div style="float: left; width: 80%; height: 100%">
         <?php
         echo $content; 
         
         ?>
    </div>
   
</div><!-- content -->
<?php $this->endContent(); ?>
