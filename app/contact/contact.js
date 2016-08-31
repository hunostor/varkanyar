document.getElementById('submit').onclick = function() {

	var name = $('#name').val();
	var email = $('#email').val();
	var message = $('#message').val();

	$.ajax({
		type: 'POST',
		url: 'app/contact/contact.php',
		data: {
			name: name,
			email: email,
			message: message,
		},
		success: function(data) {
			$('#contact_feedback').html(data);
		}
	});
	
	// Form ertekek torlese az elkuldes utan
	$('#name').val('');
	$('#email').val('');
	$('#message').val('');
}