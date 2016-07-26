$(document).ready(function(){
		$('#link2content').hide();

		$('#link1').click(function(){
			$('#link2content').hide();
			$('#link1content').show();
		});
		$('#link2').click(function(){
			$('#link1content').hide();
			$('#link2content').show();
		});
	});