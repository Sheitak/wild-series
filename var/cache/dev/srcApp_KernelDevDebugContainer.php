<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCzBYtRz\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCzBYtRz/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCzBYtRz.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCzBYtRz\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerCzBYtRz\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'CzBYtRz',
    'container.build_id' => 'eddd444a',
    'container.build_time' => 1575990922,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCzBYtRz');
