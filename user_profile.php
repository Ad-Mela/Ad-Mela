<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    * {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}
.dot {
    height: 150px;
    width: 150px;
     margin-top:20px;
    margin-bottom:10px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
}

/* Style the header */
header{
    background-color: #666;
    padding: 22px;
    text-align: center;
    font-size: 22px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 300px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
} 
.container {
    padding: 16px;
}
</style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>User_profile</title>
  </head>
  <body>
    <header>
      <strong>AdMela</strong>
    </header>

    <div style="text-align:center">
    <span class="dot"></span>
    </div>
    <div class="container">
          <form action="action_page.php">
        Total number of WebSite Register:<input type="text-align" name="textbox value=""><br><br><br>
        Total number of Advertisers  sold:<input type="text-align" name="textbox value=""><br><br><br>  
    </form>
    </div>
    <div class="container">
      <button><strong>My ADS</strong></button><br><br><br>
      <button><strong>Favirotes</strong></button><br><br><br>
      <button><strong>Add Website</strong></button><br><br>
    </div>
         <footer>
         <h1>Website over</h1>
         </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>