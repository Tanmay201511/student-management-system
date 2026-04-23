function validateForm() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let course = document.getElementById("course").value;

    if (name == "" || email == "" || course == "") {
        alert("All fields are required!");
        return false;
    }

    return true;
}