<?php
    http_response_code(200);

    require __DIR__ .  '/vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("TEST-5904333508484678-062618-d0c6bacd170d4e658c10707a619dcc97-191741467");

    $myfile = fopen("info.txt", "w") or die("Unable to open file!");
    $txt = json_encode($_REQUEST);
    fwrite($myfile, $txt);
    fclose($myfile);

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
    }
?>