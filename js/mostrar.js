<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript"> 
jQuery.fn.toggleText = function(a,b) {
return   this.html(this.html().replace(new RegExp("("+a+"|"+b+")"),function(x){return(x==a)?b:a;}));
}

$(document).ready(function(){
	$('.tgl').before('<span>Revelar conteúdo</span>');
	$('.tgl').css('display', 'none')
	$('span', '#box-toggle').click(function() {
		$(this).next().slideToggle('slow')
		.siblings('.tgl:visible').slideToggle('fast');
	
		$(this).toggleText('Revelar','Esconder')
		.siblings('span').next('.tgl:visible').prev()
		.toggleText('Revelar','Esconder')
	});
})
</script>