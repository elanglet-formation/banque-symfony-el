<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDl5Ncll\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDl5Ncll/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDl5Ncll.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDl5Ncll\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDl5Ncll\App_KernelDevDebugContainer([
    'container.build_hash' => 'Dl5Ncll',
    'container.build_id' => '8dcc41c1',
    'container.build_time' => 1631178967,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDl5Ncll');
