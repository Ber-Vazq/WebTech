/*For this lab you will create an html file named 
"lab6.html" that links to an external JavaScript file named "lab6.js".  
Within the JavaScript file, define and code an object. 
This object should be much like the object sample in the chapter 3 lecture slides 
(starting with slide 36). The object should have at least 3 properties and 2 methods. 
Both methods should produce output using either alert() or document.write(). 
Once you have written this code, create an instance of your object, set 
its properties and run its functions.

Save your files and zip them into a file named "lname_lab6.zip" 
where lname is your last name. Upload your work to Canvas by the deadline for grading.*/

var lecture = {
    name: 'Food Opinions 101',
    capacity: 20,
    students: 12,
    displayCurrent: function () {
        alert("Currently there are this many students: " + this.students);
    },
    checkSeats: function () {
        document.write(this.capacity - this.students);
    }
};

lecture.displayCurrent();

document.write("There is this many seats left: ");
lecture.checkSeats();

document.write("<br>"+"Sign up quick! Seats are filling up fast!!");