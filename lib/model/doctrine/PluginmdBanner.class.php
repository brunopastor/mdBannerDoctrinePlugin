<?php

/**
 * PluginmdBanner
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class PluginmdBanner extends BasemdBanner
{
  const SF_CACHE_KEY = 'mdbanner';
  
  const FOLDER_NAME = 'banners';
  
  /**
   * Devuelve el path absoluto de la imagen
   * 
   * @return string
   */
  public function getPath()
  {
    return sfConfig::get('sf_upload_dir') . '/' . self::FOLDER_NAME . '/' . $this->getImage();
  }
  
  /**
   * Devuelve la ruta a partir de /uploads
   * 
   * @return string
   */
  public function getSrc()
  {
    if($this->getImage() == '')
      return '/' . self::FOLDER_NAME . '/no-image.jpg';
    
    return '/' . self::FOLDER_NAME . '/' . $this->getImage();
  }  
  
  public function postSave($event){
    // Limpiamos cache
    $command = 'find ' . sfConfig::get('sf_cache_dir') . ' -name "' . self::SF_CACHE_KEY . '_' . '"* -exec rm -rf {} \;';
    exec($command);
    
    /*sfContext::getInstance()->switchTo('frontend');
    if ($cache = sfContext::getInstance()->getViewCacheManager()) {
      $cache->remove('@sf_cache_partial?module=sales&action=_voceSabia&sf_cache_key=vocesabia-listado');
    }
    sfContext::getInstance()->switchTo('backend');*/    
  }
}