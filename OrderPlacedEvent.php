<?php

namespace AcmeApp;

use Symfony\Component\EventDispatcher\Event;

class OrderPlacedEvent extends Event
{
	const NAME = 'order.placed';

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