<?php
/**
 * Get the base path
 *
 * @param string $path
 * @return string
 */

//basepath untuk define terus path supaya mudah dan clean code
  function basePath($path = ''){
    // inspect($path);
     return __DIR__ . '/' . $path;
  }


/**
 * Load a view
 *
 * @param string $name
 * @return void
 */

function loadView($name, $data = [])
{
    //so dia tak perlu repeat require basePath('views/{$name}.php');
    $viewPath = basePath("views/{$name}.php");

    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        // require basePath("views/404.php"); kalau nak return error page
        echo "View '{$name} not found!'";
    }
}

/**
 * Load a partials
 *
 * @param string $name
 * @return void
 */

function loadPartial($name)
{
    //so dia tak perlu repeat require basePath('views/partials/{$name}.php');
    $partialPath = basePath("views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        // require basePath("views/404.php"); kalau nak return error page
        echo "Partial '{$name} not found!'";
    }
}

/**
 * Inspect a value(s)
 *
 * @param mixed $value
 * @return void
 */

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

/**
 * Inspect a value(s) and die
 *
 * @param mixed $value
 * @return void
 */

function inspectAndDie($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

/**
 * Format salary
 *
 * @param int $salary
 * @return string Formatted Salary
 */

function formatSalary($salary)
{
    return 'RM' . number_format(floatval($salary));
}