<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDq5hbf3\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDq5hbf3/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerDq5hbf3.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerDq5hbf3\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerDq5hbf3\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Dq5hbf3',
    'container.build_id' => 'b3520216',
    'container.build_time' => 1522068898,
));