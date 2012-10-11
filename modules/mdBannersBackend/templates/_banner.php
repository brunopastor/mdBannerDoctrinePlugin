<?php if($md_banner->isSwf()): ?>

    <img alt="" src="/mdBannerDoctrinePlugin/images/swf.jpg" width="80" height="80" />

<?php else: 
use_helper('mdMedia');
?>

    <img alt="" src="<?php echo get_url($md_banner->getSrc(), '270', '90','resize', true); ?>" />

<?php endif; ?>
