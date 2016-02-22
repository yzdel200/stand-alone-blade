<?php
require 'vendor/autoload.php';

$app = new Illuminate\Container\Container;

// 设置模板和缓存路径
$app['config'] = [
  'view.compiled' => __DIR__ . '/cache',
  'view.paths' => [
    __DIR__ . '/views',
  ],
];

// 注册依赖的组件
(new Illuminate\Filesystem\FilesystemServiceProvider($app))->register();
(new Illuminate\Events\EventServiceProvider($app))->register();

// 注册 Blade 引擎
(new Illuminate\View\ViewServiceProvider($app))->register();

// 渲染 Blade 模板
echo $app['view']->make('vim', [
  'title' => '<h1>Vim 实用技巧</h1>',
  'editors' => [
    'Vim',
    'Emacs',
    'Others',
  ],
  'a' => 1,
  ])->render();
