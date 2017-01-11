<?php
use Sami\Sami;
use Sami\Parser\Filter\TrueFilter;
use Sami\RemoteRepository\GitHubRemoteRepository;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in($sourcePath = __DIR__ . '/../src');

$sami = new Sami($iterator, array(
    'title' => 'Rovereti SDK',
    'theme' => 'default',
    'build_dir' => __DIR__ . '/../build/rovereti-sdk',
    'cache_dir' => __DIR__ . '/../cache/rovereti-sdk',
    'simulate_namespaces' => true,
    'default_opened_level' => 2,
    //'remote_repository' => new GitHubRemoteRepository('moveissimonetti/rovereti-sdk', dirname($sourcePath)),
));

$sami['filter'] = function () {
    return new TrueFilter();
};

return $sami;