document.getElementById('submit').onclick = function() {

	// Form eleme caltozokba irasa
	var name = $('#name').val();
	var email = $('#email').val();
	var message = $('#message').val();

	// Ajax kuldes a feldolgozo php programba
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