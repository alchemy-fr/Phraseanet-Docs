<?php

require_once '../lib/Symfony/Component/HttpFoundation/Request.php';
require_once '../lib/Symfony/Component/HttpFoundation/ParameterBag.php';
require_once '../lib/Symfony/Component/HttpFoundation/FileBag.php';
require_once '../lib/Symfony/Component/HttpFoundation/ServerBag.php';
require_once '../lib/Symfony/Component/HttpFoundation/HeaderBag.php';

use Symfony\Component\HttpFoundation\Request;

$available_languages = array('fr', 'en');

$request = new Request();

if (null === $request->get('Accept-Language'))
{
  $request->headers->set('Accept-Language', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
}

foreach ($request->getLanguages() as $language)
{
  if (in_array($language, $available_languages))
  {
    return header(sprintf('Location: /%s/', $language));
  }
}

return header('Location: /fr/');
