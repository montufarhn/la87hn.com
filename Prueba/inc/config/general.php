<?php 
return array (
  'tplOptions' => 
  array (
    'simple' => 
    array (
      'autoWindowResize' => false,
      'visualization' => true,
      'visualizationColor' => false,
    ),
  ),
  'artwork_sources' => 
  array (
    'itunes' => 
    array (
      'state' => 'enabled',
      'index' => 26,
    ),
    'spotify' => 
    array (
      'index' => 27,
      'api_key' => '',
    ),
    'fanarttv' => 
    array (
      'index' => 28,
      'api_key' => '',
    ),
    'lastfm' => 
    array (
      'index' => 29,
      'api_key' => '',
    ),
    'custom' => 
    array (
      'index' => 30,
      'api_url' => '',
    ),
  ),
  'title' => 'La 87, La Primera',
  'description' => 'Discover PawTunes, the ultimate internet radio player with purrfect visuals, customizable templates, and clean code. Built for pros, loved by cats!',
  'site_title' => 'La 87, La Primera',
  'google_analytics' => '',
  'override_share_image' => './data/images/override-image.png',
  'default_lang' => 'en.php',
  'multi_lang' => true,
  'autoplay' => true,
  'debugging' => 'log-only',
  'default_channel' => 'La 87 La Primera',
  'default_volume' => '100',
  'template' => 'pawtunes',
  'artist_default' => 'La 87',
  'title_default' => 'La Primera',
  'dynamic_title' => true,
  'artist_maxlength' => '24',
  'title_maxlength' => '28',
  'stats_refresh' => '10',
  'api' => true,
  'track_regex' => '(?P<artist>[^-]*)[ ]?-[ ]?(?P<title>.*)',
  'history' => true,
  'cache_images' => true,
  'artist_images_only' => true,
  'artwork_lazy_loading' => true,
  'images_size' => '280',
  'admin_username' => 'admin',
  'admin_password' => '$2y$10$TI7WVV8ZiIktYvjYWzmCseW1/GqQ4oUq/YiRv7yXapHRmXNwz57bm',
  'cache' => 
  array (
    'path' => './data/cache',
  ),
);