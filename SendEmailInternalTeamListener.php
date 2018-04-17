<?php
namespace AcmeApp;


class SendEmailInternalTeamListener
{
	public function send(OrderDiscartedEvent $event)
	{
		echo "SendEmailInternalTeamListener: Entrando en el listener" . PHP_EOL;


		// Función que representa que hace el envío al chat interno
		echo "[x] Sending email to internal team! Purchase cancelled: " . $event->getOrder()->getProductName() . PHP_EOL;


		echo "SendEmailInternalTeamListener: función ejecutada!" . PHP_EOL;
	}

}