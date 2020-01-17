$(document).ready(function () {
   $('.js-like-article').on('click', function (e) {
      e.preventDefault();   // that the browser does not follow the link

      var $link = $(e.currentTarget);
      $link.toggleClass('fa-heart-o').toggleClass('fa-heart');

      $.ajax({
         method: 'POST',
         url: $link.attr('href')
      }).done(function (data) {
         $('.js-like-article-count').html(data.hearts);
      });
   });
});