<?php
/**
 * This file contains examples for using the MailTrillApi PHP-SDK.
 *
 * @author Muzammil Versiani <muzammil.versiani@mailtrill.com>
 * @link https://www.mailtrill.com/
 * @copyright 2018 http://www.mailtrill.com/
 */
 
// require the setup which has registered the autoloader
require_once dirname(__FILE__) . '/setup.php';

// CREATE THE ENDPOINT
$endpoint = new MailTrillApi_Endpoint_TransactionalEmails();

/*===================================================================================*/

// GET ALL ITEMS
$response = $endpoint->getEmails($pageNumber = 1, $perPage = 10);

// DISPLAY RESPONSE
echo '<pre>';
print_r($response->body);
echo '</pre>';

/*===================================================================================*/

// GET ONE ITEM
$response = $endpoint->getEmail('EMAIL-UNIQUE-ID');

// DISPLAY RESPONSE
echo '<hr /><pre>';
print_r($response->body);
echo '</pre>';

/*===================================================================================*/

// delete email
$response = $endpoint->delete('EMAIL-UNIQUE-ID');

// DISPLAY RESPONSE
echo '<hr /><pre>';
print_r($response->body);
echo '</pre>';

/*===================================================================================*/

// CREATE A NEW EMAIL
$response = $endpoint->create(array(
    'to_name'           => 'John Doe', // required
    'to_email'          => 'john@doe.com', // required
    'from_name'         => 'Jane Doe', // required
    'from_email'        => 'jane@doe.com', // optional
    'reply_to_name'     => 'Jane Doe', // optional
    'reply_to_email'    => 'jane@doe.com', // optional
    'subject'           => 'This is the email subject', // required
    'body'              => '<strong>Hello world!</strong>', // required
    'plain_text'        => 'Hello world!', // optional, will be autogenerated if missing
    'send_at'           => date('Y-m-d H:i:s'),  // required, UTC date time in same format!
));

// DISPLAY RESPONSE
echo '<hr /><pre>';
print_r($response->body);
echo '</pre>';

/*===================================================================================*/