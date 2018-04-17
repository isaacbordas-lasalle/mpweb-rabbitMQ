<?php

require_once('./vendor/autoload.php');

use AcmeApp\OrderPlacedEvent;
use AcmeApp\OrderDiscartedEvent;
use AcmeApp\SendEmailClientListener;
use AcmeApp\SendEmailSellsTeamListener;
use AcmeApp\SendEmailInternalTeamListener;
use Symfony\Component\EventDispatcher\EventDispatcher;

use AcmeApp\Order;

$dispatcher = new EventDispatcher();

$clientListener    = new SendEmailClientListener();
$sellsTeamListener = new SendEmailSellsTeamListener();
$internalTeamListener = new SendEmailInternalTeamListener();

$dispatcher->addListener(OrderPlacedEvent::NAME, [$clientListener, 'send']);
$dispatcher->addListener(OrderPlacedEvent::NAME, [$sellsTeamListener, 'send']);
$dispatcher->addListener(OrderDiscartedEvent::NAME, [$internalTeamListener, 'send']);

$order1 = new Order("Nexus 5", $dispatcher);
$order1->place();

echo PHP_EOL . PHP_EOL;

$order1->discard();