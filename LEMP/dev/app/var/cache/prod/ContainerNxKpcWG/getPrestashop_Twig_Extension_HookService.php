<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.twig.extension.hook' shared service.

return $this->services['prestashop.twig.extension.hook'] = new \PrestaShopBundle\Twig\HookExtension(($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->services['prestashop.adapter.data_provider.module'] ?? $this->getPrestashop_Adapter_DataProvider_ModuleService()), ((($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->employee) ? (($this->services['prestashop.core.admin.module.repository'] ?? $this->getPrestashop_Core_Admin_Module_RepositoryService())) : (null)));
