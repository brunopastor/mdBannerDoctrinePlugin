<?php if($md_banner->isSwf()): ?>

    <img alt="" src="/mdBannerDoctrinePlugin/images/swf.jpg" width="80" height="80" />

<?php else: ?>

    <img alt="" src="<?php echo mdWebImage::getUrl($md_banner->getSrc(), array(mdWebOptions::WIDTH => '270', mdWebOptions::HEIGHT => '90', mdWebOptions::CODE => mdWebCodes::RESIZECROP)); ?>" />

<?php endif; ?>
