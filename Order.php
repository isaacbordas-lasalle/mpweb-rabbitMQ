<?php

namespace AcmeApp;


class Order
{
	/** @var string  */
	private $product_name;
	/** @var EventDispatcher  */
	private $dispatcher;

	/**
	 * Order constructor.
	 * @param string $product_name
	 * @param EventDispatcher $dispatcher
	 */
	public function __construct($product_name, $dispatcher)
	{
		$this->product_name = $product_name;
		$this->dispatcher   = $dispatcher;
	}


	public function place()
	{
		echo "Order: Haciendo la compra" . PHP_EOL;
		// Toda la funcionalidad para hacer la venta
		// ...
		//


		echo "Order: Publicando el evento de que ya se ha hecho la orden" . PHP_EOL;
		$event = new OrderPlacedEvent($this);
		$this->dispatcher->dispatch(OrderPlacedEvent::NAME, $event);

	}

	public function discard()
	{
		echo "Order: Descartando la compra" . PHP_EOL;
		// Toda la funcionalidad para hacer la venta
		// ...
		//

		// La orden se descarta, publica un evento notificando de este evento
                echo "Order: Publicando el evento de que se descarta la orden" . PHP_EOL;
		$event = new OrderDiscartedEvent($this);
		$this->dispatcher->dispatch(OrderDiscartedEvent::NAME, $event);
	}

	/**
	 * @return string
	 */
	public function getProductName()
	{
		return $this->product_name;
	}
}