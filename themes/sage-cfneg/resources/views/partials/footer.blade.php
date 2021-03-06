@if (is_single())
  @php
    $category = get_the_category();
    $related = new WP_Query([
      'posts_per_page' => 3,
      'category' => $category[0]->slug,
      'post__not_in' => [get_the_id()]
    ]);
  @endphp

  @if ($related->have_posts())
    <div class="recommended-stories">
      <div class="row column">
        <h2 class="section-title">Recommended Stories</h2>
      </div>
      <div class="background-light-gray">
        <div class="row" data-equalizer>
          @while ($related->have_posts()) @php($related->the_post())
            @include ('partials.content')
          @endwhile
        </div>
      </div>
    </div>
  @endif
@endif

@if (!is_home() && !is_front_page())
  <div class="wrap container">
    <div id="et_builder_outer_content">
      {!! do_shortcode('[et_pb_section global_module="439"][/et_pb_section]') !!}
    </div>
  </div>
@endif

<footer class="global-footer">
  <div class="flex-row">
    <div class="medium-4 flex-columns">
      @php(dynamic_sidebar('sidebar-footer-1'))
    </div>
    <div class="medium-4 flex-columns">
      @php(dynamic_sidebar('sidebar-footer-2'))
    </div>
    <div class="medium-4 flex-columns">
      @php(dynamic_sidebar('sidebar-footer-3'))
    </div>
  </div>

  <div class="row hide-for-small-only">
    <nav class="footer-menu">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'menu_class' => '', 'depth' => 2]) !!}
      @endif
      {!! wp_nav_menu(['menu' => 'Footer Contact Menu', 'container' => false, 'menu_class' => '', 'depth' => 2]) !!}
    </nav>
  </div>

  <div class="bottom-bar">
    <div class="row">
      <p class="text-small">&copy; {{ current_time('Y') }} Community Foundation for Northeast Georgia</p>
    </div>
  </div>
</footer>

@include ('partials.form-contact')
