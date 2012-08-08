<a href="<?php echo $md_banner->getUrl(); ?>" title="<?php echo $md_banner->getNombre(); ?>" <?php if ($md_banner->getNuevaVentana() == true)
  echo 'target="_blank"'; ?>>
  <img src="<?php echo mdWebImage::getUrl($md_banner->getSrc(), $options->getRawValue()) ?>" />
</a>
