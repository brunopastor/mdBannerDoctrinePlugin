<?php

/**
 * PluginmdBanner form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginmdBannerForm extends BasemdBannerForm
{
  public function setup()
  {
    parent::setup();
    
    unset($this['position']);
    
    $this->widgetSchema->setHelp('url', 'mdBanner_La url debe comenzar con http://');
    
    $this->widgetSchema['image'] = new sfWidgetFormInputFileEditable(array(
      'file_src'  => '/uploads/' . mdBanner::FOLDER_NAME . '/'.$this->getObject()->getImage(),
      'is_image'  => true,
      'edit_mode' => !$this->isNew(),
      'delete_label' => 'mdBanner_eliminar la imagen actual',
      'template'  => '<div class="md_auto_image">%file%<br />%input%<br />%delete_label% %delete%</div>',
    ));
    
    $this->widgetSchema->setHelp('image', 'mdBanner_Importante: Para la seccion "slider" se aconseja que la imagen tenga un ancho de 940 pixeles y un alto de 300 pixeles.');

    
    $this->validatorSchema['image'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir') . '/' . mdBanner::FOLDER_NAME,
      'mime_types' => 'web_images',
    ));
 
    $this->validatorSchema['image_delete'] = new sfValidatorPass();    
  }  
}
