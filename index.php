<?php
    $HOST = "localhost";
    $USER = "root";
    $PASS = "1234";
    $DATABASE = "JWC";
    $dbcon = mysqli_connect($HOST, $USER, $PASS, $DATABASE);
    mysqli_set_charset($dbcon, "utf8");
    if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))
    {
      if (empty($_POST['name']) && empty($_POST['comment'])) {
        echo "
           <script type='text/javascript'>
             swal('ERROR', 'กรุณาใส่ข้อความ', 'error');
           </script>
       ";
      }
      else {

        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $sql = "INSERT INTO comment (Name, Comment) VALUES ('$name','$comment')";

        mysqli_query($dbcon, $sql);
        mysqli_close($dbcon);
      }
    }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JWC</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
    body {
          background-image: linear-gradient(180deg, #191c79, #3b2f5f, #533d4a, #94652f);
          margin-top: 25px;
          margin-right: 70px;
          margin-left: 70px;
          color: white;
          /* margin-bottom: 100px; */
    }
    hr {
          border-width: 1px;
          border-color: white;
    }
    table {
          background-color: white;
          text-align: center;
          border-collapse: collapse;
          border-radius: 8px;
    }
    table, th, td {
          border-right: 1px solid black;
    }
    img {

          -webkit-transition-duration: 1.0s;
          transition-duration: 1.0s;
    }
    img:hover {
          -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
    }
    #hd {
          border: none;
    }

    .container {
          margin-left: 0px;
          margin-right: 0px;
    }
    .col-9 {
          margin-top: 50px;
    }

    .button {
          background-color: #6eb5f3; /* Green */
          border: none;
          border-radius: 8px;
          color: #6eb5f3;
          padding: 2px 10px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          -webkit-transition-duration: 1.0s;
          transition-duration: 1.0s;
          cursor: pointer;
    }
    .button1 {
          background-color: rgb(45, 45, 45, 0);
          border: 2px solid #6eb5f3;
    }
    .button1:hover {
        background-image: linear-gradient(to right, #6eb5f3, #6ec9f3, #6ed8f3, #6eebf3);
        border: 3px;
        border-image: linear-gradient(to right, #6eb5f3, #6ec9f3, #6ed8f3, #6eebf3);
        color: white;
    }
    .button2 {
        background-color: #a00000;
        color: white;
        padding: 5px 30px;
    }
    .button2:hover {
        background-image: linear-gradient(to right, #a00000, #a02900, #a04800, #a07800);
        border: 3px;
        border-image: linear-gradient(to right, #a00000, #a02900, #a04800, #a07800);
        color: white;
    }
    .button3 {
        background-color: #4a3852;
        color: white;
        padding: 5px 30px;
    }
    .button3:hover {
        background-image: linear-gradient(to right, #4a3852, #8c3487, #8c3478, #8c3446);
        border: 3px;
        border-image: linear-gradient(to right, #4a3852, #8c3487, #8c3478, #8c3446);
        color: white;
    }

    .fa {
        margin-left: -12px;
        margin-right: 8px;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">

        <div class="col">
          <center><img src="img/logo.png" alt="" width="223px" height="223px"></center>
        </div>
        <div class="col-9">
          <h2>JWC 11</h2>
          <h3>Junior Web Master Camp</h3>
          <a href="https://jwc.in.th/">
            <button type="button" class="button button1" name="button"><i class="fas fa-eject"></i><b> Go to our website</b></button>
          </a>
        </div>
      </div>
    </div>
        <hr>


        <h2>History</h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris vitae ultricies leo integer malesuada nunc vel risus. Massa tincidunt nunc pulvinar sapien. Dictum varius duis at consectetur. Enim facilisis gravida neque convallis a cras semper auctor neque. Tellus at urna condimentum mattis pellentesque id nibh tortor. Massa ultricies mi quis hendrerit dolor. Rhoncus dolor purus non enim praesent elementum facilisis leo. Tellus cras adipiscing enim eu turpis. Vitae congue eu consequat ac. Pharetra et ultrices neque ornare aenean euismod elementum. Congue eu consequat ac felis donec et. Gravida arcu ac tortor dignissim convallis aenean et tortor. Cursus sit amet dictum sit amet justo donec enim diam. Quisque id diam vel quam elementum pulvinar etiam non. Mi in nulla posuere sollicitudin aliquam ultrices.
         </p>
        <hr>
        <div class="row">
          <div class="col">

            <h2>Review</h2>
            <form method="post">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name :</label>
                <div class="col-sm-7">
                  <input id="valuedata" type="text" class="form-control" name="name" placeholder="Name">
                </div>
              </div>
              <div class="form-group">
                <label>Comment :</label>
                <textarea id="valuedata" class="form-control" name="comment" rows="3" placeholder="Comment"></textarea>
              </div>
              <div style="text-align: right;">
                <button class="button button2" onclick="document.getElementById('valuedata').value = ''">clear</button>
                <button class="button button3" type="submit" name="submit">submit</button>
              </div>
            </form>
          </div>
          <div class="col">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <?php
                  for($x = 9; $x <= 17; $x++)
                  {
                    echo "<th scope='col' id='hd'>$x</th>";
                  }


                  ?>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">24/05/2019</th>
                  <?php
                  for($x = 9; $x <= 17; $x++)
                  {
                    echo "<td></td>";
                  }


                  ?>
                </tr>
                <tr>
                  <th scope="row">25/05/2019</th>
                  <?php
                  for($x = 9; $x <= 17; $x++)
                  {
                    echo "<td></td>";
                  }


                  ?>
                </tr>
                <tr>
                  <th scope="row">26/05/2019</th>
                  <?php
                  for($x = 9; $x <= 17; $x++)
                  {
                    echo "<td></td>";
                  }


                  ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
  </body>
</html>
