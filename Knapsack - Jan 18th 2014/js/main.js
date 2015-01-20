$( document ).ready(function() {
	$('.signinForm, .trouble').hide();

	$('#signinShow').click(function() {
		$('.signinForm, .trouble').toggle();
		$('#signupForm, .alreadyRegistered').hide();
	});

	$('.signupAgain').click(function() {
		$('#signupForm, .alreadyRegistered').show();
		$('.signinForm, .trouble').hide();
	});

	if (location.hash == '#signin') {
		$('.signinForm, .trouble').toggle();
		$('#signupForm, .alreadyRegistered').hide();
	}
	// Hijack click for new upload button
	document.querySelector('.fileSelect').addEventListener('click', function(e) {
	  // Use the native click() of the file input.
	  document.querySelector('.chooseFile').click();
	}, false);
});