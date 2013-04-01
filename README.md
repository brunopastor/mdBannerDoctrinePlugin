mdBannerDoctrinePlugin
======================

For dynamic banner management
Dependencias:
  mastodontePlugin
  mdMediaDoctrine2Plugin

MODO DE INSTALACION:
---------------------

1- Customizar los sectores segun proyecto, para ello sobreescribir el schema.yml
Por defecto viene con un solo sector: slider

mdBanner:
  columns:
    sector:
      type: enum
      values: [slider, posicion2, posicion3]

2- Habilitar modulo mdBannersBackend en el settings.yml

3- Dependencias: csDoctrineActAsSortablePlugin (Para ordenamiento)

MODO DE USO FRONTEND:
-----------------------

1- Incluir componente de la siguiente manera:

<?php include_component('mdBannersFrontend', 'mdBanners', array('sector' => 'slider')); ?>

2- Crear el partial cuyo nombre debera ser: _$sector

ejemplo: _slider.php, _posicion2.php, _posicion3.php

3- Agregar opciones de cache en el archivo cache.yml de la siguiente manera:

_$sector:
  enabled:    true
  lifetime:   86400

ejemplo:

_slider:
  enabled:    true
  lifetime:   86400

_posicion2:
  enabled:    true
  lifetime:   86400
