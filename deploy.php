<?php
namespace Deployer;

require 'recipe/symfony.php';

// Config

set('repository', 'https://github.com/keshancs/test.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('localhost')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/test');

// Hooks

after('deploy:failed', 'deploy:unlock');
