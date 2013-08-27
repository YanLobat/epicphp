<meta charset = "UTF-8">
<?php
if (isset($_COOKIE['count'])) {
echo 'много хочешь сучечка';
} else {
echo 'джедай маздай';

setcookie('count', '1', time() + 6);
};
?>