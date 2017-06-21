<div data-sticky-container>
  <header class="sticky" data-sticky data-stick-to="top" data-margin-top="0" data-top-anchor="1" style="width: 100%;">
    <div class="tip-top-bar show-for-medium-up">
      <div class="row">
        <div class="tip-top-links text-right">
          {!! wp_nav_menu(['menu' => 'CTA Buttons', 'container' => false, 'menu_class' => 'cta-buttons']) !!}
          {!! wp_nav_menu(['menu' => 'Social Media', 'container' => false, 'menu_class' => 'social-buttons']) !!}
          <ul>
            <li><a href="#" data-toggle="search-dropdown" class="search-dropdown-button float-right"><i class="fa fa-search" aria-label="search"></i></a></li>
          </ul>
          <div class="dropdown-pane bottom" id="search-dropdown" data-dropdown data-auto-focus="true">
            <?php get_search_form(true); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="top-bar show-for-medium-up" data-topbar>
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


 <!-- Mobile and tablet nav-->

        <div class="title-bar" data-responsive-toggle="main-nav" data-hide-for="large">
          <button class="menu-icon" type="button" data-toggle="main-nav"></button>
        </div>

<!-- Desktop Navigation -->
        <div class="top-bar-right" id="main-nav">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu([
              'theme_location' => 'primary_navigation',
              'container' => 'nav',
              'menu_class' => 'dropdown vertical medium-horizontal menu main-menu',
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
