<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.bundle.form.admin.configure.shop_parameters.order_states.order_state' shared service.

return $this->services['prestashop.bundle.form.admin.configure.shop_parameters.order_states.order_state'] = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\OrderStates\OrderStateType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['prestashop.core.mail_template.theme_folder_catalog'] ?? $this->load('getPrestashop_Core_MailTemplate_ThemeFolderCatalogService.php')), ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));
