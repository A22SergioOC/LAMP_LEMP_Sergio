<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.data_provider.warehouse' shared service.

@trigger_error('The "prestashop.adapter.data_provider.warehouse" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

return $this->services['prestashop.adapter.data_provider.warehouse'] = new \PrestaShop\PrestaShop\Adapter\Warehouse\WarehouseDataProvider();
