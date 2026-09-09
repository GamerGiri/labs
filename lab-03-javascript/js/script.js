let availableSeats = 0;

function checkRegistration() {
  let message = document.getElementById("registrationStatus");

  if (availableSeats > 0) {
  message.textContent = "Registration is currently open.";
  } else {
      message.textContent = "Registration is currently closed.";
  }
}

function checkSeats() {
  let message = document.getElementById("seatMessage");
  if (availableSeats > 0) {
    message.textContent = "Seats are available. Remaining seats: " + availableSeats;
  } else {
    message.textContent = "Sorry, no seats are available.";
  }
}

function showGreeting() {
  let name = document.getElementById("studentName").value;
  let output = document.getElementById("greetingMessage");
  output.textContent = "Welcome, " + name + "!";
}


function showVenue() {
  let message = document.getElementById("venueMessage");
  message.textContent = "The workshop will be held in Computer Lab 2.";
}



function grd() {
  let name = prompt("Enter student name:");
  if ( name.trim() === "") {
    alert("Please enter a name first.");
    return;
  }

  let web = Number(prompt("Enter Web & Internet Programming marks (0-100):"));
  let os = Number(prompt("Enter Operating System marks (0-100):"));
  let embedded = Number(prompt("Enter Embedded System marks (0-100):"));

  let message = document.getElementById("grdMsg");
  
if (isNaN(web) || isNaN(os) || isNaN(embedded) ||
      web < 0 || web > 100 ||
      os < 0 || os > 100 ||
      embedded < 0 || embedded > 100) {
    message.textContent = "Please enter valid marks between 0 and 100 for all subjects.";
    return;
  }

  let total = web + os + embedded;
  let percentage = (total / 300) * 100;
  let grade;

  if (percentage >= 80) {
    grade = "A+";
  } else if (percentage >= 70) {
    grade = "A-";
  } else if (percentage >= 60) {
    grade = "B";
  } else if (percentage >= 50) {
    grade = "C";
  } else if (percentage >= 40) {
    grade = "D";
  } else {
    grade = "Fail";
  }

  message.textContent = name + " — Total: " + total + "/300, Percentage: " +
    percentage.toFixed(2) + "%, Grade: " + grade;
}
