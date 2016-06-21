# localization_smart
localization smart php

# code
```php
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
```

# tags
```php
$lang = new lang('{T|','}');
```
You can change

Specify the name of the key array translation file json {T|name}

Place the object at the beginning of the code or the part to be changed
And a function set at the end of the code or the part to be changed

#function set
```php
$lang->set('langs/','ar');
```
1. Specify the translation file path
2. File Name Translation
