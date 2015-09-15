jQuery(document).ready(function () {
  htmlOnload();
  jQuery(window).bind('resize', resizeBind);
});


function resizeBind() {
  contsize();
}


function htmlOnload() { 
  contsize();
}

function contsize(){
  var liMaxHeight = -1;
  var node;

  jQuery(".product-home .product_list_widget li").css('height','auto');

  jQuery(".product-home .product_list_widget li").each(function(index){
    if (jQuery(this).outerHeight() > liMaxHeight) {
      liMaxHeight = jQuery(this).outerHeight();
      node = index;
    };
  });

  jQuery(".product-home .product_list_widget li").css("height", liMaxHeight);
}



