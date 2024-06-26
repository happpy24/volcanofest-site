<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <title>Login to Volcano Fest!</title>
  <link rel="icon" href="SVG/logoHexautic.svg">
</head>

<body id="body" onload="setbackground();">
  <div class="links" id="links">
    <a href="https://hexautic.itch.io/volcano-fest" target="_blank">Buy Here!</a>
    <a href="https://www.instagram.com/hexautic/" target="_blank">Instagram</a>
    <a href="https://www.youtube.com/@Hexautic" target="_blank">Youtube</a>
  </div>

  <div class="alertBoxBig">
    <div class="alert" id="alertBox">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      Code is invalid
    </div>
  </div>

  <div class="login">
    <div class="title">
      <img src="SVG/logoVolcanoFest.png">
    </div>

    <div class="form" id="form">
      <form action="checkcode.php" method="post">
        <ul class="flex-outer">
          <li>
            <label for="code">Code</label>
            <input class="field" type="number" name="code" id="code" placeholder="0000" required max="9999" min="1000">
          </li>
          <li>
            <label for="name">Name</label>
            <input class="field" type="text" name="name" id="name" placeholder="Name" required maxlength="12">
          </li>
        </ul>
        <div class="row">
          <button type="submit" id="submit">Join Game</button>
        </div>
      </form>
    </div>
  </div>

  <div>
    <img class="svg" id="svg">
    <img class="svg2" id="svg2">
  </div>

  <a href="https://hexautic.itch.io/" target="_blank" class="team">
    <img src="SVG/logoHexautic.svg"></a>

  <script>
    function loadName() {
      var nameInput = document.getElementById("name");
      nameInput.value = localStorage.getItem("name");
    }
    loadName();

    if (window.location.href.indexOf("index.php?error") > -1) {
      alertBoxJS = document.getElementById('alertBox');
      alertBoxJS.style.display = 'flex';
      var newUrl = window.location.href.replace("?error", "");
      history.replaceState({}, document.title, newUrl);
    }
  </script>
  <!-- saving form to cookies -->
  <script src="cookie.js"></script>
  <!-- changing backgrounds script -->
  <script src="background.js"></script>
</body>

</html>