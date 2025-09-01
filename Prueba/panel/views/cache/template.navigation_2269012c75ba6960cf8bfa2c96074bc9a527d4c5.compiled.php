<?php 
 ## Array of available Tab links
 $tabs = [
 '<i class="icon fa fa-circle-play"></i> Player'           => 'home',
 '<i class="icon fa fa-radio"></i> Channels'               => 'channels',
 '<i class="icon fa fa-hands"></i> Language'               => 'language',
 '<i class="icon fa fa-toolbox"></i> Tools'                => 'tools',
 '<i class="icon fa fa-screwdriver-wrench"></i> Settings'  => 'settings',
 '<i class="icon fa fa-cloud-download"></i> Updates'       => 'updates',
 ];
 ?>
<div class="menu">
 <div class="container">
 <ul class="nav nav-menu tabs d-mobile-none">
 <?php $__currentLoopData = $tabs; $this->addLoop($__currentLoopData);$this->getFirstLoop();
 foreach($__currentLoopData as $tab => $link): $loop = $this->incrementLoopIndices();  ?>
 <?php 
 $active = ( ( !empty( $_GET[ 'page' ] ) && $_GET[ 'page' ] === $link ) || ( empty( $_GET[ 'page' ] ) && $link === 'home' ) ) ? ' class="active"' : '';
 ?>
 <li<?php echo $active; ?>>
 <a id="tab-<?php echo \htmlentities($link??'', ENT_QUOTES, 'UTF-8', false); ?>" href="index.php?page=<?php echo \htmlentities($link??'', ENT_QUOTES, 'UTF-8', false); ?>"><?php echo $tab; ?></a>
 </li>
 <?php endforeach; $this->popLoop(); $loop = $this->getFirstLoop(); ?>
 </ul>
 <div class="dropdown d-desktop-none d-mobile-block align-self-center">
 <a href="#" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"><i class="icon fa fa-bars"></i> Menu</a>
 <ul class="dropdown-menu">
 <?php $__currentLoopData = $tabs; $this->addLoop($__currentLoopData);$this->getFirstLoop();
 foreach($__currentLoopData as $tab => $link): $loop = $this->incrementLoopIndices();  ?>
 <?php 
 $active = ( ( !empty( $_GET[ 'page' ] ) && $_GET[ 'page' ] === $link ) || ( empty( $_GET[ 'page' ] ) && $link === 'home' ) ) ? ' class="active"' : '';
 ?>
 <li<?php echo $active; ?>>
 <a id="tab-<?php echo \htmlentities($link??'', ENT_QUOTES, 'UTF-8', false); ?>" href="index.php?page=<?php echo \htmlentities($link??'', ENT_QUOTES, 'UTF-8', false); ?>"><?php echo $tab; ?></a>
 </li>
 <?php endforeach; $this->popLoop(); $loop = $this->getFirstLoop(); ?>
 </ul>
 </div>
 <div class="script-version">
 <div class="day-night" title="Toggle Dark Mode">
 <i class="icon far fa-moon"></i>
 <a class="clickable" href="#">
 <i class="icon fa fa-toggle-on" id="on" style="display:none"></i>
 <i class="icon fa fa-toggle-on fa-rotate-180" id="off" style="display:none"></i>
 </a>
 <i class="icon far fa-sun"></i>
 </div>
 </div>
 </div>
</div>
<section class="container main">