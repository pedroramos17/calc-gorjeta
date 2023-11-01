<?php
    require_once 'Bill.php';

    
    $value = $_POST['acc-value'];
    $quality = $_POST['service-quality'];
    
    $bill = new Bill();
    if(isset($value) && isset($quality)) {
        $bill->setValue($value);
        $bill->setQuality($quality);
    }

    
	$tipValue = $bill->calculateBill($bill);
	$totalValue = $bill->totalValue($bill);
    
    session_start();
    $_SESSION['tipValue'] = $tipValue;
    $_SESSION['totalValue'] = $totalValue;

    
    header('Location: /');
 