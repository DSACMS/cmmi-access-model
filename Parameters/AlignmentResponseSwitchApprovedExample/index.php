<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://dsacms.github.io/cmmi-access-model/0.9.8/Parameters-AlignmentResponseSwitchApprovedExample.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://dsacms.github.io/cmmi-access-model/0.9.8/Parameters-AlignmentResponseSwitchApprovedExample.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://dsacms.github.io/cmmi-access-model/0.9.8/Parameters-AlignmentResponseSwitchApprovedExample.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://dsacms.github.io/cmmi-access-model/0.9.8/Parameters-AlignmentResponseSwitchApprovedExample.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://dsacms.github.io/cmmi-access-model/0.9.8/Parameters-AlignmentResponseSwitchApprovedExample.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://dsacms.github.io/cmmi-access-model/0.9.8/Parameters-AlignmentResponseSwitchApprovedExample.html');
else 
  Redirect('https://dsacms.github.io/cmmi-access-model/0.9.8/Parameters-AlignmentResponseSwitchApprovedExample.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
