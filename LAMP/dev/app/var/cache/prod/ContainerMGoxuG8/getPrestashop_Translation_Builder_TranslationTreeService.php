<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.translation.builder.translation_tree' shared service.

return $this->services['prestashop.translation.builder.translation_tree'] = new \PrestaShop\PrestaShop\Core\Translation\Builder\TranslationsTreeBuilder(($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')), ($this->services['prestashop.translation.builder.translation_catalogue'] ?? $this->load('getPrestashop_Translation_Builder_TranslationCatalogueService.php')));
