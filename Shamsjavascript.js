function convert() {
    var amount = document.getElementsByName("amount1")[0].value;
    var dollar = Number(amount) * 0.012;
	var euro = Number(amount) * 0.011;
	var pound = Number(amount) * 0.0091;
	
	var value = 0
	var x = document.getElementById("currency").selectedIndex;
	var y = document.getElementById("currency1").selectedIndex;
	if (x == 0  && y == 1) {
		value = Number(amount) * 0.012;
	}else if (x == 0 && y == 2) {
		value = Number(amount) * 0.011;
	}else if (x == 0  && y == 3) {
		value = Number(amount) * 0.0091;
	}else if (x == 1 && y == 0) {
		value = Number(amount) * 84.67;
	}else if (x == 1 && y == 2) {
		value = Number(amount) * 0.9;
	}else if (x == 1 && y == 3) {
		value = Number(amount) * 0.78;
	}else if (x == 2 && y == 0) {
		value = Number(amount) * 93.93;
	}else if (x == 2 && y == 1) {
		value = Number(amount) * 1.11;
	}else if (x == 2 && y == 3) {
		value = Number(amount) * 0.86;
	}else if (x == 3 && y == 0) {
		value = Number(amount) * 109;
	}else if (x == 3 && y == 1) {
		value = Number(amount) * 1.29;
	}else if (x == 3 && y == 2) {
		value = Number(amount) * 1.16;
	}else {
		value = Number(amount);
	}
	
    document.getElementsByName("amount2")[0].value = value;
	
}
function fortune() {
	 var textArray = ["Only the very weak-minded refuse to be influenced by literature and poetry.","Music expresses that which cannot be put into words and that which cannot remain silent.","You talk when you cease to be at peace with your thoughts.","Every heart sings a song, incomplete, until another heart whispers back. Those who wish to sing always find a song. At the touch of a lover, everyone becomes a poet.","Painting is poetry that is seen rather than felt, and poetry is painting that is felt rather than seen.","A poem begins as a lump in the throat, a sense of wrong, a homesickness, a lovesickness.","The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart.","Trees are poems the earth writes upon the sky, we fell them down and turn them into paper",
"Pulicity is something that we use so that we may record our emptiness."]
	var bored =Math.floor(Math.random() * 9);
	document.getElementById('fortune').innerHTML = textArray[bored]
	
}
function quizQuestion() {
	
	var selectedOption1 = document.querySelector('input[name="1"]:checked').value;
	var selectedOption2 = document.querySelector('input[name="2"]:checked').value;
	var selectedOption3 = document.querySelector('input[name="3"]:checked').value;
	var selectedOption4 = document.querySelector('input[name="4"]:checked').value;
	var selectedOption5 = document.querySelector('input[name="5"]:checked').value;
	
	var i = 0
	if (selectedOption1 == 'c') {
		i+=1;
		document.getElementById('ans1').innerHTML = "CORRECT"
	}else{
		document.getElementById('ans1').innerHTML = "INCORRECT: the correct answer is C. Studying for real"
	}
	
	if (selectedOption2 == 'c') {
		i+=1;
		document.getElementById('ans2').innerHTML = "CORRECT"
	}else{
		document.getElementById('ans2').innerHTML = "INCORRECT: the correct answer is C. Takes some Practice"
	}
	
	if (selectedOption3 == 'b') {
		i+=1;
		document.getElementById('ans3').innerHTML = "CORRECT"
	}else{
		document.getElementById('ans3').innerHTML = "INCORRECT: the correct answer is B. Nope"
	}
	
	if (selectedOption4 == 'a') {
		i+=1;
		document.getElementById('ans4').innerHTML = "CORRECT"
	}else{
		document.getElementById('ans4').innerHTML = "INCORRECT: the correct answer is A. 3,00,000km/s"
	}
	
	if (selectedOption5 == 'a') {
		i+=1;
		document.getElementById('ans5').innerHTML = "CORRECT"
	}else{
		document.getElementById('ans5').innerHTML = "INCORRECT: the correct answer is A. Africa"
	}
	document.getElementById('result').innerHTML = "You answered "+i+" out of 5 questions correctly"
	
	
	//alert(selectedOption)
	
	
	
	
	
	
	
	
	
}