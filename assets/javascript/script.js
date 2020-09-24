// console.log("javascript is working");
var contact = {
"name": "",
"email": "",
"message": ""
}

function handleSubmit(event) {
  //prevent refresh
  event.preventDefault();

  //grab data from input fields 
  contact.name = document.getElementById("name").value;
  contact.email = document.getElementById("email").value;
  contact.message = document.getElementById("message").value;

  console.log(`Contact Name: ${contact.name}, ${contact.email}, ${contact.message}`);


  // clear form
  document.querySelector(".contact-form").reset();
}

//listens for the click on submit button
document.querySelector(".submit").addEventListener("click", handleSubmit);
