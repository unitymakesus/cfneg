<article @php(post_class()) data-equalizer-watch>
  <div class="inner-post">
    <header>
      @if(has_post_thumbnail())
        <a class="thumbnail" href="{{ get_permalink() }}">
          {!! get_the_post_thumbnail(get_the_id(), [300,300]) !!}
        </a>
      @endif
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    </header>
    <div class="entry-summary">
      @php(the_excerpt())
      <a class="read-more" href="{{ get_permalink() }}">Continue Reading</a>
    </div>
  </div>
</article>
