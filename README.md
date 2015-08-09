Botan API for Yii2
================
This extension is the way to integrate [iprit/botan-php](https://packagist.org/packages/iprit/botan-php) wrapper with your Yii2 application.

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/). 

 To install, either run
 ```
 $ composer require sonko-dmitry/yii2-botan:*
 ```
 or add
 ```
 "sonko-dmitry/yii2-botan": "*"
 ```
 to the `require` section of your `composer.json` file.


Usage
-----
0. Add the component configuration in your *global* `main.php` config file:
 ```php
 'components' => [
     'botan' => [
         'class' => 'SonkoDmitry\Yii\Botan\Component',
         'token' => 'YOUR_YANDEX_APPMETRIKA_TOKEN',
     ],
 ],
 ```

0. Now you can use component
 ```php
 \Yii::$app->botan->track(123, ['text' => 'Hello world!'], 'Message');
 ```
 Where 123 unique customer ID, for example chat_id or sender_id