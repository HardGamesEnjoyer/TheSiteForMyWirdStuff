<?php

final class DiscordWebhook
{
	private $msg;
	private $url;
	private $username;
	private $avatar;

	public function __construct(
		string $msg;
		string $url = null;
		string $username = null;
		string $avatar = null;
	)
	{
		$this->msg = $msg;
		$this->url = $url ?? 'https://discord.com/api/webhooks/1245077176894750772/H9y932xOJda6NHitm_HfUjM8-DJSWbg24SUSzwbo86eH4WCwGGXUYlnqRR0CPonqCDuq';
		$this->username = $username ?? 'Deadpool's website';
		$this->avatar = $avatar ?? 'https://i.pinimg.com/564x/d6/0d/a1/d60da1ea1170225b884ac1f37820e90b.jpg';
	}

	public function send(): void
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_TIMEOUT, 5);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($curl, CURLOPT_URL, $this->url);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode([
			'content' => $this->msg,
			'username' => $this->username,
			'avatar' => $this->avatar
		));
		$output = json_decode(
			curl_exec($curl), 
			true
		);
		if(curl_getinfo($curl, CURLINFO_HTTP_CODE) != 204) {
			curl_close($curl);
			throw new Exception("Błąd podczas przesyłania wiadomości do Discorda: " . $output['message']);
		}
		curl_close($curl);
	}
}

?>