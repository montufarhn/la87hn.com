<?php $this->startSection('content'); ?>
 <?php echo $error; ?>

 <form method="POST" action="index.php?page=channels&action=<?php echo \htmlentities(($_GET['action'] === 'add') ? 'add' : 'edit&channel='.$_GET['channel']??'', ENT_QUOTES, 'UTF-8', false); ?>" autocomplete="off" enctype="multipart/form-data">
 <div class="panel">
 <div class="content">
 <p style="margin-bottom: 2rem;">
 PawTunes player supports multichannel configuration(s) but If a single channel is configured or a single stream, the player will hide the unused buttons.
 Other settings that affect all channels are covered in the <b>Settings tab</b>.
 <span class="text-red">Please read instructions carefully! Invalid configuration could cause player to stop working properly.</span>
 </p>
 <div class="form-group">
 <label class="control-label col-sm-2" for="name">Channel Name</label>
 <div class="col-sm-5">
 <input class="form-control" type="text" name="name" id="name" value="<?php echo \htmlentities(htmlentities( ( !empty( $_POST[ 'name' ] ) ) ? $_POST[ 'name' ] : ''  )??'', ENT_QUOTES, 'UTF-8', false); ?>" placeholder="Rock channel">
 </div>
 </div>
 <div class="form-group">
 <label class="col-sm-2 control-label" for="logo">Channel Logo</label>
 <div class="col-sm-8">
 <div class="file-input">
 <input type="file" id="logo" name="logo">
 <div class="input-group col-sm-6">
 <input type="text" class="form-control file-name" placeholder="Select an image">
 <div class="input-group-btn">
 <a href="#" class="btn btn-primary"><i class="icon fa fa-folder-open"></i> Browse</a>
 </div>
 </div>
 </div>
 <i>JPEG, JPG, PNG, WEBP and SVG accepted. Image will be cropped to fit logo area.</i>
 <?php if( isset($_GET['channel']) && !empty( $channels[ $_GET[ 'channel' ] ][ 'logo' ] ) && is_file( $channels[ $_GET[ 'channel' ] ][ 'logo' ] ) ): ?>
 <div class="logo-container"><br>
 <div class="channel-logo">
 <img src="./../<?php echo \htmlentities($channels[ $_GET[ 'channel' ] ][ 'logo' ]??'', ENT_QUOTES, 'UTF-8', false); ?>" width="auto" height="40"></div>
 <br>
 <a href="#" class="delete-logo"><i class="icon fa fa-times"></i> Delete</a>
 </div>
 <?php endif; ?>
 </div>
 </div>
 <div class="clearfix"></div>
 <div class="form-group">
 <label class="col-sm-2 control-label" for="skin">Color Scheme</label>
 <div class="col-sm-3">
 <select class="form-control" name="skin" id="skin" <?php echo \htmlentities(( ( count( $schemesList ) <= 1 ) ? ' disabled' : '' )??'', ENT_QUOTES, 'UTF-8', false); ?>>
 <?php /* Now show and pick used */ ?>
 <?php if( count( $schemesList ) >= 1 ): ?>
 <?php $__currentLoopData = $schemesList; $this->addLoop($__currentLoopData);$this->getFirstLoop();
 foreach($__currentLoopData as $key => $file): $loop = $this->incrementLoopIndices();  ?>
 <?php 
 $vv = ( ( isset( $_GET[ 'channel' ] ) && $_GET[ 'channel' ] !== 'add' && $channels[ $_GET[ 'channel' ] ][ 'skin' ] === $file ) ? ' selected' : '' );
 ?>
 <option value="<?php echo \htmlentities($file??'', ENT_QUOTES, 'UTF-8', false); ?>"<?php echo \htmlentities($vv??'', ENT_QUOTES, 'UTF-8', false); ?>><?php echo \htmlentities($key??'', ENT_QUOTES, 'UTF-8', false); ?></option>
 <?php endforeach; $this->popLoop(); $loop = $this->getFirstLoop(); ?>
 <?php endif; ?>
 </select>
 </div>
 <span class="help-block">Hint: Generate custom color schemes under <b>Advanced</b> tab</span>
 </div>
 <div class="divider"></div>
 <div class="row">
 <div class="col-sm-9 col-sm-offset-2">
 <h5>How to configure streams?</h5>
 <p>
 The player supports various streaming formats, but because <b>HTML5 Audio API</b> relies on web browser, each has different codecs support.
 MP3 codec is supported in all major web browsers, and for that reason it is highly recommended. Codecs like <b>AAC+</b> and <b>OGG</b> are only supported in a small number of browsers.
 Below you will find examples of how to link streams:
 </p>
 <ul>
 <li><b>Shoutcast v1.x</b> - http://shoutcast-server-url.com:port/;stream.mp3</li>
 <li><b>Shoutcast v2.x</b> - http://shoutcast-server-url.com:port/mountpoint</li>
 <li><b>Iceacast v2.x</b> - http://icecast-server-url.com:port/mountpoint</li>
 <li><b>Other Software</b> - http://stream-url.com/stream.mp3</li>
 </ul>
 <span>
 <strong class="text-red">Note:</strong> You can use a combination of codecs e.g., OGG and MP3. In combination mode, the first stream is used as "primary" and the second as "fall-back".
 Adding AAC+ codec may break the player in some browsers because some browsers don't fall back when playback fails.
 </span>
 </div>
 </div>
 <div class="clearfix"></div>
 <br>
 <div class="row">
 <label class="col-sm-2 control-label">Streams (Audio)</label>
 <div class="col-sm-9">
 <div class="streams-list">

 <?php /* If this is post, or edit create quality/streams inputs */ ?>
 <?php if( isset( $_POST[ 'quality' ] ) && is_array( $_POST[ 'quality' ] ) ): ?>

 <?php $c = count( $_POST[ 'quality' ] ) - 1;  ?>
 <?php for( $i = 0; $i <= $c; $i++ ): ?>

 <div class="quality-group">
 <input title="Click to edit" class="input-quality" type="text" name="quality[]" value="<?php echo \htmlentities($_POST[ 'quality' ][ $i ]??'', ENT_QUOTES, 'UTF-8', false); ?>">
 <div class="pull-right"><a href="#" class="delete-group text-red"><i class="icon fa fa-times"></i> Delete Group</a></div>
 <table class="table vertical-center streams">
 <tbody>
 <?php /* Count fields */ ?>
 <?php 
 $name = 'url_' . $i;
 $totalFields = count( $_POST[ $name ] ) - 1;
 ?>

 <?php /* Loop through fields */ ?>
 <?php for( $f = 0; $f <= $totalFields; $f++ ): ?>
 <tr>
 <td class="col-sm-9">
 <input class="form-control" name="url_<?php echo \htmlentities($i??'', ENT_QUOTES, 'UTF-8', false); ?>[]" placeholder="Stream URL (read above!)" type="url" value="<?php echo \htmlentities($_POST[ 'url_' . $i ][ $f ]??'', ENT_QUOTES, 'UTF-8', false); ?>">
 </td>
 <td class="col-sm-2">
 <select name="codec_<?php echo \htmlentities($i??'', ENT_QUOTES, 'UTF-8', false); ?>[]" class="form-control">';
 <?php $__currentLoopData = $codecs; $this->addLoop($__currentLoopData);$this->getFirstLoop();
 foreach($__currentLoopData as $codec => $name): $loop = $this->incrementLoopIndices();  ?>
 <?php /* If selected */ ?>
 <?php if( $_POST[ 'codec_' . $i ][ $f ] === $codec ): ?>
 <?php $codec .= '" selected="selected';  ?>
 <?php endif; ?>
 <option value="<?php echo $codec; ?>"><?php echo \htmlentities($name??'', ENT_QUOTES, 'UTF-8', false); ?></option>
 <?php endforeach; $this->popLoop(); $loop = $this->getFirstLoop(); ?>
 </select>
 </td>
 <td style="width: 5%; text-align: center;">
 <div class="form-control-static">
 <a class="remove-row" href="#" style="color: red;">
 <i class="icon fa fa-trash-can"></i>
 </a>
 </div>
 </td>
 </tr>
 <?php endfor; ?>
 </tbody>
 </table>
 <a href="#" class="add-row"><i class="icon fa fa-plus"></i> Add Codec</a></div>
 <?php endfor; ?>
 <?php endif; ?>
 </div>
 <a class="btn btn-success add-group"><i class="icon fa fa-plus"></i> Add Group</a>
 </div>
 </div>
 <div class="divider"></div>
 <div class="form-group">
 <label class="col-sm-2 control-label" for="stats">Track Info Method</label>
 <div class="col-sm-4">
 <select class="form-control" name="stats" id="stats">
 <?php $__currentLoopData = $trackInfoMethods; $this->addLoop($__currentLoopData);$this->getFirstLoop();
 foreach($__currentLoopData as $key => $method): $loop = $this->incrementLoopIndices();  ?>
 <option value="<?php echo \htmlentities($key??'', ENT_QUOTES, 'UTF-8', false); ?>" <?php echo \htmlentities(( isset( $_POST[ 'stats' ] ) && $_POST[ 'stats' ] === $key )?' selected' : ''??'', ENT_QUOTES, 'UTF-8', false); ?>><?php echo \htmlentities($method[ 'label' ]??'', ENT_QUOTES, 'UTF-8', false); ?></option>
 <?php endforeach; $this->popLoop(); $loop = $this->getFirstLoop(); ?>
 </select>
 </div>
 </div>
 <div class="stats-conf"></div>
 </div>
 </div>
 <div class="container">
 <div class="row">
 <button type="submit" class="btn btn-success"><i class="icon fa fa-floppy-disk"></i> Save</button>
 <a href="index.php?page=channels" class="btn btn-danger"><i class="icon fa fa-times"></i> Cancel</a>
 </div>
 </div>
 </form>
 <style>
 ul {
 padding-left: 20px;
 }

 h5 {
 font-size: 14px;
 padding: 0 0 5px;
 margin: 0;
 }

 h5 a {
 font-size: 12px;
 font-weight: normal;
 }

 .quality-group {
 padding: 5px 0 5px;
 border-radius: 3px;
 margin: 0 0 15px;
 }

 .quality-group:last-child {
 margin-bottom: 20px;
 }

 table.table {
 margin: 0 0 5px;
 }

 tbody td, table.table tr td:first-child {
 padding: 10px 0 !important;
 }

 .input-quality {
 position: relative;
 padding: 0;
 margin-bottom: -5px;
 background: transparent;
 border: 0;
 outline: none 0;
 font-size: 14px;
 font-weight: 500;
 min-width: 350px;
 }

 .channel-logo {
 display: inline-block;
 border: 1px solid #808080;
 background: #585858;
 color: #fff;
 padding: 5px 10px;
 }
 </style>
 <script type="text/javascript">
 window.loadInit = function () {

 // ### Initial Focus on Channel Name Field
 // When the page loads, focus on the input field with the name "name".
 $('input[name="name"]').focus();

 // ### Handle Stat Input Changes
 // When the stat selection changes, update the stat configuration fields accordingly.
 $('select#stats').on('change', function () {

 let $this = $(this);
 let $statsConf = $('.stats-conf');
 switch ($this.val()) {

 // ### Dynamic Cases Generated via PHP
 // For each tracking method, generate corresponding fields.
 <?php foreach ($trackInfoMethods as $key => $opts):
 $fields = "";
 foreach ($opts['fields'] as $opt) {
 $fields .= $form->field($opt);
 }
 ?>
 case '<?= $key ?>':
 $statsConf.html('<?= $fields ?>');
 break;
 <?php endforeach  ?>

 default:
 // Clear the stats configuration if no matching case.
 $statsConf.empty();
 break;
 }

 return false;

 });

 // ### Add a New Stream Group
 // When the "Add Group" button is clicked, add a new quality group.
 $('.add-group').on('click', function () {

 // Calculate the new group's index.
 let xid = parseInt($('.quality-group').index($('.quality-group').last())) + 1 || 0;
 let quality = 'Default Quality' + (xid >= 1 ? ' (' + (xid + 1) + ')' : '');

 // Create the HTML structure for the new quality group.
 let $html = $(
 '<div class="quality-group">' +
 '<input class="input-quality" name="quality[]" title="Click to edit" type="text" value="' + quality + '">' +
 '<div class="pull-right">' +
 '<a class="text-red delete-group" href="#"><i class="icon fa fa-times"></i> Delete Group</a>' +
 '</div>' +
 '<table class="table vertical-center streams">' +
 '<tbody></tbody>' +
 '</table>' +
 '<a class="add-row" href="#"><i class="icon fa fa-plus"></i> Add codecs</a>' +
 '</div>'
 );

 // Append the new group to the stream list.
 $('.streams-list').append($html);

 // Automatically add a stream row to the new group.
 $html.find('.add-row').trigger('click');

 return false;

 });

 // ### Delete a Stream Group
 // Handle the deletion of a quality group.
 $('.streams-list').on('click', '.delete-group', function () {
 if (confirm('Are you sure you wish to delete the whole group?')) {

 // Remove the quality group.
 $(this).closest('.quality-group').remove();

 // ### Reindex the Remaining Groups
 // Update the name attributes to maintain correct indices.
 let xid = 0;
 $('.quality-group').each(function () {
 $(this).find('select, input').each(function () {

 let $input = $(this);
 let currentName = $input.attr('name');

 if (currentName != null) {
 // Use regex to replace the index number in the name attribute.
 $input.attr('name', currentName.replace(/_([0-9]+)\[\]/, '_' + xid + '[]'));
 }

 });

 xid++; // Increment the group index.

 });
 }

 return false;

 });

 // ### Delete a Stream Row
 // Handle the deletion of individual stream rows.
 $('.streams-list').on('click', '.remove-row', function () {

 if (confirm('Are you sure you wish to delete this stream?')) {

 // Remove the entire table row containing the stream.
 $(this).closest('tr').remove();

 }

 return false;

 });

 // ### Add a Stream Row
 // Add a new stream input row within a quality group.
 $('.streams-list').on('click', '.add-row', function () {

 // Get the index of the current quality group.
 let xid = parseInt($('.quality-group').index($(this).closest('.quality-group'))) || 0;

 // Append a new stream row to the group's table body.
 $(this)
 .closest('.quality-group')
 .find('tbody')
 .append(
 '<tr class="stream-row">' +
 '<td class="col-sm-9">' +
 '<input class="form-control" name="url_' + xid + '[]" placeholder="Stream URL (read above!)" type="url">' +
 '</td>' +
 '<td class="col-sm-2">' +
 '<select class="form-control" name="codec_' + xid + '[]">' +
 '<option value="mp3">MP3</option>' +
 '<option value="oga">OGG</option>' +
 '<option value="m4a">AAC</option>' +
 '</select>' +
 '</td>' +
 '<td style="width: 5%; text-align: center;">' +
 '<div class="form-control-static">' +
 '<a class="remove-row" href="#" style="color: red;"><i class="icon fa fa-trash-can"></i></a>' +
 '</div>' +
 '</td>' +
 '</tr>'
 );

 // Re-initialize custom select boxes (if using a plugin).
 $('select').selectbox();
 return false;

 });

 // ### Update File Input
 //  the selected file name in a custom input field.
 $('input[type="file"]').on('change', function () {

 let fileName = $(this).val().replace(/.*\\fakepath\\/, '');
 $(this).parent('.file-input').find('input.file-name').val(fileName);

 });

 // ### Delete Existing Logo (Edit Mode Only)
 // Allow users to delete the existing logo when editing.
 <?php if(isset($_GET['action']) && $_GET['action'] === 'edit'): ?>
 $('.delete-logo').on('click', function () {

 let $this = $(this);

 // Send a request to delete the logo.
 $.get('index.php?page=channels&action=edit&channel=<?php echo \htmlentities($_GET['channel']??'', ENT_QUOTES, 'UTF-8', false); ?>&logo=delete', function () {

 // Remove the logo container from the DOM.
 $this.closest('.logo-container').remove();

 });

 return false;

 });
 <?php endif; ?>

 // ### Trigger Stats Change on Page Load
 // If the form has been submitted or the action is not 'add', trigger the stat change event to populate fields.
 <?php if(!empty( $_POST ) || $_GET['action'] !== 'add'): ?>
 $('select#stats').trigger('change');
 <?php endif; ?>

 // ### Ensure at Least One Quality Group Exists
 // If no quality groups are present, automatically add one.
 if ($('.streams-list .quality-group').length === 0) {

 $('.add-group').trigger('click');

 }
 };
 </script>
<?php $this->stopSection(); ?>
<?php echo $this->runChild('template'); ?>