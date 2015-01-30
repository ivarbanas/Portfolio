
$(document).ready(function(){
	var form = $("#sentForm");
	var name = $("#name");
	var nameInfo = $("#nameInfo");
	var email = $("#email");
	var emailInfo = $("#emailInfo");
	var message = $("#message");
	
	name.blur(validateName);
	email.blur(validateEmail);
	name.keyup(validateName);
	message.keyup(validateMessage);
	form.submit(function(){
		if(validateName() & validateEmail() & validateMessage())
			return true
		else
			return false;
	});
	function validateEmail(){
		var a = $("#email").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
		if(filter.test(a)){
			email.removeClass("error");
			emailInfo.text("On that E-mail address You will get answer.");
			emailInfo.removeClass("error");
			return true;
		}
		else{
			email.addClass("error");
			emailInfo.text("Please type a valid e-mail address!");
			emailInfo.addClass("error");
			return false;
		}
	}
	function validateName(){
		if(name.val().length < 4){
			name.addClass("error");
			nameInfo.text("Please type a name with more than 3 letters!");
			nameInfo.addClass("error");
			return false;
		}
		else{
			name.removeClass("error");
			nameInfo.text("Is that Your real name?");
			nameInfo.removeClass("error");
			return true;
		}
	}
	function validateMessage(){
		if(message.val().length < 10){
			message.addClass("error");
			return false;
		}
		else{			
			message.removeClass("error");
			return true;
		}
	}
});