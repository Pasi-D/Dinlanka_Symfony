<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLoq6uyk\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLoq6uyk/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerLoq6uyk.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerLoq6uyk\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerLoq6uyk\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Loq6uyk',
    'container.build_id' => '68087ba5',
    'container.build_time' => 1524727072,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerLoq6uyk');
