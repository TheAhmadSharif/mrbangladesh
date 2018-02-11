function startGame() {
	var userBlock = document.getElementById('userInfoSection');
	userBlock.style.display = "none";

	document.getElementById('questionBlock').style.display = 'block';
}

function goToNextQuestion () {
	var radioButtons = document.getElementsByName("answerA");
	

	for (var i = 0; i < radioButtons.length; i++) {
		if (radioButtons[i].checked) {
			var selectValue =  radioButtons[i].value;
			console.log(selectValue);
			var elementId = event.srcElement.id
			  console.log(elementId);
			  $('#question0').hide();
		}
	}
	
}
