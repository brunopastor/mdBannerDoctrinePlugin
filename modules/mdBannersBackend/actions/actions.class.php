<?php

require_once dirname(__FILE__).'/../lib/mdBannersBackendGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/mdBannersBackendGeneratorHelper.class.php';

/**
 * mdBannersBackend actions.
 *
 * @package    mvdhome
 * @subpackage mdBannersBackend
 * @author     Gaston Caldeiro
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mdBannersBackendActions extends autoMdBannersBackendActions
{
  public function executePromote() {
    $object = Doctrine::getTable('mdBanner')->findOneById($this->getRequestParameter('id'));

    $object->promote();
    $this->redirect("@md_banner");
  }

  public function executeDemote() {
    $object = Doctrine::getTable('mdBanner')->findOneById($this->getRequestParameter('id'));

    $object->demote();
    $this->redirect("@md_banner");
  }

  protected function buildQuery() {
    $q = parent::buildQuery();
    $q->addOrderBy('position asc');
    return $q;
  }   
}
