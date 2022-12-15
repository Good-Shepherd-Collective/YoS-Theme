3 / 3

Here is an example of a PHP function that can be used to display posts with their featured images on the front page of a WordPress site using the WP REST API:

Copy code
function display_featured_posts() {
  // Get the WP REST API URL for the posts
  $api_url = get_rest_url() . 'wp/v2/posts';
  
  // Use the WordPress HTTP API to make a GET request to the WP REST API
  $response = wp_remote_get( $api_url );
  
  // Check for any errors in the response
  if ( is_wp_error( $response ) ) {
    // Handle the error
  }
  
  // Decode the JSON response
  $posts = json_decode( $response['body'], true );
  
  // Loop through the posts
  foreach ( $posts as $post ) {
    // Get the featured image for the post
    $featured_image = get_the_post_thumbnail_url( $post['id'], 'full' );
    
    // Check if the post has a featured image
    if ( ! empty( $featured_image ) ) {
      // Display the post with its featured image
      echo '<h2>' . $post['title']['rendered'] . '</h2>';
      echo '<img src="' . $featured_image . '" alt="">';
    }
  }
}