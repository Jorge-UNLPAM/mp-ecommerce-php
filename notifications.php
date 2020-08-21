<?php

    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $myfile = fopen("info.txt", "w") or die("Unable to open file!");
        $txt = file_get_contents('php://input');
        fwrite($myfile, $txt);
        fclose($myfile);
    
        $myfile1 = fopen("info1.txt", "w") or die("Unable to open file!");
        $txt1 = json_encode($_REQUEST);
        fwrite($myfile1, $txt1);
        fclose($myfile1);

        http_response_code(200);

    } else {
        http_response_code(405);
    }
    
    /*
    switch($_POST["type"]) {
        case "payment":
            $payment = new MercadoPago\Payment();
            $data = $payment->find_by_id($_POST["id"]);

            break;
        case "plan":
            $plan = new MercadoPago\Plan();
            $data = $plan->find_by_id($_POST["id"]);

            break;
        case "subscription":
            $subscription = new MercadoPago\Subscription();
            $data = $subscription->find_by_id($_POST["id"]);

            break;
        case "invoice":
            $invoice = new MercadoPago\Invoice();
            $data = $invoice->find_by_id($_POST["id"]);

            break;
    }*/
?>