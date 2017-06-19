<div class="entry-meta">
  @php ($cats = get_the_category())
  @if (count($cats) == 1)
    Topic: <a href="{{ get_category_link($cats[0]->term_id) }}">{{ $cats[0]->name }}</a>
  @elseif (count($cats) > 1)
    @foreach ($cats as $cat)
      @php ($cat_links[] = '<a href="' . get_category_link($cat->term_id) . '">' . $cat->name . '</a>')
    @endforeach
    Topics: {!! implode($cat_links, ', ') !!}
  @endif
  <span class="sep"> | </span>
  <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date('l, F j, Y') }}</time>
</div>
