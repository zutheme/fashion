//trigger on document ready
var init_sort;
jQuery(document).ready(function($){
  var exist_left_container = setInterval(function() {
  var x = document.getElementsByClassName("list-ask-question")[0];
   if (x) {
		init_sort();
        clearInterval(exist_left_container);
      } 
      
   }, 100);
   init_sort = function() {
    		$('.list-ask-question').sortable({
			items: '.page_item',
			cursor: 'move',
			containment: 'parent',
			placeholder: 'my-placeholder'
		});
    } 	
});