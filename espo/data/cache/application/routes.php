<?php
return array (
  0 => 
  array (
    'route' => '/Activities/:scope/:id/:name',
    'method' => 'get',
    'params' => 
    array (
      'controller' => 'Activities',
      'action' => 'list',
      'scope' => ':scope',
      'id' => ':id',
      'name' => ':name',
    ),
  ),
  1 => 
  array (
    'route' => '/Activities',
    'method' => 'get',
    'params' => 
    array (
      'controller' => 'Activities',
      'action' => 'listCalendarEvents',
    ),
  ),
  2 => 
  array (
    'route' => '/Timeline',
    'method' => 'get',
    'params' => 
    array (
      'controller' => 'Activities',
      'action' => 'getTimeline',
    ),
  ),
  3 => 
  array (
    'route' => '/Activities/:scope/:id/:name/list/:entityType',
    'method' => 'get',
    'params' => 
    array (
      'controller' => 'Activities',
      'action' => 'entityTypeList',
      'scope' => ':scope',
      'id' => ':id',
      'name' => ':name',
      'entityType' => ':entityType',
    ),
  ),
  4 => 
  array (
    'route' => '/',
    'method' => 'get',
    'params' => '"EspoCRM REST API"',
  ),
  5 => 
  array (
    'route' => '/App/user',
    'method' => 'get',
    'params' => 
    array (
      'controller' => 'App',
      'action' => 'user',
    ),
  ),
  6 => 
  array (
    'route' => '/Metadata',
    'method' => 'get',
    'params' => 
    array (
      'controller' => 'Metadata',
    ),
  ),
  7 => 
  array (
    'route' => '/I18n',
    'method' => 'get',
    'params' => 
    array (
      'controller' => 'I18n',
    ),
    'conditions' => 
    array (
      'auth' => false,
    ),
  ),
  8 => 
  array (
    'route' => '/Settings',
    'method' => 'get',
    'params' => 
    array (
      'controller' => 'Settings',
    ),
    'conditions' => 
    array (
      'auth' => false,
    ),
  ),
  9 => 
  array (
    'route' => '/Settings',
    'method' => 'patch',
    'params' => 
    array (
      'controller' => 'Settings',
    ),
  ),
  10 => 
  array (
    'route' => '/Settings',
    'method' => 'put',
    'params' => 
    array (
      'controller' => 'Settings',
    ),
  ),
  11 => 
  array (
    'route' => '/User/passwordChangeRequest',
    'method' => 'post',
    'params' => 
    array (
      'controller' => 'User',
      'action' => 'passwordChangeRequest',
    ),
    'conditions' => 
    array (
      'auth' => false,
    ),
  ),
  12 => 
  array (
    'route' => '/User/changePasswordByRequest',
    'method' => 'post',
    'params' => 
    array (
      'controller' => 'User',
      'action' => 'changePasswordByRequest',
    ),
    'conditions' => 
    array (
      'auth' => false,
    ),
  ),
  13 => 
  array (
    'route' => '/Stream',
    'method' => 'get',
    'params' => 
    array (
      'controller' => 'Stream',
      'action' => 'list',
      'scope' => 'User',
    ),
  ),
  14 => 
  array (
    'route' => '/GlobalSearch',
    'method' => 'get',
    'params' => 
    array (
      'controller' => 'GlobalSearch',
      'action' => 'search',
    ),
  ),
  15 => 
  array (
    'route' => '/LeadCapture/:apiKey',
    'method' => 'post',
    'params' => 
    array (
      'controller' => 'LeadCapture',
      'action' => 'leadCapture',
      'apiKey' => ':apiKey',
    ),
    'conditions' => 
    array (
      'auth' => false,
    ),
  ),
  16 => 
  array (
    'route' => '/LeadCapture/:apiKey',
    'method' => 'options',
    'params' => 
    array (
      'controller' => 'LeadCapture',
      'action' => 'leadCapture',
      'apiKey' => ':apiKey',
    ),
    'conditions' => 
    array (
      'auth' => false,
    ),
  ),
  17 => 
  array (
    'route' => '/:controller/action/:action',
    'method' => 'post',
    'params' => 
    array (
      'controller' => ':controller',
      'action' => ':action',
    ),
  ),
  18 => 
  array (
    'route' => '/:controller/action/:action',
    'method' => 'put',
    'params' => 
    array (
      'controller' => ':controller',
      'action' => ':action',
    ),
  ),
  19 => 
  array (
    'route' => '/:controller/action/:action',
    'method' => 'get',
    'params' => 
    array (
      'controller' => ':controller',
      'action' => ':action',
    ),
  ),
  20 => 
  array (
    'route' => '/:controller/layout/:name',
    'method' => 'get',
    'params' => 
    array (
      'controller' => 'Layout',
      'scope' => ':controller',
    ),
  ),
  21 => 
  array (
    'route' => '/:controller/layout/:name',
    'method' => 'put',
    'params' => 
    array (
      'controller' => 'Layout',
      'scope' => ':controller',
    ),
  ),
  22 => 
  array (
    'route' => '/:controller/layout/:name/:setId',
    'method' => 'put',
    'params' => 
    array (
      'controller' => 'Layout',
      'scope' => ':controller',
    ),
  ),
  23 => 
  array (
    'route' => '/Admin/rebuild',
    'method' => 'post',
    'params' => 
    array (
      'controller' => 'Admin',
      'action' => 'rebuild',
    ),
  ),
  24 => 
  array (
    'route' => '/Admin/clearCache',
    'method' => 'post',
    'params' => 
    array (
      'controller' => 'Admin',
      'action' => 'clearCache',
    ),
  ),
  25 => 
  array (
    'route' => '/Admin/jobs',
    'method' => 'get',
    'params' => 
    array (
      'controller' => 'Admin',
      'action' => 'jobs',
    ),
  ),
  26 => 
  array (
    'route' => '/Admin/fieldManager/:scope/:name',
    'method' => 'get',
    'params' => 
    array (
      'controller' => 'FieldManager',
      'action' => 'read',
      'scope' => ':scope',
      'name' => ':name',
    ),
  ),
  27 => 
  array (
    'route' => '/Admin/fieldManager/:scope',
    'method' => 'post',
    'params' => 
    array (
      'controller' => 'FieldManager',
      'action' => 'create',
      'scope' => ':scope',
    ),
  ),
  28 => 
  array (
    'route' => '/Admin/fieldManager/:scope/:name',
    'method' => 'put',
    'params' => 
    array (
      'controller' => 'FieldManager',
      'action' => 'update',
      'scope' => ':scope',
      'name' => ':name',
    ),
  ),
  29 => 
  array (
    'route' => '/Admin/fieldManager/:scope/:name',
    'method' => 'patch',
    'params' => 
    array (
      'controller' => 'FieldManager',
      'action' => 'update',
      'scope' => ':scope',
      'name' => ':name',
    ),
  ),
  30 => 
  array (
    'route' => '/Admin/fieldManager/:scope/:name',
    'method' => 'delete',
    'params' => 
    array (
      'controller' => 'FieldManager',
      'action' => 'delete',
      'scope' => ':scope',
      'name' => ':name',
    ),
  ),
  31 => 
  array (
    'route' => '/CurrencyRate',
    'method' => 'put',
    'params' => 
    array (
      'controller' => 'CurrencyRate',
      'action' => 'update',
    ),
  ),
  32 => 
  array (
    'route' => '/Attachment/file/:id',
    'method' => 'get',
    'params' => 
    array (
      'controller' => 'Attachment',
      'action' => 'file',
    ),
  ),
  33 => 
  array (
    'route' => '/:controller/:id',
    'method' => 'get',
    'params' => 
    array (
      'controller' => ':controller',
      'action' => 'read',
      'id' => ':id',
    ),
  ),
  34 => 
  array (
    'route' => '/:controller',
    'method' => 'get',
    'params' => 
    array (
      'controller' => ':controller',
      'action' => 'index',
    ),
  ),
  35 => 
  array (
    'route' => '/:controller',
    'method' => 'post',
    'params' => 
    array (
      'controller' => ':controller',
      'action' => 'create',
    ),
  ),
  36 => 
  array (
    'route' => '/:controller/:id',
    'method' => 'put',
    'params' => 
    array (
      'controller' => ':controller',
      'action' => 'update',
      'id' => ':id',
    ),
  ),
  37 => 
  array (
    'route' => '/:controller/:id',
    'method' => 'patch',
    'params' => 
    array (
      'controller' => ':controller',
      'action' => 'patch',
      'id' => ':id',
    ),
  ),
  38 => 
  array (
    'route' => '/:controller/:id',
    'method' => 'delete',
    'params' => 
    array (
      'controller' => ':controller',
      'action' => 'delete',
      'id' => ':id',
    ),
  ),
  39 => 
  array (
    'route' => '/:controller/:id/stream',
    'method' => 'get',
    'params' => 
    array (
      'controller' => 'Stream',
      'action' => 'list',
      'id' => ':id',
      'scope' => ':controller',
    ),
  ),
  40 => 
  array (
    'route' => '/:controller/:id/posts',
    'method' => 'get',
    'params' => 
    array (
      'controller' => 'Stream',
      'action' => 'listPosts',
      'id' => ':id',
      'scope' => ':controller',
    ),
  ),
  41 => 
  array (
    'route' => '/:controller/:id/subscription',
    'method' => 'put',
    'params' => 
    array (
      'controller' => ':controller',
      'id' => ':id',
      'action' => 'follow',
    ),
  ),
  42 => 
  array (
    'route' => '/:controller/:id/subscription',
    'method' => 'delete',
    'params' => 
    array (
      'controller' => ':controller',
      'id' => ':id',
      'action' => 'unfollow',
    ),
  ),
  43 => 
  array (
    'route' => '/:controller/:id/:link',
    'method' => 'get',
    'params' => 
    array (
      'controller' => ':controller',
      'action' => 'listLinked',
      'id' => ':id',
      'link' => ':link',
    ),
  ),
  44 => 
  array (
    'route' => '/:controller/:id/:link',
    'method' => 'post',
    'params' => 
    array (
      'controller' => ':controller',
      'action' => 'createLink',
      'id' => ':id',
      'link' => ':link',
    ),
  ),
  45 => 
  array (
    'route' => '/:controller/:id/:link',
    'method' => 'delete',
    'params' => 
    array (
      'controller' => ':controller',
      'action' => 'removeLink',
      'id' => ':id',
      'link' => ':link',
    ),
  ),
);
?>