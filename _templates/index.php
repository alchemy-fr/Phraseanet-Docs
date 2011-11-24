<?php

require_once dirname(__FILE__) . '/../lib/Symfony/Component/HttpFoundation/Request.php';
require_once dirname(__FILE__) . '/../lib/Symfony/Component/HttpFoundation/ParameterBag.php';
require_once dirname(__FILE__) . '/../lib/Symfony/Component/HttpFoundation/FileBag.php';
require_once dirname(__FILE__) . '/../lib/Symfony/Component/HttpFoundation/ServerBag.php';
require_once dirname(__FILE__) . '/../lib/Symfony/Component/HttpFoundation/HeaderBag.php';

use Symfony\Component\HttpFoundation\Request;

$available_languages = array('fr', 'en');

$request = Request::createFromGlobals();

foreach ($request->getLanguages() as $language)
{
  if (in_array($language, $available_languages))
  {
    return header(sprintf('Location: /%s/', $language));
  }
}

return header('Location: /fr/');
