<?php
  App::uses('Component','Controller');
  class AuthorizeNetComponent extends Component {
      public function chargeCard($loginId,$transKey,$transaction_type=null,$apiVersion=null,$ccNum,$ccExpMonth,$ccExpYear,$ccCode=null,$isTest=null,$amount,$tax,$shipping,$desc,$billingInfo,$email,$phone,$fax,$shippingInfo,$customerId,$customerIp,$invoiceNum)
      {
          // Setup vars
          $ccexp = $ccExpMonth . '/' . $ccExpYear;          
          $debugging = 1; // display additional information to resolve problems
          if(!$transaction_type) {
              $transaction_type = "AUTH_CAPTURE"; // set default to auth_capture if no trans type is provided
          }
          if($isTest)
          {
              $isTest = 1;
          }
          else
          {
              $isTest = 0;
          }
          if(!$apiVersion)
          {
              $apiVersion = '3.1'; // set to default to version 3.1 if a version is not provided              
          }
          
          // Set API URL
          $authNetUrl = 'https://test.authorize.net/gateway/transact.dll '; // Development
          // Uncomment the line above and comment out the line below if you wish to submit
          // the request through the development site rather than the live production site.
          //$authNetUrl = 'https://secure.authorize.net/gateway/transact.dll '; // Production
          
          
          // Set AuthNet Vars
          $authNetArray = array(
            // required
            'x_login'               => $loginId,
            'x_tran_key'            => $transKey,
            'x_type'                => $transaction_type, // AUTH_CAPTURE,AUTH_ONLY, or CAPTURE_ONLY
            'x_amount'              => $amount,  // up to 16 digits with decimal without currancy symbol
            'x_card_num'         => $ccNum, // numeric between 13 and 16 digits without spaces
            'x_exp_date'            => $ccexp, // Expiration date in MMYY,MM/YY,MM-YY,MMYYYY,MM/YYYY or MM-YYYY format
            'x_relay_response'      => false, // set false for AIM, used only by SIM applications
            'x_delim_data'          => true, // required true for AIM
            'x_version'             => $apiVersion,
            'x_method'              => 'CC',            
            // optional
            'x_allow_partial_Auth'  => '',
            'x_card_code'           => $ccCode,
            'x_test_request'        => $isTest,
            'x_duplicate_window'    => '', // value between 0 and 28800 (no comma)
            'x_invoice_num'         => $invoiceNum,
            'x_description'         => $desc,
            'x_first_name'          => $billingInfo['first_name'],
            'x_last_name'           => $billingInfo['last_name'],
            'x_company'             => $billingInfo['company']            ,
            'x_address'             => $billingInfo['address'],
            'x_city'                => $billingInfo['city'],
            'x_state'               => $billingInfo['state'],
            'x_zip'                 => $billingInfo['zip'],
            'x_country'             => $billingInfo['country'],  // up to 60 chars, no symbols
            'x_phone'               => $phone,
            'x_fax'                 => $fax,
            'x_email'               => $email,
            'x_cust_id'             => $customerId,
            'x_customer_ip'         => $customerIp,
            'x_ship_to_fist_name'   => $shippingInfo['first_name'],
            'x_ship_to_last_name'   => $shippingInfo['last_name'],
            'x_ship_to_company'     => $shippingInfo['company'],
            'x_ship_to_address'     => $shippingInfo['address'],
            'x_ship_to_city'        => $shippingInfo['city'],
            'x_ship_to_state'       => $shippingInfo['state'],
            'x_ship_to_zip'         => $shippingInfo['zip'],
            'x_ship_to_country'     => $shippingInfo['country'],
            'x_tax'                 => $tax,
            'x_freight'             => $shipping
          );
          
          // Configure cURL Send Fields
          $sendFields = '';
          foreach($authNetArray as $key=>$value)
          {
              $sendFields .= "$key=".urlencode($value).'&';
          }
          
          // Send the cURL request
          $ch = curl_init();
          curl_setopt($ch,CURLOPT_HEADER,0); // set to 0 to eliminate header from response
          curl_setopt($ch,CURLOPT_URL,$authNetUrl);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // set to 1 to return the response
          curl_setopt($ch, CURLOPT_POST,1);
          curl_setopt($ch, CURLOPT_POSTFIELDS, rtrim($sendFields,'& '));
          $response = curl_exec($ch);
          
          return explode(',',$response);
          
                  
      }
  }
?>
