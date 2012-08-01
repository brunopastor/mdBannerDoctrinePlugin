<?php

class mdBannersFrontendComponents extends sfComponents {

  public function executeMdBanners($request){
    $this->banners = Doctrine::getTable('mdBanner')->retrieveBanners($this->sector);
  }
  
}
