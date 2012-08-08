<?php if($md_banner->isSwf()): ?>

    <img alt="" src="/mdBannerDoctrinePlugin/images/swf.jpg" width="80" height="80" />

<?php else: ?>

    <img alt="" src="<?php echo mdWebImage::getUrl($md_banner->getSrc(), array(mdWebOptions::CODE => mdWebCodes::ORIGINAL)); ?>" height="80" />

<?php endif; ?>
