<?php

namespace AcmeApp;

use Symfony\Component\EventDispatcher\Event;

class OrderDiscartedEvent extends Event
{
	const NAME = 'order.discarted';

	protected $order;

	public function __construct(Order $order)
	{
		$this->order = $order;
	}

	public function getOrder()
	{
		return $this->order;
	}
}