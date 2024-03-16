<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\Image\Update\ProductImageUpdater' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Update\\ProductImageUpdater'] = new \PrestaShop\PrestaShop\Adapter\Product\Image\Update\ProductImageUpdater(($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Uploader\\ProductImageUploader'] ?? $this->load('getProductImageUploaderService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Grid\\Position\\PositionUpdateFactory'] ?? $this->load('getPositionUpdateFactoryService.php')), ($this->services['prestashop.core.grid.image.position_definition'] ?? $this->load('getPrestashop_Core_Grid_Image_PositionDefinitionService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Grid\\Position\\GridPositionUpdater'] ?? $this->load('getGridPositionUpdaterService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Repository\\ProductImageRepository'] ?? $this->load('getProductImageRepositoryService.php')));