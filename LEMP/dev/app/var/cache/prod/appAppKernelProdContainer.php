<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXqDyhy1\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXqDyhy1/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerXqDyhy1.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerXqDyhy1\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerXqDyhy1\appAppKernelProdContainer([
    'container.build_hash' => 'XqDyhy1',
    'container.build_id' => '7d55e49b',
    'container.build_time' => 1710598042,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXqDyhy1');
