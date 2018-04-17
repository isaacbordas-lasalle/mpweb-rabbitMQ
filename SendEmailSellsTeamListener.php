<?php
namespace AcmeApp;


class SendEmailSellsTeamListener
{
	public function send(OrderPlacedEvent $event)
	{
		echo "SendEmailSellsTeamListener: Entrando en el listener" . PHP_EOL;


		// Función que representa que hace el envío al chat interno
		echo "[x] Sending email to sells team! New purchase of " . $event->getOrder()->getProductName() . PHP_EOL;


		echo "SendEmailSellsTeamListener: función ejecutada!" . PHP_EOL;
	}

}