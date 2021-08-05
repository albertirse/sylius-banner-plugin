# Sylius Banner Plugin
Add banner functionality to your store.

## Installation

### Download the plugin via composer

```bash
composer require albertirse/banner-plugin
 or
composer require albertirse/banner-plugin:dev-master
```

### Enable the plugin
Register the plugin by adding it to your `config/bundles.php` file

```php
<?php

return [
    // ...
    Albertirse\SyliusBannerPlugin\AlbertirseSyliusBannerPlugin::class => ['all' => true],
];
```

### Configure the plugin

```bash
composer run-script post-install-cmd -d ./vendor/albertirse/banner-plugin
```

### Update your database

```bash
$ bin/console doctrine:migrations:diff
$ bin/console doctrine:migrations:migrate
```



### Install assets & clear cache

```bash
$ bin/console assets:install
$ bin/console cache:clear
```
## Usage

##### 1. Create a banner from the admin.

+ `code`: Banner code
+ `template`: Template used for render.


### Remove plugin

```bash
composer run-script remove-cmd -d ./vendor/albertirse/banner-plugin

composer remove albertirse/banner-plugin
```


## TODO
