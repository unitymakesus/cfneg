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

  <div class="row">
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
