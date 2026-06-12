<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://dsacms.github.io/cmmi-access-model/0.9.12/QuestionnaireResponse-PROMISPainInterferenceSFExample.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://dsacms.github.io/cmmi-access-model/0.9.12/QuestionnaireResponse-PROMISPainInterferenceSFExample.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://dsacms.github.io/cmmi-access-model/0.9.12/QuestionnaireResponse-PROMISPainInterferenceSFExample.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://dsacms.github.io/cmmi-access-model/0.9.12/QuestionnaireResponse-PROMISPainInterferenceSFExample.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://dsacms.github.io/cmmi-access-model/0.9.12/QuestionnaireResponse-PROMISPainInterferenceSFExample.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://dsacms.github.io/cmmi-access-model/0.9.12/QuestionnaireResponse-PROMISPainInterferenceSFExample.html');
else 
  Redirect('https://dsacms.github.io/cmmi-access-model/0.9.12/QuestionnaireResponse-PROMISPainInterferenceSFExample.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
