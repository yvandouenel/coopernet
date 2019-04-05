jQuery(function($) {
  //cache toutes les réponses
  $(".answer").hide();
  let questions = $(".question").each(function(){
    $(this).click(function(){
      // get the next answer class
      $(this).next(".answer").slideToggle();
    });
  });
});