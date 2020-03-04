<?php

$finder = Symfony\Component\Finder\Finder::create()
    ->notPath('vendor')
    ->in(__DIR__)
    ->name('*.php');

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'static_lambda' => true,
        'linebreak_after_opening_tag' => true,
        'blank_line_after_opening_tag' => true,
        'declare_strict_types' => true,
        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => ['sortAlgorithm' => 'alpha'],
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'native_function_invocation' => true,
        'is_null' => true,
        'list_syntax' => [
            'syntax' => 'short',
        ],
        'lowercase_cast' => true,
        'lowercase_static_reference' => true,
        'mb_str_functions' => true,
        'modernize_types_casting' => true,
        'native_constant_invocation' => true,
        'native_function_casing' => true,
        'new_with_braces' => true,
        'blank_line_before_statement' => [
            'statements' => ['declare',],
        ],
        'return_type_declaration' => [
            'space_before' => 'none',
        ],
        'global_namespace_import' => [
            'import_functions' => false,
        ],
        'fully_qualified_strict_types' => false,
    ])
    ->setFinder($finder);
