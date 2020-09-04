<?php
return array (
  'Common' => 
  array (
    'afterSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\AssignmentEmailNotification',
        'order' => 9,
      ),
      1 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Stream',
        'order' => 9,
      ),
      2 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Notifications',
        'order' => 10,
      ),
      3 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\StreamNotesAcl',
        'order' => 10,
      ),
      4 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\WebSocketSubmit',
        'order' => 20,
      ),
      5 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Webhook',
        'order' => 101,
      ),
    ),
    'beforeSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\CurrencyConverted',
        'order' => 1,
      ),
      1 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\NextNumber',
        'order' => 9,
      ),
      2 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Formula',
        'order' => 11,
      ),
    ),
    'beforeRemove' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Notifications',
        'order' => 10,
      ),
    ),
    'afterRemove' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Stream',
        'order' => 9,
      ),
      1 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Notifications',
        'order' => 10,
      ),
      2 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Webhook',
        'order' => 101,
      ),
    ),
    'afterRelate' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Stream',
        'order' => 9,
      ),
    ),
    'afterUnrelate' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Common\\Stream',
        'order' => 9,
      ),
    ),
  ),
  'Integration' => 
  array (
    'afterSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Integration\\GoogleMaps',
        'order' => 9,
      ),
    ),
  ),
  'Note' => 
  array (
    'beforeSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Note\\Mentions',
        'order' => 9,
      ),
    ),
    'afterSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Note\\Notifications',
        'order' => 14,
      ),
      1 => 
      array (
        'className' => '\\Espo\\Hooks\\Note\\WebSocketSubmit',
        'order' => 20,
      ),
    ),
  ),
  'Notification' => 
  array (
    'afterSave' => 
    array (
      0 => 
      array (
        'className' => '\\Espo\\Hooks\\Notification\\WebSocketSubmit',
        'order' => 20,
      ),
    ),
  ),
);
?>