- [![Starts](https://img.shields.io/github/stars/laravelir/cacheable?style=flat&logo=github)](https://github.com/laravelir/cacheable/forks)
- [![Forks](https://img.shields.io/github/forks/laravelir/cacheable?style=flat&logo=github)](https://github.com/laravelir/cacheable/stargazers)
  [![Total Downloads](https://img.shields.io/packagist/dt/laravelir/cacheable.svg?style=flat-square)](https://packagist.org/packages/laravelir/cacheable)


# laravelir/cacheable

laravel cacheable

### Installation

1. Run the command below to add this cacheable:

```
composer require laravelir/cacheable
```

2. Open your config/app.php and add the following to the providers/aliases array:

provider:
```php
Laravelir\Cacheable\Providers\CacheableServiceProvider::class,
```

alias:
```php
Laravelir\Cacheable\Facades\Cacheable::class,
```

1. Run the command below to install the package:

```
php artisan cacheable:install
```


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [miladimos](https://github.com/miladimos)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
