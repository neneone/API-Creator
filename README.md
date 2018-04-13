# [API-Creator](https://github.com/Neneone/API-Creator)
A simple way to create APIs.

---
## Menù:
* [Requirements](#requirements)
* [Getting started](#getting-started)
* [Methods](#methods)
* [Example code](https://github.com/TRIGGEREDNICK/API-Creator/blob/master/example.php)
---
## Requirements
* PHP 5.6, or higher
* PHP-JSON extension
* Webserver
* Composer
---
## Getting Started
You need only a thing, this repo!
```bash
$ git clone https://github.com/TRIGGEREDNICK/API-Creator
$ cd API-Creator
```
Okay, now start coding:
```php
require_once __DIR__.'/vendor/autoload.php';

$array = ['ok' => true]; //see 'construct' on methods
$API = new neneone\apicreator\API($array);
```
---
## Methods
|Method|Required|Returns|Description|Ex. Usage|
|------|--------|-------|-----------|---------|
|construct|Yes|NULL|The instance, the initial array|`$API = new neneone\apicreator\API(['ok' => true]);`|
|set|Optional|NULL|Set an array|`$obj->set(['done' => true]);`|
|run|Yes|JSON Encoded Array|Create the JSON encoded array|`$obj->run()`|
