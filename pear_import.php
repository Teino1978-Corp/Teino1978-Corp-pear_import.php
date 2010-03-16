<?php
/**
 * PEAR Class Loader for CakePHP
 * 
 * ex. pear_import('Net_DNS');
 * 
 * @param $className
 * @return boolean
 */
function pear_import($className) {
    $classPath = preg_replace('/_/', DS, $className) . '.php';
    return App::import('vendor', $className, array('file' => $classPath));
}

