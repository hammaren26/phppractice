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