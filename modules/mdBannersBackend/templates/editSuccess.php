<?php use_helper('I18N', 'Date', 'mdAsset') ?>
<?php include_partial('mdBannersBackend/assets') ?>

<?php slot('banners'); ?>
<?php slot('nav') ?>Banners > <?php echo __('mdBanners_Edit'); ?><?php end_slot(); ?>

<div id="sf_admin_container">
  <h1><?php echo __('mdBanners_Edit Form', array(), 'messages') ?></h1>

  <?php include_partial('mdBannersBackend/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('mdBannersBackend/form_header', array('md_banner' => $md_banner, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('mdBannersBackend/form', array('md_banner' => $md_banner, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('mdBannersBackend/form_footer', array('md_banner' => $md_banner, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
