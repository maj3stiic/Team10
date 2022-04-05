<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    .headercontainer {
      padding: 1.5em;
      color: snow;
      background-color: rgb(44, 44, 119);
      display: flex;
      flex-direction: row;
      justify-content: space-around;
    }

    .title {
      margin-top: 00.5em;
      font-size: larger;
      font-weight: bold;
      margin-right: auto;
    }

    .nav-content {
      display: flex;
      justify-content: space-around;
      flex-direction: row;
      margin: 0.5em;
      color: snow;
      text-decoration: none;
    }
  </style>
</head>
<header class="header">
  <div class="headercontainer">
    <div class="title">EVOTE</div>
    <a href="vote.php">
      <div class="nav-content">Home</div>
    </a>
    <a href="candidates.php">
      <div class="nav-content">Candidates</div>
    </a>
    <a href="signup.php">
      <div class="nav-content">Login</div>
    </a>
  </div>
</header>

<body>

</body>

</html>