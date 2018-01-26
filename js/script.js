
function updateProfile(){
	var update_name = $("#update-name").val();
	var update_email = $("#update-email").val();
	var update_password = $("#update-password").val();
	$.post("src/model/update-profile.php", {update_name : update_name, update_email : update_email, update_password: update_password },
		function(data){
			$("#return-update").html(data);
		}, "html");
};

$(function() {

    $('#login-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});