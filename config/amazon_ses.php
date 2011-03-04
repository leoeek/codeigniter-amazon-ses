<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Config for the Amazon Simple Email Service library
 *
 * @see ../libraries/Amazon_ses.php
 */

// Amazon credentials
$config['amazon_ses_secret_key'] = '';
$config['amazon_ses_access_key'] = '';

// Adresses
$config['amazon_ses_from'] = '';
$config['amazon_ses_reply_to'] = '';

// Path to certificate to verify SSL connection (i.e. 'certs/cacert.pem') 
$config['amazon_ses_cert_path'] = '';