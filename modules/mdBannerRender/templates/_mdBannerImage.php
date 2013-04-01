<?php 
use_helper('mdMedia');

$code = $options['CODE'];
$width = (isset($options['width'])?$options['width']:null);
$height = (isset($options['height'])?$options['height']:null);
$proportional = (isset($options['proportional'])?$options['proportional']:false);
?>
<a href="<?php echo $md_banner->getUrl(); ?>" title="<?php echo $md_banner->getNombre(); ?>" <?php if ($md_banner->getNuevaVentana() == true)
  echo 'target="_blank"'; ?>>
  <img src="<?php echo get_url($md_banner->getSrc(), $code, $width, $height, $proportional) ?>" />
</a>
