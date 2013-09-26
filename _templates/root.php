<?php

require_once __DIR__ . '/../lib/Symfony/Component/HttpFoundation/Request.php';
require_once __DIR__ . '/../lib/Symfony/Component/HttpFoundation/ParameterBag.php';
require_once __DIR__ . '/../lib/Symfony/Component/HttpFoundation/FileBag.php';
require_once __DIR__ . '/../lib/Symfony/Component/HttpFoundation/ServerBag.php';
require_once __DIR__ . '/../lib/Symfony/Component/HttpFoundation/HeaderBag.php';

$request = Symfony\Component\HttpFoundation\Request::createFromGlobals();

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

return header(sprintf('Location: /3.8/%s', $section));
