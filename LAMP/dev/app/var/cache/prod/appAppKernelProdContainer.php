<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMwr3rso\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMwr3rso/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerMwr3rso.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerMwr3rso\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerMwr3rso\appAppKernelProdContainer([
    'container.build_hash' => 'Mwr3rso',
    'container.build_id' => '54d1f5c2',
    'container.build_time' => 1709903982,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMwr3rso');
