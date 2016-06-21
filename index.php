<?php
include'class.localization_smart.php';
$lang = new lang('{T|','}');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{T|site} {T|title_page}</title>
</head>
<body>
    <h1>{T|name}</h1>
    <h2>{T|job}</h2>
</body>
</html>
<?php
$lang->set('langs/','ar');
?>