$(document).ready(function(){
		$('#sidebar-btn').click(function(){
			$('#sidebar').toggleClass('visible');
			$('#container').addClass('container_move');
		});
	});