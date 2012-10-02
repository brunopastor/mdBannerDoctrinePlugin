<?php include_partial('mdBannersFrontend/' . $sector, array('banners' => $banners, 'sf_cache_key' => mdBanner::SF_CACHE_KEY . '_' . $sector . '_' . $sf_user->getCulture())); ?>
