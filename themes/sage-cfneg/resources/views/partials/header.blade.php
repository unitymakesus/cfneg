<div data-sticky-container>
  <header class="sticky" data-sticky data-stick-to="top" data-margin-top="0" data-top-anchor="1" style="width: 100%;">
    <div class="tip-top-bar show-for-large">
      <div class="row">
        <div class="tip-top-links text-right">
          {!! wp_nav_menu(['menu' => 'CTA Buttons', 'container' => false, 'menu_class' => 'cta-buttons']) !!}
          {!! wp_nav_menu(['menu' => 'Social Media', 'container' => false, 'menu_class' => 'social-buttons']) !!}
          <ul>
            <li><a href="#" data-toggle="search-dropdown" class="search-dropdown-button"><i class="fa fa-search" aria-label="search"></i></a></li>
          </ul>
          <div class="dropdown-pane" id="search-dropdown" data-dropdown data-auto-focus="true">
            <?php get_search_form(true); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="top-bar show-for-large">
      <div class="row">
        <div class="top-bar-left">
          <a class="brand" href="{{ home_url('/') }}">
            @if (has_custom_logo())
              @php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'logo' );
                $logo_2x = wp_get_attachment_image_src( $custom_logo_id, 'logo-2x' );
              @endphp
              <img src="{{ $logo[0] }}"
                   srcset="{{ $logo[0] }} 1x, {{ $logo_2x[0] }} 2x"
                   alt="{{ get_bloginfo('name', 'display') }}">
            @else
              {{ get_bloginfo('name', 'display') }}
            @endif
          </a>
        </div>

        <div class="top-bar-right">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu([
              'theme_location' => 'primary_navigation',
              'container' => 'nav',
              'menu_class' => 'dropdown menu main-menu',
              'items_wrap' => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
              'link_before' => '<span>',
              'link_after' => '</span>'
            ]) !!}
          @endif
        </div>
      </div>
    </div>
  </header>
</div>
