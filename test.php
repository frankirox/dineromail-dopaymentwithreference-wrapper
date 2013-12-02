<?php

require("DineroMailAction.php");

/*Capture Buyer*/

$buyer = new DineroMailBuyer();
$buyer->setName("Jhon");
$buyer->setLastName("Doe");
$buyer->setAddress("San Diego");
$buyer->setCountry("United States");
$buyer->setEmail("jhon@doe.com");
$buyer->setPhone("45556565");

/* Capture Items */

$item1 = new DineroMailItem();
$item1->setCode("A001");
$item1->setName("LCD MONITOR");
$item1->setDescription("this is a LCD Monitor");
$item1->setQuantity(2);
$item1->setAmount(10.40);
$item1->setCurrency(DINEROMAIL_DEFAULT_CURRENCY);

$item2 = new DineroMailItem();
$item2 = new DineroMailItem();
$item2->setCode("A002");
$item2->setName("LED MONITOR");
$item2->setDescription("this is a LED Monitor");
$item2->setQuantity(1);
$item2->setAmount(40.40);
$item2->setCurrency(DINEROMAIL_DEFAULT_CURRENCY);

$items = array ($item1, $item2);


/* Execute transaction */

$transactionId = time();
$transaction = new DineroMailAction();
$transaction->doPaymentWithReference($items, $buyer,$transactionId);

