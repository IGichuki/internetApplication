<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    
    <title></title>
</head>
<body>

    <form action="process_register.php" method="post">
     
        <input type="text" placeholder="Enter Firstname" name="Firstname" id="Firstname" required>
    <p>
    <input type="text" placeholder="Enter Secondname" name="Secondname" id="Secondname" required></p>

    <p>
    <input type="text" placeholder="Enter Email" name="email" id="email" required></p>

    <p>
    <input type="password" placeholder=" password input" name="psw" id="psw" required></p>

    <p>
    <input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat" required>
    </p>
   
    <tr>
      <td>
        phone number;
      </td>
      <td>
        <select>
          <option>254</option>
          <option>221</option>
          <option>231</option>
          <option>271</option>
          <option>324</option>
        </select>
        <input type="phone number" placeholder=" 26627..."name="phoneNumber">

      </td>
    </tr>


        <input type="submit" value="Submit">
    </form>

</body>
</html>