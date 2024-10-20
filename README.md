# WordPress Custom Post Type REST API
This project adds a custom post type (recipe) to WordPress with REST API support. 

### Features
- Registers a custom post type named Recipe.
- Enables the WordPress REST API for the custom post type.
- Adds a featured image URL to the REST API response for the custom post type.
- Allows you to fetch and manage custom post type content using the WordPress REST API.

### Requirements
- WordPress 5.0 or higher
- PHP 7.0 or higher

### Installation
If using a theme, open functions.php in your active theme folder and paste the code.

### Testing the REST API
Once you’ve added the code, you can test the REST API endpoints:

Get all recipes:

```
https://yourdomain.com/wp-json/wp/v2/recipes
```

Get a single recipe by ID:
```
https://yourdomain.com/wp-json/wp/v2/recipes/{id}
```

### Example:
```
https://recipesapi.shoaibkhalid.ca/wp-json/wp/v2/recipes
https://recipesapi.shoaibkhalid.ca/wp-json/wp/v2/recipes/12
```