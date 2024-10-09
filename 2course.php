<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Student Course Selection</title>
  <style>body{
  background-color:pink;
  padding:10px;
  font-family:arial-black;
}
  input[type="text"],input[type="number"],select{
    padding:5px;
  }
    input[type="submit"]{
      background-color:lightgrey;
      color:white;
      cursor:pointer;
      padding:10px 10px;
      border:none;
      border-radius:4px;
    }
  </style>
</head>
<body>
<h1><b><center>Course Registration</center></b></h1>
<form action="course1.php" method="get">
<table align="center">
<tr><th>Name</th>
<td><input type="text" name="name">
</td></tr>
<tr> <th>SSLC mark</th>
<td><input type="number" name="sslcmrk"></td></tr>
<tr><th>HSC Mark</th>
<td><input type="number" name="hscmrk"></td></tr>
<tr><th>
courses
</th><td><select name="course">
<option value=" Computer Scirnce"> Computer Science</option>
<option value="Computer Science with Cognitive Science"> Computer Science with Cognitive System</option>
<option value="Computer Science with Artificial Intelligence"> Computer Science with Artificial Intelligence</option>
<option value="Information Technology"> Information Technology</option>
<option values="B.Sc CS with Cyber Security">B.Sc CS with cyber security</option>
</select></td></tr>
<tr><td><input type="submit" name="submit"></td></tr>
</table></form>
</body>
</html>
