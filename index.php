require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function () {
    return 'This is a test';
});

$app->get('/goodbye', function () {
    return 'This is a test';
});

// @codeCoverageIgnoreStart
if (PHP_SAPI != 'cli') {
    $app->run();
}
// @codeCoverageIgnoreEnd

return $app;
