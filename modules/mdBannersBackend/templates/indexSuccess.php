<?php use_helper('I18N', 'Date') ?>
<?php include_partial('mdBannersBackend/assets') ?>

<?php slot('banners'); ?>
<?php slot('nav') ?>Banners<?php end_slot(); ?>

<div id="sf_admin_container">
  <h1><?php echo __('Banner_List', array(), 'messages') ?></h1>

  <?php include_partial('mdBannersBackend/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('mdBannersBackend/list_header', array('pager' => $pager)) ?>
  </div>

  <div id="sf_admin_content">
    <form action="<?php echo url_for('md_banner_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('mdBannersBackend/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('mdBannersBackend/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('mdBannersBackend/list_actions', array('helper' => $helper)) ?>
    </ul>
    </form>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('mdBannersBackend/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
