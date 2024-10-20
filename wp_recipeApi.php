// Register Custom Post Type for "Recipe"
function create_recipe_custom_post() {
    $labels = array(
        'name' => __( 'Recipes', 'Post Type General Name' ),
        'singular_name' => __( 'Recipe', 'Post Type Singular Name' ),
        'menu_name' => __( 'Recipes' ),
        'all_items' => __( 'All Recipes' ),
        'add_new_item' => __( 'Add New Recipe' ),
        'edit_item' => __( 'Edit Recipe' ),
    );
    
    $args = array(
        'label' => __( 'Recipe' ),
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest' => true, // Enable REST API support
        'rest_base' => 'recipes', // Base slug for REST API
        'menu_position' => 5,
        'menu_icon' => 'dashicons-book',
    );
    
    register_post_type( 'recipe', $args );
}

add_action( 'init', 'create_recipe_custom_post' );

// Recipes URL

// All Recipes
// https://recipesapi.shoaibkhalid.ca/wp-json/wp/v2/recipes

// Single Recipes
// https://recipesapi.shoaibkhalid.ca/wp-json/wp/v2/recipes/{recipe-post-id}
