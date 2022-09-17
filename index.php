<!DOCTYPE html>
<html lang='ru'>

<head>
   <meta charset='utf-8'>
   <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
   <link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII=" rel="icon" type="image/x-icon">
   <title>Добро пожаловать!</title>
</head>


<div>
   Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Даже путь возвращайся продолжил меня своих рыбными. Переписывается рукописи приставка заглавных ее злых коварный строчка рыбными, щеке свой диких текста!
</div>

<img src="data:text/html;charset=utf-8,%3C!DOCTYPE%20HTML%20PUBLIC%20%22-' +
    '%2F%2FW3C%2F%2FDTD%20HTML%204.0%2F%2FEN%22%3E%0D%0A%3Chtml%20lang%3D%22en' +
    '%22%3E%0D%0A%3Chead%3E%3Ctitle%3EEmbedded%20Window%3C%2Ftitle%3E%3C%2Fhea' +
    'd%3E%0D%0A%3Cbody%3E%3Ch1%3E42%3C%2Fh1%3E%3C%2Fbody%3E%0D%0A%3C%2Fhtml%3E' +
    '%0D%0A" alt="Larry" />



hfkuhg



<form action="" method="get" id="loginForm">
   <label>
      <span>Login</span>
      <input type="text" name="login" id="login" name="login">
   </label>
   <label>
      <span>password</span>
      <input type="password" name="password" id="password">
   </label>
   <input type="submit" value="submit">
</form>
<button id="btn">click</button>


<body>

   <pre>
      <? $a = ['hello', 'Slava'];
      print_r($a); ?>
   </pre>

   <script>
      const btn = document.querySelector('#btn');
      const form = document.getElementById('loginForm');




      // form.onsubmit = function(event) {
      //    event.preventDefault();
      //    const login = document.getElementById('login').value;
      //    const password = document.getElementById('password').value;

      //    const xhr = new XMLHttpRequest()
      //    xhr.open("GET", `login.php?login=${login}&pass=${password}`, true);
      //    xhr.send()
      //    console.log(`login.php?login=${login}&pass=${password}`);
      //    xhr.onreadystatechange = function() {
      //       if (this.readyState != 4) return;
      //       if (this.status != 200) {
      //          console.log(`${this.status} : ${this.statusText}`);
      //       } else {
      //          console.log(this.responseText);
      //       }
      //    }
      // }

      const login = "login";
      const pass = "pass";
      const xhr = new XMLHttpRequest();

      const bodyObj = {
         title: 'foo',
         body: 'bar',
         userId: 1
      }

      const body = `title=${encodeURIComponent(bodyObj.title)}&body=${encodeURIComponent(bodyObj.body)}&userId=${bodyObj.userId}`;
      xhr.open("POST", "file.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
      xhr.send(body)

      xhr.onreadystatechange = function() {
         console.log(xhr.responseText)
      }
   </script>
</body>

</html>