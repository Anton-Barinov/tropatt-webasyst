<?php
/**
 * Webasyst plugin manifest for Shop-Script.
 */

return array(
    'name' => 'TropaTT CRM — шлюз интернет-магазина',
    'description' => 'Двусторонняя синхронизация заказов, покупателей и статусов между Shop-Script (Webasyst) и TropaTT CRM.',
    'version' => '1.0.0',
    'vendor' => 'Anton Barinov',
    'img' => 'img/tropatt.png',
    'rights' => true,
    'handlers' => array(
        // A new order and every workflow action on it are pushed to the CRM.
        'order_action.create' => 'orderActionCreate',
        'order_action.*' => 'orderActionUpdate',
    ),
);
