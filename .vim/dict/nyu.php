<?php
$keywords = array(
    'if', 'else', 'elseif', 'endif', 'while', 'endwhile', 'do', 'as', 'for', 'endfor', 'foreach', 'endforeach',
    'break', 'continue', 'switch', 'endswitch', 'case', 'default', 'declare', 'enddeclare',
    'try', 'catch', 'return', 'exit', 'const', 'class', 'function',
    'require', 'include', 'require_once', 'include_once',
    'abstract', 'final', 'interface', 'private', 'protected', 'public', 'static',
    '__LINE__', '__FILE__', '__DIR__', '__FUNCTION__', '__CLASS__', '__METHOD__', '__NAMESPACE__'
);

$functions  = function_exists( 'get_defined_functions'   ) ? get_defined_functions()   : array();
$constants  = function_exists( 'get_defined_constants'   ) ? get_defined_constants()   : array();
$interfaces = function_exists( 'get_declared_interfaces' ) ? get_declared_interfaces() : array();
$classes    = function_exists( 'get_declared_classes'    ) ? get_declared_classes()    : array();

$arrays = array_merge(
        $keywords,
            $functions['internal'],
            //array_keys( $constants ),   // $BDj?t$rJd40$7$?$$>l9g$O$3$N9T$rM-8z$K$9$k(B
            $interfaces,
            $classes
            );
            sort( $arrays );
            $arrays = array_unique( $arrays );
            echo implode( "\n", $arrays );
