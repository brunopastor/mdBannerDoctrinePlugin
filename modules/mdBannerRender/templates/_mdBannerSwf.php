<?php $options = $options->getRawValue(); ?>
<object type="application/x-shockwave-flash" data="<?php echo '/uploads' . $md_banner->getSrc(); ?>" width="<?php echo $options['width']; ?>" height="<?php echo $options['height']; ?>" onmousedown="banner_navigate_<?php echo $md_banner->getId();?>(<?php echo $md_banner->getNuevaVentana(); ?>)">
  <param name="movie" value="<?php echo '/uploads' . $md_banner->getSrc(); ?>" />
  <param name="quality" value="high" />
  <param name="wmode" value="transparent" />
  <img src="/mdBannerDoctrinePlugin/image/swf.jpg" width="<?php echo $options['width']; ?>" height="<?php echo $options['height']; ?>" alt="swf not available" />
</object>
<script type="text/javascript">
  function banner_navigate_<?php echo $md_banner->getId();?>(new_window){
    if(new_window){
      window.open('<?php echo $md_banner->getUrl(); ?>', '_blank');
    }else{
      document.location.href='<?php echo $md_banner->getUrl(); ?>';      
    }
  }
</script>
  