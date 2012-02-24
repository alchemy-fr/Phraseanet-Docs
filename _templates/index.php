<?php

/*
 * PHP 5.3 Code is temporary disabled

  require_once dirname(__FILE__) . '/../lib/Symfony/Component/HttpFoundation/Request.php';
  require_once dirname(__FILE__) . '/../lib/Symfony/Component/HttpFoundation/ParameterBag.php';
  require_once dirname(__FILE__) . '/../lib/Symfony/Component/HttpFoundation/FileBag.php';
  require_once dirname(__FILE__) . '/../lib/Symfony/Component/HttpFoundation/ServerBag.php';
  require_once dirname(__FILE__) . '/../lib/Symfony/Component/HttpFoundation/HeaderBag.php';

  $request = Symfony\Component\HttpFoundation\Request::createFromGlobals();

  foreach ($request->getLanguages() as $language)
  {
  if (in_array($language, $available_languages))
  {
  return header(sprintf('Location: /%s/', $language));
  }
  }

  return header('Location: /fr/');

 */

$available_languages = array('fr', 'en');

$section = '';

if (isset($_GET['section']))
{
  switch ($_GET['section'])
  {
    case 'Devel':
    case 'Contrib':
    case 'User':
    case 'Admin':
      $section = $_GET['section'] . '/';
      break;
    default:
      break;
  }
}

$languages = array();

foreach (splitHttpAcceptHeader($_SERVER['HTTP_ACCEPT_LANGUAGE']) as $lang => $q)
{
  if (strstr($lang, '-'))
  {
    $codes = explode('-', $lang);
    if ($codes[0] == 'i')
    {
      if (count($codes) > 1)
      {
        $lang = $codes[1];
      }
    }
    else
    {
      for ($i = 0, $max = count($codes); $i < $max; $i++)
      {
        if ($i == 0)
        {
          $lang = strtolower($codes[0]);
        }
        else
        {
          $lang .= '_' . strtoupper($codes[$i]);
        }
      }
    }
  }

  $languages[] = $lang;
}


foreach ($languages as $language)
{
  if (in_array($language, $available_languages))
  {
    return header(sprintf('Location: %s/%s', $language, $section));
  }
}

return header(sprintf('Location: fr/%s', $section));

function splitHttpAcceptHeader($header)
{
  $values = array();
  foreach (array_filter(explode(',', $header)) as $value)
  {
    if (preg_match('/;\s*(q=.*$)/', $value, $match))
    {
      $q = (float) substr(trim($match[1]), 2);
      $value = trim(substr($value, 0, -strlen($match[0])));
    }
    else
    {
      $q = 1;
    }

    if (0 < $q)
    {
      $values[trim($value)] = $q;
    }
  }

  arsort($values);
  reset($values);

  return $values;
}

