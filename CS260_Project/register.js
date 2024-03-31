function validateForm() {
    console.log("Validating form");
    
    var firstName = document.forms["registrationForm"]["firstname"].value;
    var lastName = document.forms["registrationForm"]["lastname"].value;
    var email = document.forms["registrationForm"]["email"].value;
    var category = document.forms["registrationForm"]["cast"].value;
    var password = document.forms["registrationForm"]["password"].value;
    var rePassword = document.forms["registrationForm"]["re_password"].value;
    
    // Email format validation
    var emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.match(emailFormat)) {
        alert("Invalid Email!!");
        return false;
    }
    
    if (firstName == "") {
        alert("First name must be filled out");
        return false;
    }
    if (lastName == "") {
        alert("Last name must be filled out");
        return false;
    }
    if (category == "") {
        alert("Category must be selected");
        return false;
    }
    if (password == "") {
        alert("Password must be filled out");
        return false;
    }
    if (password != rePassword) {
        console.log("Passwords don't match");
        alert("Passwords do not match");
        return false;
    }
    
    console.log("Form validation successful");
    return true;
}
