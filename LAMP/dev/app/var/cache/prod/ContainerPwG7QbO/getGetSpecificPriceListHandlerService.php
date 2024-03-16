<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\QueryHandler\GetSpecificPriceListHandler' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\SpecificPrice\\QueryHandler\\GetSpecificPriceListHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\QueryHandler\GetSpecificPriceListHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\SpecificPrice\\Repository\\SpecificPriceRepository'] ?? $this->load('getSpecificPriceRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Attribute\\Repository\\AttributeRepository'] ?? $this->load('getAttributeRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Product\\Combination\\NameBuilder\\CombinationNameBuilderInterface'] ?? $this->load('getCombinationNameBuilderInterfaceService.php')));
