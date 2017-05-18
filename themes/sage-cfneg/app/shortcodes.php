<?php

namespace App;

/**
 * Custom calendar events feed Shortcode
 */
add_shortcode('cfneg-calendar-feed', function () {
  // Get 3 next events
  $events = tribe_get_events([
    'posts_per_page' => 3,
    'start_date' => date( 'Y-m-d H:i:s' )
  ]);

  ob_start();

  echo '<ol class="cfneg-calendar-feed">';

    // Loop through the events, displaying the date and title for each
    foreach ( $events as $event ) {
      ?>

      <li>
        <div class="medium-3 columns">
          <?php echo date('M j, Y', strtotime($event->EventStartDate)); ?>
        </div>

        <div class="medium-9 columns">
          <a href="<?php the_permalink(); ?>">
            <?php echo $event->post_title; ?>
          </a>
        </div>
      </li>

      <?php
      // print_r($event);
    }

  echo '</ol>';

  // Return output
  return ob_get_clean();
});
