<?php
/**
 * Plugin Name: WPGraphQL Enable all post types
 * Description: Adds a GraphQL field for every registered post type.
 * Author: Tyler Barnes <tylerbarnes@gmail.com>
 *
 * @version 0.0.1
 */

$blacklisted_post_types = [
    'post',
    'page',
    'attachment',
    'revision',
    'nav_menu_item',
    'custom_css',
    'customize_changeset',
    'oembed_cache',
    'user_request',
    'wp_block',
];

add_filter(
    'register_post_type_args',
    function ($args, $post_type) use ($blacklisted_post_types) {
        if (in_array($post_type, $blacklisted_post_types)) {
            return $args;
        }

        $args['show_in_graphql'] = true;
        
        $args['graphql_single_name'] = str_replace(
            " ",
            "",
            $args['labels']['singular_name']
        );

        $args['graphql_plural_name'] = str_replace(
            " ",
            "",
            $args['labels']['all_items']
        );

        return $args;
    },
    10,
    2
);
