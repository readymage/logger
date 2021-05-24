<?php
/**
 * ReadyMage_Logger
 *
 * @category    ReadyMage
 * @package     ReadyMage_Logger
 * @author      Ricards Rikmanis <ricards@scandiweb.com | info@scandiweb.com>
 * @copyright   Copyright (c) 2021 Scandiweb, Ltd (https://scandiweb.com)
 */

use \Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'ReadyMage_Logger',
    __DIR__
);
