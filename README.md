# wp-graphql-enable-all-post-types

This plugin adds all registered custom post types to WP GraphQL

Note that this plugin uses the post type name as the GraphQL single and plural field names. If you have translations for those fields and view the schema in a specific language, this plugin may register those fields based on the current language which will result in an inconsistent schema.
