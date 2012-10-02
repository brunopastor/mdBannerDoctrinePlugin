<?php

function render_banner($md_banner, $options = array())
{
  if(is_object($md_banner))
  {
    if($md_banner->isSwf()){
      
      render_swf($md_banner, $options);
      
    } else{
      
      render_image($md_banner, $options);

    }
  }
}

/**
 * render_public_media Renderiza la media acorde al tipo que es
 *
 * @param unknown $md_banner
 * @param unknown $options = array()
 *  Los parametros por defecto son.
 *    array(
 *        "width" => 200,
 *        "height" => 200,
 *        "EXACT_DIMENTIONS" => true,
 *        "CODE" => mdWebCodes::RESIZECROP,
 * @return void
 */
function render_image($md_banner, $options = array())
{
  if(!isset($options["width"]) and !isset($options["height"]))
  {
    $options["width"] = 200;
  }
  if(isset($options["EXACT_DIMENTIONS"]))
  {
    $options["EXACT_DIMENTIONS"] = true;
  }
  else
  {
    $options["EXACT_DIMENTIONS"] = false;
  }
  if(!isset($options["CODE"]))
  {
    $options["CODE"] = mdWebCodes::CROPRESIZE;
  }
  if(!isset($options["IMAGE"]))
  {
    $options["IMAGE"] = false;
  }

  echo get_partial('mdBannerRender/' . $md_banner->getPartialName(), array('options' => $options, 'md_banner' => $md_banner));
}

function render_swf($md_banner, $options = array())
{
  echo get_partial('mdBannerRender/' . $md_banner->getPartialName(), array('options' => $options, 'md_banner' => $md_banner));
}
