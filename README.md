# Installations

Follow this command to install this package

```
composer require izyanzz/routers
```

- [How To Usage?](https://github.com/izyanzz/router#Usage)


# Usage

```
<?php

include "vendor/izyanzz/routers/src/Route/Route.php";
use Axos\Route;

Route::get('/', function() {
    echo "Hello, world";
});

Route::dispatch[$_SERVER["REQUEST_URI"]];

?>
```
