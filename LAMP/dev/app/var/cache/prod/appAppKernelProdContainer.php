<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPwG7QbO\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPwG7QbO/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerPwG7QbO.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerPwG7QbO\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerPwG7QbO\appAppKernelProdContainer([
    'container.build_hash' => 'PwG7QbO',
    'container.build_id' => '105981b6',
    'container.build_time' => 1710604549,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPwG7QbO');
