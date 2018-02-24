var number = 0;
var marks = 0;



function startGame() {
	var userBlock = document.getElementById('userInfoSection');
	userBlock.style.display = "none";
	document.getElementById('questionBlock').style.display = 'block';
	showQuestion();
}

function goToNextQuestion () {
	var radioButtons = document.getElementsByName("answerA");
	for (var i = 0; i < radioButtons.length; i++) {
		if (radioButtons[i].checked) {
			var selectValue =  radioButtons[i].value;
			marks = marks + parseInt(selectValue);
			var totalMarks = marks;
			var y = document.getElementById("total_score").value = marks;
			console.log(y);
			var elementId = event.srcElement.id
		}
	}

	if (number < 10 ) {
		$(radioButtons).closest('.question-block').slideUp( "400", function() {
		 
		 });
		showQuestion ();
	}
}


function showQuestion () {
	var elem = '#question' + number;
	if (number < 10 ) {

		$(elem).slideDown( "400", function() {
		 
		 });

		number = number + 1;
	}
	
}



$(document).ready(function() {

	jQuery.validator.addMethod("lettersonly", function(value, element) 
	{
	return this.optional(element) || /^[a-z," "]+$/i.test(value);
	}, "Letters and spaces only please");



	$("#userInfo").validate({
					
					rules: {
						full_name: {
							required: true,
							lettersonly: true
						},
						phone_number: {
							required: true,
							minlength: 11,
							maxlength: 11,
							number: true
						},
						email: {
							required: true,
							email: true
						},
						district: {
							required: true
						}
					},
					messages: {
						full_name: "Please enter valid full name",
						email: "Please enter a valid email address to get updates",
						phone_number: "Please enter your valid phone number",
						district: "Please select your district",
						feedback: "Maxmimum 100 Character"
					}
				});


	$( "#startGameBtn" ).click(function() {
	  if ($("#userInfo").valid() === true) {
	  	startGame();
	  }

	});



});

