// for every element with the .style-first-word class replace the first word with a span with the class first-word.
$('.style-first-word').each(function() {
  const html = $(this).html();
  const firstWord = html.substr(0, html.indexOf(' '));
  const rest = html.substr(html.indexOf(' '));

  $(this).html(rest).prepend($('<span/>').html(firstWord).addClass('first-word'));
});

// To make sure input value is not empty
$('input[type="email"], input[type="text"]').each(function() {
  $(this).on('keyup', function(){
    $(this).attr('value', this.value);
  });
});
