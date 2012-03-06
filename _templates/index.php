<?php

require_once __DIR__ . '/../lib/Symfony/Component/HttpFoundation/Request.php';
require_once __DIR__ . '/../lib/Symfony/Component/HttpFoundation/ParameterBag.php';
require_once __DIR__ . '/../lib/Symfony/Component/HttpFoundation/FileBag.php';
require_once __DIR__ . '/../lib/Symfony/Component/HttpFoundation/ServerBag.php';
require_once __DIR__ . '/../lib/Symfony/Component/HttpFoundation/HeaderBag.php';

$request = Symfony\Component\HttpFoundation\Request::createFromGlobals();

$available_languages = array('fr', 'en');

switch ($request->get('section'))
{
  case 'Devel':
  case 'Contrib':
  case 'User':
  case 'Admin':
    $section = $request->get('section') . '/';
    break;
  default:
    $section = '';
    break;
}

foreach ($request->getLanguages() as $language)
{
  if (in_array($language, $available_languages))
  {
    return header(sprintf('Location: %s/%s', $language, $section));
  }
}

return header(sprintf('Location: fr/%s', $section));
