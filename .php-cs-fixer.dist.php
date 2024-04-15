<?php

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->ignoreDotFiles(false)
    ->name(['.php-cs-fixer.dist.php', 'artisan'])
    ->exclude(['bootstrap/cache', 'node_modules', 'storage'])
    ->notPath('public/frankenphp-worker.php');

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PER-CS' => true,
        '@PER-CS:risky' => true,
        '@PHP80Migration:risky' => true,
        '@PHP83Migration' => true,
        '@PHPUnit100Migration:risky' => true,

        // Alias
        'array_push' => true,
        'backtick_to_shell_exec' => true,
        'ereg_to_preg' => true,
        'mb_str_functions' => true,
        'no_alias_language_construct_call' => true,
        'no_mixed_echo_print' => true,
        'set_type_to_cast' => true,

        // Array Notation
        'no_multiline_whitespace_around_double_arrow' => true,
        'return_to_yield_from' => true,
        'trim_array_spaces' => true,
        'whitespace_after_comma_in_array' => true,
        'yield_from_array_to_yields' => true,

        // Attribute Notation
        'attribute_empty_parentheses' => true,

        // Basic
        'no_trailing_comma_in_singleline' => true,
        // 'numeric_literal_separator' => true,
        'psr_autoloading' => true,
        'single_line_empty_body' => false,

        // Casing
        'class_reference_name_casing' => true,
        'integer_literal_case' => true,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'native_function_casing' => true,
        'native_type_declaration_casing' => true,

        // Cast Notation
        'modernize_types_casting' => true,
        'no_short_bool_cast' => true,

        // Class Notation
        'class_attributes_separation' => true,
        // 'final_class' => true,
        // 'final_internal_class' => true,
        // 'final_public_method_for_abstract_class' => true,
        'no_null_property_initialization' => true,
        'ordered_interfaces' => true,
        'ordered_traits' => true,
        'ordered_types' => true,
        'phpdoc_readonly_class_comment_to_keyword' => true,
        'protected_to_private' => true,
        'self_accessor' => true,
        'self_static_accessor' => true,

        // Class Usage
        'date_time_immutable' => true,

        // Comment
        'comment_to_phpdoc' => true,
        // 'header_comment' => ['header' => ''],
        'multiline_comment_opening_closing' => true,
        // 'no_empty_comment' => true,
        'single_line_comment_spacing' => true,
        'single_line_comment_style' => true,

        // Constant Notation
        'native_constant_invocation' => true,

        // Control Structure
        'empty_loop_body' => true,
        'empty_loop_condition' => true,
        'include' => true,
        'no_alternative_syntax' => true,
        'no_superfluous_elseif' => true,
        'no_unneeded_braces' => true,
        'no_unneeded_control_parentheses' => true,
        'no_useless_else' => true,
        'simplified_if_return' => true,
        'switch_continue_to_break' => true,
        'trailing_comma_in_multiline' => [
            'after_heredoc' => true,
            'elements' => ['arguments', 'arrays', 'match', 'parameters'],
        ],
        // 'yoda_style' => true,

        // Doctrine Annotation
        // 'doctrine_annotation_array_assignment' => true,
        // 'doctrine_annotation_braces' => true,
        // 'doctrine_annotation_indentation' => true,
        // 'doctrine_annotation_spaces' => true,

        // Function Notation
        'date_time_create_from_format_call' => true,
        'fopen_flag_order' => true,
        'fopen_flags' => true,
        'lambda_not_used_import' => true,
        'native_function_invocation' => ['include' => ['@all'], 'scope' => 'namespaced'],
        'no_useless_sprintf' => true,
        'nullable_type_declaration_for_default_null_value' => true,
        // 'phpdoc_to_param_type' => true,
        // 'phpdoc_to_property_type' => true,
        // 'phpdoc_to_return_type' => true,
        'regular_callable_call' => true,
        // 'single_line_throw' => true,
        'static_lambda' => true,

        // Import
        // 'fully_qualified_strict_types' => true,
        'global_namespace_import' => true,
        // 'group_import' => true,
        'no_unneeded_import_alias' => true,
        'no_unused_imports' => true,
        'ordered_imports' => true,

        // Language Construct
        // 'class_keyword' => true,
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'declare_parentheses' => true,
        'dir_constant' => true,
        // 'error_suppression' => true,
        'explicit_indirect_variable' => true,
        'function_to_constant' => true,
        'is_null' => true,
        'no_unset_on_property' => true,
        'nullable_type_declaration' => true,
        'single_space_around_construct' => true,

        // List Notation

        // Namespace Notation
        'no_leading_namespace_whitespace' => true,

        // Naming
        'no_homoglyph_names' => true,

        // Operator
        'increment_style' => true,
        'logical_operators' => true,
        'long_to_shorthand_operator' => true,
        'new_with_parentheses' => true,
        'no_useless_concat_operator' => true,
        'no_useless_nullsafe_operator' => true,
        // 'not_operator_with_space' => true,
        'object_operator_without_whitespace' => true,
        'operator_linebreak' => ['only_booleans' => true, 'position' => 'end'],
        'standardize_increment' => true,
        'standardize_not_equals' => true,
        // 'ternary_to_elvis_operator' => true,

        // PHP Tag
        'echo_tag_syntax' => true,
        'linebreak_after_opening_tag' => true,

        // PHPUnit
        'php_unit_construct' => true,
        // 'php_unit_data_provider_name' => true,
        'php_unit_data_provider_return_type' => true,
        'php_unit_fqcn_annotation' => true,
        // 'php_unit_internal_class' => true,
        'php_unit_method_casing' => ['case' => 'snake_case'],
        'php_unit_mock_short_will_return' => true,
        'php_unit_set_up_tear_down_visibility' => true,
        // 'php_unit_size_class' => true,
        // 'php_unit_strict' => true,
        // 'php_unit_test_annotation' => true, // Don't use because it doesn't currently support #[Test] attribute
        'php_unit_test_case_static_method_calls' => ['call_type' => 'this'],
        // 'php_unit_test_class_requires_covers' => true,

        // PHPDoc
        'align_multiline_comment' => true,
        // 'general_phpdoc_annotation_remove' => true,
        // 'general_phpdoc_tag_rename' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_empty_phpdoc' => true,
        'no_superfluous_phpdoc_tags' => true,
        // 'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_align' => ['align' => 'left'],
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_indent' => true,
        'phpdoc_inline_tag_normalizer' => true,
        'phpdoc_line_span' => true,
        // 'phpdoc_no_access' => true,
        // 'phpdoc_no_alias_tag' => true,
        // 'phpdoc_no_empty_return' => true,
        // 'phpdoc_no_package' => true,
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_order_by_value' => true,
        'phpdoc_order' => true,
        'phpdoc_return_self_reference' => true,
        'phpdoc_scalar' => true,
        // 'phpdoc_separation' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_summary' => true,
        'phpdoc_tag_casing' => true,
        'phpdoc_tag_type' => true,
        // 'phpdoc_to_comment' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_trim' => true,
        'phpdoc_types' => true,
        'phpdoc_types_order' => ['null_adjustment' => 'always_last'],
        'phpdoc_var_annotation_correct_order' => true,
        'phpdoc_var_without_name' => true,

        // Return Notation
        'no_useless_return' => true,
        'return_assignment' => true,
        'simplified_null_return' => true,

        // Semicolon
        'multiline_whitespace_before_semicolons' => true,
        'no_empty_statement' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'semicolon_after_instruction' => true,
        'space_after_semicolon' => true,

        // Strict
        'strict_comparison' => true,
        'strict_param' => true,

        // String Notation
        'escape_implicit_backslashes' => true,
        'explicit_string_variable' => true,
        'heredoc_closing_marker' => true,
        'heredoc_to_nowdoc' => true,
        'multiline_string_to_heredoc' => true,
        'no_binary_string' => true,
        'single_quote' => true,
        'string_length_to_empty' => true,
        'string_line_ending' => true,

        // Whitespace
        'blank_line_before_statement' => true,
        'method_chaining_indentation' => true,
        'no_extra_blank_lines' => true,
        'no_spaces_around_offset' => true,
        'type_declaration_spaces' => true,
        'types_spaces' => true,
    ])
    ->setFinder($finder);
