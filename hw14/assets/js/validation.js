// JavaScript Document
function validateEmail(email) {
	var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var emailStatus = document.getElementById('emailStatus');
	emailStatus.classList.add("alert");
	
	if(email.value.match(validRegex)) {
		emailStatus.classList.remove("alert-danger");
		emailStatus.classList.add("alert-success");
		emailStatus.innerHTML="Email is valid!";
	}
	else {
		emailStatus.classList.remove("alert-success");
		emailStatus.classList.add("alert-danger");
		emailStatus.innerHTML="Email is NOT valid!";
	}
}

function valdiateNames(fName, lName) {
	var validRegex = /^[a-zA-Z-'']+$/;
	var fNameStatus = document.getElementById('firstNameStatus');
	var lNameStatus = document.getElementById('lastNameStatus');
	
	fNameStatus.classList.add("alert");
	lNameStatus.classList.add("alert");

	
	if(fName.value.match(validRegex)) {
		fNameStatus.classList.remove("alert-danger");
		fNameStatus.classList.add("alert-success");
		fNameStatus.innerHTML="First Name is valid!";
	}
	else {
		fNameStatus.classList.remove("alert-success");
		fNameStatus.classList.add("alert-danger");
		fNameStatus.innerHTML="First Name is NOT valid!";
	}
	
	if(lName.value.match(validRegex)) {
		lNameStatus.classList.remove("alert-danger");
		lNameStatus.classList.add("alert-success");
		lNameStatus.innerHTML="Last Name is valid!";
	}
	else {
		lNameStatus.classList.remove("alert-success");
		lNameStatus.classList.add("alert-danger");
		lNameStatus.innerHTML="Last Name is NOT valid!";
	}
}

function validatePhoneNo(phoneNo) {
	var regex = /^\d{10}$/;
	var phoneNoStatus = document.getElementById('phoneNoStatus');
	
	phoneNoStatus.classList.add("alert");
	
	if(phoneNo.value.match(regex)) {
		phoneNoStatus.classList.remove("alert-danger");
		phoneNoStatus.classList.add("alert-success");
		phoneNoStatus.innerHTML="Phone Number is valid!";
	}
	else {
		phoneNoStatus.classList.remove("alert-success");
		phoneNoStatus.classList.add("alert-danger");
		phoneNoStatus.innerHTML="Phone Number is NOT valid!";
	}
}

function validateComments(comments) {
	var regex = /^.+$/;
	var commentsStatus = document.getElementById('commentsStatus');
	
	commentsStatus.classList.add("alert");
	
	if(comments.value.match(regex)) {
		commentsStatus.classList.remove("alert-danger");
		commentsStatus.classList.add("alert-success");
		commentsStatus.innerHTML="Comment is valid!";
	}
	else {
		commentsStatus.classList.remove("alert-success");
		commentsStatus.classList.add("alert-danger");
		commentsStatus.innerHTML="Comment is NOT valid!";
	}

}


var fName = document.getElementById('firstName');
var lName = document.getElementById('lastName');
var phoneNo = document.getElementById('phoneNo');
var elEmail = document.getElementById('email');
var comments = document.getElementById('comments');


fName.addEventListener('input', function() {valdiateNames(fName, lName);}, false);
lName.addEventListener('input', function() {valdiateNames(fName, lName);}, false);
phoneNo.addEventListener('input', function() {validatePhoneNo(phoneNo);}, false);
elEmail.addEventListener('input', function() {validateEmail(elEmail);}, false);
comments.addEventListener('input', function() {validateComments(comments);}, false);
