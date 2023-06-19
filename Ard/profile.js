function resetPassword() {
    var newPassword = prompt("Enter your new password:");

    if (newPassword !== null && newPassword.trim() !== "") {
        // Update the password in the UI
        var passwordElement = document.getElementById("password");
        passwordElement.textContent = "*".repeat(newPassword.length);
    }
}