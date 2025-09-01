<?php $this->startSection('content'); ?>
 <div class="panel">
 <div class="content">
 <p>
 This player supports a multi-language setup which means that (if enabled) the player will automatically choose a language fit for the user's browser setting.<br>
 You can also disable multi-language support under the <b>Settings</b> tab.
 </p>
 <?php echo $message; ?>

 <?php if( count( $translations ) < 1 ): ?>
 <?php echo $panel->alert( 'No translation files found! If you deleted "en.php" by mistake, please re-upload it!' ); ?>

 <?php else: ?>
 <table class="table vertical-center hover">
 <thead>
 <tr>
 <th>Language</th>
 <th>Actions</th>
 </tr>
 </thead>
 <tbody>
 <?php $__currentLoopData = $translations; $this->addLoop($__currentLoopData);$this->getFirstLoop();
 foreach($__currentLoopData as $translation): $loop = $this->incrementLoopIndices();  ?>
 <?php 
 $language = $pawtunes->extDel( $translation );
 ?>
 <tr>
 <td class="col-sm-9">
 <i class="fi fi-<?php echo \htmlentities($languages[ $language ]['flag']??'', ENT_QUOTES, 'UTF-8', false); ?>"></i> <b><?php echo \htmlentities($languages[ $language ]['name']??'', ENT_QUOTES, 'UTF-8', false); ?> </b> (<?php echo \htmlentities(strtoupper( $language )??'', ENT_QUOTES, 'UTF-8', false); ?>)
 </td>
 <td>
 <a class="btn btn-primary btn-small" href="index.php?page=language&edit=<?php echo \htmlentities($pawtunes->extDel( $translation )??'', ENT_QUOTES, 'UTF-8', false); ?>">
 <i class="icon fa fa-edit"></i> Edit
 </a>
 <?php if( $translation !== 'en.php' ): ?>
 <a class="btn btn-danger btn-small" href="index.php?page=language&delete=<?php echo \htmlentities($language??'', ENT_QUOTES, 'UTF-8', false); ?>" onclick="return confirm('Are you sure?');">
 <i class="icon fa fa-times"></i> Delete</a>
 <?php endif; ?>
 </td>
 </tr>
 <?php endforeach; $this->popLoop(); $loop = $this->getFirstLoop(); ?>
 </tbody>
 </table>
 <?php endif; ?>
 </div>
 </div>
 <a href="index.php?page=language&add" class="btn btn-success">
 <i class="icon fa fa-plus-circle"></i> Add Language
 </a>
<?php $this->stopSection(); ?>
<?php echo $this->runChild('template'); ?>