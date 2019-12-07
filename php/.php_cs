<?php
$year = date('Y');
$header = "";
$finder = PhpCsFixer\Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('vendor')
    ->in(__DIR__)
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);
;
$fixers = array(
    '@PSR2' => true,
    'binary_operator_spaces'    => array('align_equals' => true,'align_double_arrow' => true), //等号 => 对齐   symfony是不对齐的
);
return PhpCsFixer\Config::create()
    ->setRules($fixers)
    ->setFinder($finder)
    ->setUsingCache(false);
