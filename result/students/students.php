

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
	background:#3498db}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<h1>Students<h1>
<p> </p>
<button onclick="location.href = window.location.href='/students/students_show.php';" class="button button1">Show Table</button>
<h2>Insert Record</h2>

<div class="container">
  <form action="students_insert.php" method="post">

    <label for="fname">Name</label>
    <input type="text" id="fname" name="Name">

    <label for="lname">USN</label>
    <input type="text" id="usn" name="USN">

    <label for="lname">Current Semester </label>
    <input type="text" id="cur" name="Cur_sem">

    <label for="batch">Batch</label>
    <input type="text" id="batch" name="Batch">

    <label for="batch">Department Number</label>
    <input type="text" id="deptno" name="Dno">

    <input type="submit" value="Submit">
  </form>
</div>


<h2>Update Record</h2>

<div class="container">
  <form action="student_update.php" method="post">

    <label for="lname">Enter USN of record to be updated</label>
    <input type="text" id="u" name="usnc">

    <h3>Enter Update Details</h3>
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name">

    <label for="lname">USN</label>
    <input type="text" id="u" name="usn">

    <label for="lname">Current Semester</label>
    <input type="text" id="cur_semester" name="cur_sem">

    <label for="batch">Batch</label>
    <input type="text" id="batc" name="batch">

    <label for="batch">Department Number</label>
    <input type="text" id="deptno" name="dno">

    <input type="submit" value="Submit">
  </form>
</div>

<h2>Delete Record</h2>

<div class="container">
  <form action="students_del.php" method="post">

    <label for="lname">Enter USN of record to be Deleted</label>
    <input type="text" id="usn" name="usn">
    <input type="submit" value="Submit">
  </form>
</div>



</body>
</html>

