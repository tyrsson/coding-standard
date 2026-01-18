<?php

declare(strict_types=1);

/**
 * This file is part of the Webware Coding Standard package.
 *
 * Copyright (c) 2026 Joey (aka Tyrsson) Smith <jsmith@webinertia.net>
 * and contributors.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webware\CodingStandard;

use PhpCsFixer\RuleSet\RuleSetDefinitionInterface;

final class Webware1x0Set implements RuleSetDefinitionInterface
{
    public const SET_NAME = '@Webware/coding-standard-1.0';

    public function getDescription(): string
    {
        return 'Webware Coding Standard ruleset. Extends @PER-CS3x0.';
    }

    public function getName(): string
    {
        return self::SET_NAME;
    }

    public function isRisky(): bool
    {
        return true;
    }

    public function getRules(): array
    {
        return [
            '@PER-CS3x0'                                       => true,
            // Basic
            'encoding'                                         => true,
            'full_opening_tag'                                 => true,
            'no_closing_tag'                                   => true,
            // Array Notation
            'array_syntax'                                     => [
                'syntax' => 'short',
            ],
            'no_trailing_comma_in_singleline'                  => [
                'elements' => [
                    'array',
                    'array_destructuring',
                ],
            ],
            'trim_array_spaces'                                => true,
            'whitespace_after_comma_in_array'                  => [
                'ensure_single_space' => true,
            ],
            'no_whitespace_before_comma_in_array'              => [
                'after_heredoc' => false,
            ],
            'trailing_comma_in_multiline'                      => [
                'elements' => [
                    'arrays',
                ],
            ],
            // Attribute Notation
            'attribute_empty_parentheses'                      => [
                'use_parentheses' => true,
            ],
            // Casing
            'constant_case'                                    => [
                'case' => 'lower',
            ],
            'lowercase_keywords'                               => true,
            'lowercase_static_reference'                       => true,
            'magic_constant_casing'                            => true,
            'magic_method_casing'                              => true,
            'native_function_casing'                           => true,
            'native_type_declaration_casing'                   => true,
            // Cast Notation
            'cast_spaces'                                      => [
                'space' => 'single',
            ],
            'lowercase_cast'                                   => true,
            'no_short_bool_cast'                               => true,
            'short_scalar_cast'                                => true,
            // Class Notation
            'class_attributes_separation'                      => [
                'elements' => [
                    'const'        => 'one',
                    'method'       => 'one',
                    'property'     => 'one',
                    'trait_import' => 'none',
                ],
            ],
            'class_definition'                                 => [
                'single_line'                         => true,
                'single_item_single_line'             => true,
                'multi_line_extends_each_single_line' => true,
                'space_before_parenthesis'            => false,
            ],
            'no_blank_lines_after_class_opening'               => true,
            'no_null_property_initialization'                  => true,
            'ordered_class_elements'                           => [
                'order'          => [
                    'use_trait',
                    'case',
                    'constant_public',
                    'constant_protected',
                    'constant_private',
                    'property_public',
                    'property_protected',
                    'property_private',
                    'construct',
                    'destruct',
                    'magic',
                    'phpunit',
                    'method_public',
                    'method_protected',
                    'method_private',
                ],
                'sort_algorithm' => 'none',
            ],
            'single_class_element_per_statement'               => [
                'elements' => [
                    'property',
                    'const',
                ],
            ],
            'visibility_required'                              => [
                'elements' => [
                    'property',
                    'method',
                    'const',
                ],
            ],
            'no_php4_constructor'                              => true,
            // Comment
            'comment_to_phpdoc'                                => true,
            'multiline_comment_opening_closing'                => true,
            'no_empty_comment'                                 => true,
            'no_trailing_whitespace_in_comment'                => true,
            'single_line_comment_spacing'                      => true,
            'single_line_comment_style'                        => [
                'comment_types' => [
                    'asterisk',
                ],
            ],
            // Control Structure
            'control_structure_braces'                         => true,
            'control_structure_continuation_position'          => [
                'position' => 'same_line',
            ],
            'elseif'                                           => true,
            'no_break_comment'                                 => [
                'comment_text' => 'no break',
            ],
            'no_superfluous_elseif'                            => true,
            'no_useless_else'                                  => true,
            'switch_case_semicolon_to_colon'                   => true,
            'switch_case_space'                                => true,
            'switch_continue_to_break'                         => true,
            'trailing_comma_in_multiline'                      => [
                'elements' => [
                    'arrays',
                    'match',
                    'parameters',
                ],
            ],
            // Function Notation
            'function_declaration'                             => [
                'closure_function_spacing' => 'one',
                'closure_fn_spacing'       => 'one',
            ],
            'lambda_not_used_import'                           => true,
            'method_argument_space'                            => [
                'on_multiline'                     => 'ensure_fully_multiline',
                'after_heredoc'                    => false,
                'keep_multiple_spaces_after_comma' => false,
            ],
            'no_spaces_after_function_name'                    => true,
            'no_useless_sprintf'                               => true,
            'nullable_type_declaration_for_default_null_value' => [
                'use_nullable_type_declaration' => true,
            ],
            'return_type_declaration'                          => [
                'space_before' => 'none',
            ],
            'single_line_throw'                                => true,
            // Import
            'fully_qualified_strict_types'                     => [
                'import_symbols' => true,
                'phpdoc_tags'    => [
                    'param',
                    'phpstan-param',
                    'phpstan-property',
                    'phpstan-property-read',
                    'phpstan-property-write',
                    'phpstan-return',
                    'phpstan-var',
                    'property',
                    'property-read',
                    'property-write',
                    'psalm-param',
                    'psalm-property',
                    'psalm-property-read',
                    'psalm-property-write',
                    'psalm-return',
                    'psalm-var',
                    'return',
                    'see',
                    'throws',
                    'var',
                ],
            ],
            'global_namespace_import'                          => [
                'import_classes'   => true,
                'import_constants' => true,
                'import_functions' => true,
            ],
            'group_import'                                     => false,
            'no_leading_import_slash'                          => true,
            'no_unneeded_import_alias'                         => true,
            'no_unused_imports'                                => true,
            'ordered_imports'                                  => [
                'sort_algorithm' => 'alpha',
                'imports_order'  => [
                    'class',
                    'function',
                    'const',
                ],
            ],
            'single_import_per_statement'                      => [
                'group_to_single_imports' => true,
            ],
            'single_line_after_imports'                        => true,
            'blank_line_between_import_groups'                 => true,
            // Language Construct
            'combine_consecutive_issets'                       => true,
            'combine_consecutive_unsets'                       => true,
            'declare_equal_normalize'                          => [
                'space' => 'none',
            ],
            'declare_parentheses'                              => true,
            'single_space_around_construct'                    => [
                'constructs_followed_by_a_single_space' => [
                    'abstract',
                    'as',
                    'attribute',
                    'break',
                    'case',
                    'catch',
                    'class',
                    'clone',
                    'comment',
                    'const',
                    'const_import',
                    'continue',
                    'do',
                    'echo',
                    'else',
                    'elseif',
                    'enum',
                    'extends',
                    'final',
                    'finally',
                    'for',
                    'foreach',
                    'function',
                    'function_import',
                    'global',
                    'goto',
                    'if',
                    'implements',
                    'include',
                    'include_once',
                    'instanceof',
                    'insteadof',
                    'interface',
                    'match',
                    'named_argument',
                    'namespace',
                    'new',
                    'open_tag_with_echo',
                    'php_doc',
                    'php_open',
                    'print',
                    'private',
                    'protected',
                    'public',
                    'readonly',
                    'require',
                    'require_once',
                    'return',
                    'static',
                    'switch',
                    'throw',
                    'trait',
                    'try',
                    'type_colon',
                    'use',
                    'use_lambda',
                    'use_trait',
                    'var',
                    'while',
                    'yield',
                    'yield_from',
                ],
            ],
            // List Notation
            'list_syntax'                                      => [
                'syntax' => 'short',
            ],
            // Namespace Notation
            'blank_line_after_namespace'                       => true,
            'blank_lines_before_namespace'                     => [
                'min_line_breaks' => 2,
                'max_line_breaks' => 2,
            ],
            'clean_namespace'                                  => true,
            'no_leading_namespace_whitespace'                  => true,
            // Operator
            'assign_null_coalescing_to_coalesce_equal'         => true,
            'binary_operator_spaces'                           => [
                'default'   => 'align_single_space_minimal',
                'operators' => [
                    '=>' => 'align_single_space_minimal_by_scope',
                ],
            ],
            'concat_space'                                     => [
                'spacing' => 'one',
            ],
            'logical_operators'                                => true,
            'new_with_parentheses'                             => [
                'named_class'     => true,
                'anonymous_class' => true,
            ],
            'no_space_around_double_colon'                     => true,
            'no_useless_concat_operator'                       => [
                'juggle_simple_strings' => true,
            ],
            'no_useless_nullsafe_operator'                     => true,
            'not_operator_with_successor_space'                => true,
            'object_operator_without_whitespace'               => true,
            'operator_linebreak'                               => [
                'only_booleans' => false,
                'position'      => 'beginning',
            ],
            'standardize_not_equals'                           => true,
            'ternary_operator_spaces'                          => true,
            'ternary_to_null_coalescing'                       => true,
            'unary_operator_spaces'                            => [
                'only_dec_inc' => false,
            ],
            // PHP Tag
            'blank_line_after_opening_tag'                     => true,
            'linebreak_after_opening_tag'                      => true,
            // PHPDoc
            'align_multiline_comment'                          => [
                'comment_type' => 'phpdocs_only',
            ],
            'general_phpdoc_annotation_remove'                 => [
                'annotations' => [
                    'api',
                    'author',
                    'category',
                    'copyright',
                    'created',
                    'license',
                    'package',
                    'subpackage',
                    'version',
                ],
            ],
            'no_blank_lines_after_phpdoc'                      => true,
            'no_empty_phpdoc'                                  => true,
            'no_superfluous_phpdoc_tags'                       => [
                'remove_inheritdoc'   => false,
                'allow_mixed'         => true,
                'allow_unused_params' => false,
            ],
            'phpdoc_align'                                     => [
                'align' => 'left',
            ],
            'phpdoc_annotation_without_dot'                    => false,
            'phpdoc_indent'                                    => true,
            'phpdoc_inline_tag_normalizer'                     => [
                'tags' => [
                    'example',
                    'id',
                    'internal',
                    'inheritdoc',
                    'inheritdocs',
                    'link',
                    'source',
                    'toc',
                    'tutorial',
                ],
            ],
            'phpdoc_line_span'                                 => [
                'const'    => 'single',
                'property' => 'single',
                'method'   => null,
            ],
            'phpdoc_no_access'                                 => true,
            'phpdoc_no_alias_tag'                              => [
                'replacements' => [
                    'property-read'  => 'property',
                    'property-write' => 'property',
                    'type'           => 'var',
                    'link'           => 'see',
                ],
            ],
            'phpdoc_no_empty_return'                           => true,
            'phpdoc_no_package'                                => true,
            'phpdoc_no_useless_inheritdoc'                     => true,
            'phpdoc_order'                                     => [
                'order' => [
                    'internal',
                    'deprecated',
                    'link',
                    'see',
                    'uses',
                    'param',
                    'return',
                    'throws',
                ],
            ],
            'phpdoc_order_by_value'                            => [
                'annotations' => [
                    'covers',
                    'coversNothing',
                    'dataProvider',
                    'depends',
                    'group',
                    'internal',
                    'method',
                    'mixin',
                    'property',
                    'property-read',
                    'property-write',
                    'requires',
                    'throws',
                    'uses',
                ],
            ],
            'phpdoc_param_order'                               => true,
            'phpdoc_return_self_reference'                     => [
                'replacements' => [
                    'this'    => '$this',
                    '@this'   => '$this',
                    '$self'   => 'self',
                    '@self'   => 'self',
                    '$static' => 'static',
                    '@static' => 'static',
                ],
            ],
            'phpdoc_scalar'                                    => [
                'types' => [
                    'boolean',
                    'callback',
                    'double',
                    'integer',
                    'real',
                    'str',
                ],
            ],
            'phpdoc_separation'                                => [
                'groups' => [
                    [
                        'internal',
                        'deprecated',
                    ],
                    [
                        'link',
                        'see',
                        'uses',
                    ],
                    [
                        'param',
                        'return',
                        'throws',
                    ],
                ],
            ],
            'phpdoc_single_line_var_spacing'                   => true,
            'phpdoc_summary'                                   => false,
            'phpdoc_tag_casing'                                => [
                'tags' => [
                    'inheritDoc',
                ],
            ],
            'phpdoc_tag_type'                                  => [
                'tags' => [
                    'api'        => 'annotation',
                    'author'     => 'annotation',
                    'copyright'  => 'annotation',
                    'deprecated' => 'annotation',
                    'example'    => 'annotation',
                    'global'     => 'annotation',
                    'inheritDoc' => 'annotation',
                    'internal'   => 'annotation',
                    'license'    => 'annotation',
                    'method'     => 'annotation',
                    'package'    => 'annotation',
                    'param'      => 'annotation',
                    'property'   => 'annotation',
                    'return'     => 'annotation',
                    'see'        => 'annotation',
                    'since'      => 'annotation',
                    'throws'     => 'annotation',
                    'todo'       => 'annotation',
                    'uses'       => 'annotation',
                    'var'        => 'annotation',
                    'version'    => 'annotation',
                ],
            ],
            'phpdoc_to_comment'                                => [
                'ignored_tags' => [
                    'psalm-suppress',
                    'phpstan-ignore-line',
                    'phpstan-ignore-next-line',
                ],
            ],
            'phpdoc_trim'                                      => true,
            'phpdoc_trim_consecutive_blank_line_separation'    => true,
            'phpdoc_types'                                     => [
                'groups' => [
                    'simple',
                    'alias',
                    'meta',
                ],
            ],
            'phpdoc_types_order'                               => [
                'sort_algorithm'  => 'alpha',
                'null_adjustment' => 'always_last',
            ],
            'phpdoc_var_annotation_correct_order'              => true,
            'phpdoc_var_without_name'                          => true,
            // Return Notation
            'no_useless_return'                                => true,
            'return_assignment'                                => true,
            'simplified_null_return'                           => true,
            // Semicolon
            'multiline_whitespace_before_semicolons'           => [
                'strategy' => 'no_multi_line',
            ],
            'no_empty_statement'                               => true,
            'no_singleline_whitespace_before_semicolons'       => true,
            'semicolon_after_instruction'                      => true,
            'space_after_semicolon'                            => [
                'remove_in_empty_for_expressions' => false,
            ],
            // Strict
            'declare_strict_types'                             => true,
            'strict_comparison'                                => true,
            'strict_param'                                     => true,
            // String Notation
            'explicit_string_variable'                         => true,
            'heredoc_to_nowdoc'                                => true,
            'simple_to_complex_string_variable'                => true,
            'single_quote'                                     => [
                'strings_containing_single_quote_chars' => false,
            ],
            // Whitespace
            'array_indentation'                                => true,
            'blank_line_before_statement'                      => [
                'statements' => [
                    'break',
                    'case',
                    'continue',
                    'declare',
                    'default',
                    'exit',
                    'goto',
                    'include',
                    'include_once',
                    'phpdoc',
                    'require',
                    'require_once',
                    'return',
                    'switch',
                    'throw',
                    'try',
                    'yield',
                    'yield_from',
                ],
            ],
            'compact_nullable_type_declaration'                => true,
            'heredoc_indentation'                              => [
                'indentation' => 'same_as_start',
            ],
            'indentation_type'                                 => true,
            'line_ending'                                      => true,
            'method_chaining_indentation'                      => true,
            'no_extra_blank_lines'                             => [
                'tokens' => [
                    'attribute',
                    'break',
                    'case',
                    'continue',
                    'curly_brace_block',
                    'default',
                    'extra',
                    'parenthesis_brace_block',
                    'return',
                    'square_brace_block',
                    'switch',
                    'throw',
                    'use',
                ],
            ],
            'no_spaces_around_offset'                          => [
                'positions' => [
                    'inside',
                    'outside',
                ],
            ],
            'no_trailing_whitespace'                           => true,
            'no_whitespace_in_blank_line'                      => true,
            'single_blank_line_at_eof'                         => true,
            'statement_indentation'                            => [
                'stick_comment_to_next_continuous_control_statement' => true,
            ],
            'type_declaration_spaces'                          => [
                'elements' => [
                    'function',
                    'property',
                ],
            ],
            'types_spaces'                                     => [
                'space' => 'none',
            ],
        ];
    }
}
