<?php

Kirby::plugin('gbd/dropzone', [
  'panel' => [
    'css' => 'index.css',
  ],
  'blueprints' => [
    'sections/dropzone' => __DIR__ . '/blueprints/sections/dropzone.yml',
  ],
]);