# laravel-postgis-database

Provides an extended Postgres driver for Laravel 4 that provides support for PostGIS features.

# features

- Adds schema grammer for point
- Adds schema grammer for polygon

# install

## composer.json

Add a requirement for the package

```javascript
{
    "require": {
        "lamb/laravel-postgis-database": "dev-master"
    }
}
```

## config/app.php

Add it to the list of providers

```php
'providers' => array(
  'Lamb\LaravelPostgisDatabase\PostgisServiceProvider'
)
```

## config/database.php

Add a connection using the postgis driver instead of pgsql

```php
  'pgsql' => array(
    'driver'   => 'postgis',
    'host'     => 'localhost',
    'database' => 'database',
    'username' => 'root',
    'password' => '',
    'charset'  => 'utf8',
    'prefix'   => '',
    'schema'   => 'public',
  ),
```

# license

Released under the [MIT license](http://opensource.org/licenses/MIT)
