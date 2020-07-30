# Qnlive

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

基于七牛直播官方 SDK 封装的 Laravel 扩展

## 安装

Via Composer

```bash
$ composer require pinweb/qnlive
```

## 使用

#### 引用

```php
use Pinweb\Qnlive;
```

#### 创建流

```php
Qnlive::hub()->create($stream);
```

#### 流信息

```php
Qnlive::hub()->stream($stream)->info();
```

#### 启用流

```php
Qnlive::hub()->stream($stream)->enable();
```

#### 禁用流

```php
Qnlive::hub()->stream($stream)->disable();
```

#### 获取推流地址

```php
Qnlive::pushUrl($stream);
```

#### 获取播放地址

```php
Qnlive::playUrl($stream);
```

更多使用方法参见[官方 SDK](https://github.com/pili-engineering/pili-sdk-php.v2)

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

```bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email atan@pinweb.io instead of using the issue tracker.

## Credits

-   [atan][link-author]
-   [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pinweb/qnlive.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pinweb/qnlive.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pinweb/qnlive/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield
[link-packagist]: https://packagist.org/packages/pinweb/qnlive
[link-downloads]: https://packagist.org/packages/pinweb/qnlive
[link-travis]: https://travis-ci.org/pinweb/qnlive
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/pinweb
[link-contributors]: ../../contributors
