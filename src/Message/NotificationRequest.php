<?php
/**
 * FreeKassa driver for Omnipay PHP payment library
 *
 * @link      https://github.com/hiqdev/omnipay-freekassa
 * @package   omnipay-freekassa
 * @license   MIT
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace Omnipay\FreeKassa\Message;

/**
 * FreeKassa Notification Request.
 * 
 * http://www.free-kassa.ru/docs/api.php#step3
 */
class NotificationRequest extends AbstractRequest
{
	/**
	 * Send the request with specified data.
	 *
	 * @param mixed $data The data to send
	 *
	 * @return NotificationResponse
	 */
	public function sendData( $data )
	{
		return $this->response = new NotificationResponse( $this, $data );
	}

}
