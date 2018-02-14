var number = 0;
var marks = 0;

function startGame() {
	var userBlock = document.getElementById('userInfoSection');
	userBlock.style.display = "none";
	document.getElementById('questionBlock').style.display = 'block';
	showQuestion()
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
