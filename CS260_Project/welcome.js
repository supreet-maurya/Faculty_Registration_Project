
$(function() {
    $("#dob").datepicker({
        dateFormat: 'dd/mm/yy', // Set the date format
        changeMonth: true, // Allow changing of months
        changeYear: true, // Allow changing of years
        yearRange: "-100:+0", // Restrict years from 100 years ago to the current year
        maxDate: 0 // Restrict selection to today or earlier
    });
});


// Function to validate date format (DD/MM/YYYY) and check for valid month and day
function validateDateFormat(dateString) {
    // Regular expression for date format (DD/MM/YYYY)
    var dateFormat = /^\d{2}\/\d{2}\/\d{4}$/;
    if (!dateFormat.test(dateString)) {
        return false; // Date format is incorrect
    }

    // Parse the entered date
    var parts = dateString.split('/');
    var day = parseInt(parts[0], 10);
    var month = parseInt(parts[1], 10);
    var year = parseInt(parts[2], 10);

    // Check for valid month (1 to 12)
    if (month < 1 || month > 12) {
        return false; // Invalid month
    }

    // Check for valid day
    var daysInMonth = new Date(year, month, 0).getDate();
    if (day < 1 || day > daysInMonth) {
        return false; // Invalid day
    }

    // Check for leap year (February)
    if (month === 2 && day === 29 && !(year % 4 === 0 && (year % 100 !== 0 || year % 400 === 0))) {
        return false; // Invalid leap year
    }

    // Date format, month, and day are valid
    return true;
}





function validateForm() {

    // Check if the logout button is clicked
    if ($('#logout').length) {
        // Logout button is clicked, no need for validation
        return true;
    }

    // Get form elements
    var advNum = document.getElementById('adv_num').value;
    var post = document.getElementById('post').value;
    var dept = document.getElementById('dept').value;
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var nationality = document.getElementById('nationality').value;
    var dob = document.getElementById('dob').value;
    var gender = document.getElementById('gender').value;
    var mstatus = document.getElementById('mstatus').value;
    var idProof = document.getElementById('id_proof').value;
    var idCardFile = document.getElementById('id_card_file').value;
    var fatherName = document.getElementById('father_name').value;
    var mobile = document.getElementById('mobile').value;
    var email = document.getElementById('email').value;
    var mobile2 = document.getElementById('mobile_2').value;
    var email2 = document.getElementById('email_2').value;
    var landline = document.getElementById('landline').value;

    // Regular expressions for email and mobile number validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var mobileRegex = /^\d{10}$/;
    var landlineRegex = /^\d{3}-\d{7}$/; // Regex for landline phone number (AAA-BBBBBBB)

    // Check if all required fields are filled
    if (advNum.trim() === '' || post.trim() === '' || dept.trim() === '' || fname.trim() === '' || lname.trim() === '' ||
        nationality.trim() === '' || dob.trim() === '' || gender.trim() === '' || mstatus.trim() === '' ||
        idProof.trim() === '' || idCardFile.trim() === '' || fatherName.trim() === '' || mobile.trim() === '' || email.trim() === '') {
        alert('Please fill in all required fields.');
        return false;
    }

    // Check if email is valid
    if (!emailRegex.test(email)) {
        alert('Please enter a valid primary email address.');
        return false;
    }

    // Check if mobile number is valid
    if (!mobileRegex.test(mobile)) {
        alert('Please enter a valid primary mobile number.');
        return false;
    }

    // Check if second email is valid
    if (email2.trim() !== '' && !emailRegex.test(email2)) {
        alert('Please enter a valid alternate email address.');
        return false;
    }

    // Check if second mobile number is valid
    if (mobile2.trim() !== '' && !mobileRegex.test(mobile2)) {
        alert('Please enter a valid alternate mobile number.');
        return false;
    }

    // Check if landline number is valid
    if (landline.trim() !== '' && !landlineRegex.test(landline)) {
        alert('Please enter a valid landline number in the format AAA-BBBBBBB.');
        return false;
    }

    // Check if mobile and mobile2 are the same
    if (mobile === mobile2) {
        alert('Primary mobile number and alternate mobile number cannot be the same.');
        return false;
    }

    // Check if email and email2 are the same
    if (email === email2) {
        alert('Primary email address and alternate email address cannot be the same.');
        return false;
    }

    // Validate date of birth
    if (!validateDateFormat(dob)) {
        alert('Please enter a valid date of birth in DD/MM/YYYY format.');
        return false;
    }

    // Form is valid, allow submission
    return true;
}



// Add form submission event listener
document.getElementById('submit').addEventListener('click', function(event) {
    // Validate form before submission
    if (!validateForm()) {
        // If form is not valid, prevent default form submission
        event.preventDefault();
        return false;
    }
});

// Add click event listener to the logout button
document.getElementById('logout').addEventListener('click', function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();
    
    // Perform logout process here
    // For example, redirect the user to the logout page
    window.location.href = 'logout.php';
});



