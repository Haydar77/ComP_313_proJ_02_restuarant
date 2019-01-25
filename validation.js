var email = document.getElementById("email");
var password = document.getElementById("password");

email.addEventListener("change", checkEmail, false);

function checkEmail() {
    if (!/^.*?@.*?\..*?$/.test(email.value || "")) {
        email.setCustomValidity("Not a valid E-mail Address. Please Type Correct E-mail address");
    } else {
        email.setCustomValidity("");
    }
}

password.addEventListener("change", checkPassword, false);

function checkPassword() {
    var pass = password.value || "";

    if (pass.length < 6) {
        password.setCustomValidity("Password must be at least 6 characters long.");
    } else if (!/[0-9]/.test(pass)) {
        password.setCustomValidity("Password must contain at least one digit.");
    } else if (!/[A-Z]/.test(pass)) {
        password.setCustomValidity("Password must contain at least one uppercase letter.");
    } else {
        password.setCustomValidity("");
    }
}

function submitForm(e) {
    e.preventDefault();

    if (!registration.checkValidity()) {
        return;
    }

    alert("Congratulation. Customer Record Has Been Created Successfully. We Appreciate Your Effort To Be a member with us. ");
}

registration.addEventListener("submit", submitForm, false);