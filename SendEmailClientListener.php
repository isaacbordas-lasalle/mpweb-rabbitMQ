<?php

namespace AcmeApp;

class SendEmailClientListener
{
	public function send(OrderPlacedEvent $event)
	{
		echo "SendEmailClientListener: Entrando en el listener" . PHP_EOL;


		// Función que representa que hace el envío del correo electrónico
		echo "[x] Sending email to a client for the purchase of " . $event->getOrder()->getProductName()  . PHP_EOL;


		echo "SendEmailClientListener: función ejecutada!" . PHP_EOL;
	}
}