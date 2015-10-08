
$(document).ready(function () {

	var nt_example1 = $('#nt-example1').newsTicker({
    row_height: 60,
    max_rows: 3,
    duration: 3000,
    prevButton: $('#nt-example1-prev'),
    nextButton: $('#nt-example1-next')

});




$("#nt-example1 a").click(function() {
	var target_news=$(this).attr("href");
	console.log(target_news);
$('#tab-content div').hide();
$(target_news).fadeIn();
});


$.address.change(function(event) {  
    // do something depending on the event.value property, e.g.  
    // $('#content').load(event.value + '.xml');  
	var p=window.location.hash;
	     var value = $.address.value().replace("/","#");
		 //console.log(p+"-"+value);

		 $('#tab-content div').hide();

		 value==="#" ? $('#tab-content div:first').show() : $(value).fadeIn();
	

}); 

});