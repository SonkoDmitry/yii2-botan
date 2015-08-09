<?php
namespace SonkoDmitry\Yii\Botan;

use IPRIT\BotanSDK\Botan;
use Yii;
use Exception;
use \yii\base\Configurable;

/**
 * Component for botan api
 *
 * @package SonkoDmitry\TelegramBot\Api
 */
class Component extends Botan implements Configurable
{
	/**
	 * Yandex appmetrika application token
	 *
	 * @var string
	 */
	public $token;

	public function __construct($config = [])
	{
		if (!empty($config)) {
			Yii::configure($this, $config);
		}

		if (empty($this->token)) {
			throw new Exception('Botan api token cannot be empty');
		}

		parent::__construct($this->token);
	}
}