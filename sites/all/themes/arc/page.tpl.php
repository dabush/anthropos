<?php // $Id: page.tpl.php,v 1.15.4.7 2008/12/23 03:40:02 designerbrent Exp $ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">
<head>
	<title><?php print $head_title ?></title>
	<meta http-equiv="content-language" content="<?php print $language->language ?>" />
  <?php print $head; ?>
  <?php print $styles; ?>
	<link rel="stylesheet" href="/sites/all/themes/arc/css/style_arc.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="/sites/all/themes/arc/css/style_right.css" type="text/css" media="screen, projection">
</head>

<body class="<?php print $body_classes; ?>">
<?php
if ($tabs != '') {
  print '<div class="tabs">'. $tabs .'</div>';
}
if ($customtabs) {
?>
<div class="customtabs"><?php print $customtabs; ?></div>
<?php
}
if ($messages != '') {
print '<div id="messages">'. $messages .'</div>';
}
?>
<div id="fullwidth">
	<div class="container" id="centered">
		<div id="header"><a href="/"><img src="/sites/all/themes/arc/css/arcimages/ARC-block-logo2.gif" /></a></div>
	  <!--remove menu and navframe element-->
	  <!--<?php if ($navframe): ?>
		<div id="navframe">
	    	<?php print $navframe; ?>
			<?php /*if (isset($primary_links)) : ?>
			<?php print theme('links', $primary_links, array('id' => 'nav', 'class' => 'links')) ?>
			<?php endif;*/ ?>
		</div>
	  <?php endif ?>-->
		<div id="main_content">
			<!--<div class="field field-type-text field-field-arcpage-descriptive">
			    <div class="field-items">
			            <div class="field-item odd">
			                    <p>Anthropological Research on the Contemporary is devoted to collaborative inquiry into contemporary forms of life, labor and language.</p>
			        </div>
			        </div>-->
			</div>
			    <div class="field-items">
			            <div class="field-item odd">
			                    <img  class="imagefield imagefield-field_arcpage_image" alt="" src="/sites/default/files/imagefield_default_images/banner-HOMEPAGE2.jpg" />
			        </div>
			</div>
			
			<div class="<?php print $center_classes; ?>">
				<?php


				/*if ($title != '') {
				print '<h2>'. $title .'</h2>';
				}*/
				//print $feed_icons;

				//print $help; // Drupal already wraps this one in a class      

				print $content;
				?>
					<?php if ($contentblocks): ?>
					<div class="contentblocks"><?php print $contentblocks; ?></div>
					<?php endif ?>
			</div>

			<?php if ($right): ?>
			<div class="<?php print $right_classes; ?>"><?php print $right; ?></div>
			<?php endif ?>
		</div>
		<?php if ($fullwidth): ?>
		<div class="fullwidth"><?php print $fullwidth; ?></div>
		<?php endif ?>

		<?php if ($footer_message | $footer): ?>
		<div id="footer" class="clear">
		<?php if ($footer): ?>
		<?php print $footer; ?>
		<?php endif; ?>
		<?php if ($footer_message): ?>
		<div id="footer-message"><?php print $footer_message; ?></div>
		<?php endif; ?>
	</div>
	<?php endif; ?>
	</div>

	<?php print $scripts ?>
	<?php print $closure; ?>

</div>

</body>
</html>
