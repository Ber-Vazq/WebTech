/*
Create a function titled getDataFromForm() that:
Obtains the first name and last name from the form elements in index.html

Calls runAjax and sends the two strings as arguments
Create a function titled runAjax(fname, lname) that:

Makes an AJAX request to "./ajax.php" using the GET method. The AJAX request should send the
first and last names as a part of the request.

If the response is a string, change the text of the 
paragraph element with the id "responseString".
*/
function getDataFromForm() {
  var firstName = document.getElementsByName("fName")[0];
  var lastName = document.getElementsByName("lName")[0];

  var firstName = firstNameInput.value;
  var lastName = lastNameInput.value;

  runAjax(firstName, lastName);

  alert("it worked!");
}

function runAjax(fname, lname){
  var xhr = new XMLHttpRequest();

  xhr.open("GET", "./ajax.php?firstName="+ fname + "&lastName=" +lname, true);
  xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status == 200){
      document.getElementById("responseString").innerText = xhr.responseText;
    }
  };
  xhr.send();
}