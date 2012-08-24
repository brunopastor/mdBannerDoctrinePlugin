<?php

/**
 * PluginmdBanner form.
 *
 * @package    mdBannerDoctrinePlugin
 * @subpackage form
 * @author     Gaston Caldeiro <chugas488@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginmdBannerForm extends BasemdBannerForm
{
  public function setup()
  {
    parent::setup();
    
    unset($this['position']);
    
    $this->widgetSchema->setHelp('url', 'mdBanner_La url debe comenzar con http://');
    
    $this->widgetSchema['filename'] = new sfWidgetFormInputFileEditable(array(
      'file_src'  => $this->getObject()->getSrcImage(),
      'is_image'  => true,
      'edit_mode' => (!$this->isNew() && $this->getObject()->getFilename() != ""),
      'delete_label' => 'mdBanner_eliminar la imagen actual',
      'template'  => '<div class="md_auto_image">%file%<br />%input%<br />%delete_label% %delete%</div>',
    ));
    
    $this->widgetSchema->setHelp('filename', 'mdBanner_Importante');

    $mime_types = array(
      'image/jpeg',
      'image/pjpeg',
      'image/png',
      'image/x-png',
      'image/gif', 
      'application/x-shockwave-flash'
    );
    
    $this->validatorSchema['filename'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir') . '/' . mdBanner::FOLDER_NAME,
      'mime_types' => $mime_types
    ));
 
    $this->validatorSchema['filename_delete'] = new sfValidatorPass();    
  }
}
