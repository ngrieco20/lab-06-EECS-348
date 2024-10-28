document.getElementById('passwordForm').addEventListener('submit', function(event) {
    event.preventDefault(); // prevent form submission

    var password1 = document.getElementById('password1').value;
    var password2 = document.getElementById('password2').value;

    if (password1.length < 8) {
        alert('Password must be at least 8 characters long. Try again!');
    } else if (password1 !== password2) {
        alert('Passwords do not match! Please enter passwords and  try again.');
    } else {
        alert('Passwords match! Password Created!');
    }
});
