<?php 

use Wilkques\LINE\LINE;

require_once __DIR__ . '/vendor/autoload.php';

$line = new LINE('2006526803');
$url = $line->generateLoginUrl([
    'https://select2web.com/messaging-api/line-callback.php',
    [
        'profile', 'openid', 'email'
    ]
]);

?>
<style>
    a {
        display: block;
        width: 128px;
        background: url(https://upload.wikimedia.org/wikipedia/commons/4/41/LINE_logo.svg);
        background-size: contain;
        background-repeat: no-repeat;
        padding-left: 26px;
        background-color: #06C755;
        padding: 5px 5px;
        padding-left: 30px;
        border-radius: 2px;
        text-decoration: none;
        color: white;
    }
</style>
<?php 

echo '<a href="' . $url . '">Login with LINE</a>';
