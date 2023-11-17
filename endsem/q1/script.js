
function validateForm() {
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var password = document.getElementById('password').value;
    
    // Email validation
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert('Please enter a valid email address.');
        return false;
    }
    
    // Phone number validation
    var phonePattern = /^[069][0-9]{9}$/;
    if (!phonePattern.test(phone)) {
        alert('Phone number should start with 0 or 6 or 9 and must be 10 digits long.');
        return false;
    }
    
    // Name validation
    var namePattern = /^[A-Za-z]+$/;
    if (!namePattern.test(fname) || !namePattern.test(lname)) {
        alert('Names must be alphabetic.');
        return false;
    }
    
    // Password validation
    var lowerCaseLetters = /[a-z].*[a-z]/; // check for at least 2 lowercase letters
    var upperCaseLetters = /[A-Z].*[A-Z]/; // check for at least 2 uppercase letters
    var specialCharacter = /[!@#$%^&*(),.?":{}|<>]/; // check for at least 1 special character
    if (password.length < 10 || 
        !lowerCaseLetters.test(password) || 
        !upperCaseLetters.test(password) || 
        !specialCharacter.test(password)) {
        alert('Password must be at least 10 characters long with at least 2 lowercase letters, 2 uppercase letters, and 1 special character.');
        return false;
    }
    
    // If all validations pass
    return true;
}
