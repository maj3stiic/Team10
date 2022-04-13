<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <title>Document</title>
  <style>
    .footer {
      padding: 1.5em;
      color: snow;
      background-color: rgb(44, 44, 119);
      display: flex;
    }

    #btn {
      position: fixed;
      right: 1em;
      bottom: 1em;
      width: 3.7em;
      height: 3.7em;
      color: white;
      background-color: #d65050;
      border-radius: 1.2em;
      border: none;
      box-shadow: 0 0 0.5em rgba(0, 0, 0, 0.25);
      cursor: pointer;
    }

    #btn:active {
      background-color: rgb(123, 4, 4);
    }
  </style>
</head>
<div class="footer">
  Copyright 2022 &copy;
  <button id="btn">
    <i class="material-icons">keyboard_arrow_up</i>
  </button>
</div>
<script>
  const btn = document.querySelector("#btn");
  btn.addEventListener("click", function() {
    //$("html,body").animate({ scrollTop: 0 }, "slow");
    window.scrollTo({
      top: 0,
      left: 0,
      behavior: "smooth"
    });
  });
</script>
</div>
</div>

<body>

</body>

</html>