# [API-Creator](https://github.com/Neneone/API-Creator)
A simple way to create APIs.

## Index:
- [Requirements](#requirements)
- [Getting started](#getting-started)
- [Example code](https://github.com/TRIGGEREDNICK/API-Creator/blob/master/example.php)
- [Help & Support](#help)

## Requirements
- PHP >= 5.6
- PHP: ext-json
- Composer

## Getting Started
You need only a thing, this repo!
```bash
$ git clone https://github.com/TRIGGEREDNICK/API-Creator
$ cd API-Creator
```
Okay, now you can start coding:
```php
require_once __DIR__.'/vendor/autoload.php';

$array = ['ok' => true]; //see 'construct' on methods
$API = new TRIGGEREDNICK\ApiCreator\API($array);
```
See the example code [here](https://github.com/TRIGGEREDNICK/API-Creator/blob/master/example.php).

## Help
* Are there any errors? [Open an issue](https://github.com/TRIGGEREDNICK/API-Creator/issues).
* Would you fix something? [Open a pull request](https://github.com/TRIGGEREDNICK/API-Creator/pulls).
* Need other? [Contact me on Telegram](https://t.me/TRIGGEREDNICK).