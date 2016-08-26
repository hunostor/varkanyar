<?php 
 
/**
 * A spamot elozi meg kulonfele eljarasokkal
 */
class Policy
{
	private $sentCookieName = 'policy_message_sent';

	private $timeMessageCookieName = 'policy_message_diff';

	private $message;

	public function setCookieIfMessageSent()
	{
		// 20 percre ballit egy cookiet (1200) = 20 perc
 		setcookie($this->sentCookieName, 'true', time() + 60); // 1200 = 20 min	}
	}

	public function checkCookie()
	{
		if (isset($_COOKIE[$this->sentCookieName])) {
			return true;
		} else {
			return false;
		}
	}

	// private function setTimeMessageCookie($message)
	// {
	// 	// 1 napra ballit egy cookiet (1200) = 20 perc
 // 		setcookie($this->timeMessageCookieName, $this->message, time() + 60); // 1200 = 20 min	}
	// }

	// public function diffMessage($string)
	// {

	// }
}