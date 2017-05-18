export default {
  init() {
    // Initiatlize Foundation on all pages
    $(document).foundation();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    // closes the panel on click outside
    $(document).mouseup(function (e) {
      var container = $('#contact-panel');
      if (!container.is(e.target) // if the target of the click isn't the container...
      && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
          container.removeClass('is-active');
        }
    });
  },
};
