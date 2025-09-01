<?php echo $this->runChild( 'template.header' ); ?>
<?php echo $this->runChild( 'template.navigation' ); ?>
<?php 
 $panel->flashMessages();
 ?>
<?php echo $this->yieldContent( 'content'); ?>
<?php echo $this->runChild( 'template.footer' ); ?>