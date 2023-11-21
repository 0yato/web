function changePassword() {
    var newPassword = prompt("Enter your new password:");
    
    if (newPassword !== null && newPassword !== "") {
        document.getElementById("password").value = newPassword;
    }
}