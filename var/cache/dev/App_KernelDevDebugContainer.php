<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7LlCP4v\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7LlCP4v/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7LlCP4v.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7LlCP4v\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7LlCP4v\App_KernelDevDebugContainer([
    'container.build_hash' => '7LlCP4v',
    'container.build_id' => '56a8181c',
    'container.build_time' => 1689843521,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7LlCP4v');
