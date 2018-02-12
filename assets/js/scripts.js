function startGame() {
	var userBlock = document.getElementById('userInfoSection');
	userBlock.style.display = "none";
	document.getElementById('questionBlock').style.display = 'block';

	showQuestion()
	
}
var number = 0;
function goToNextQuestion () {
	var radioButtons = document.getElementsByName("answerA");
	
	for (var i = 0; i < radioButtons.length; i++) {
		if (radioButtons[i].checked) {
			var selectValue =  radioButtons[i].value;
			var elementId = event.srcElement.id
		}
	}

	if (number < 3 ) {
		$(radioButtons).closest('.question-block').hide();
		console.log(number);
		showQuestion ();
	}
}


function showQuestion () {
	var elem = 'question' + number;
	if (number < 3) {
		document.getElementById(elem).style.display = 'block';
		number = number + 1;
	}
	
}
