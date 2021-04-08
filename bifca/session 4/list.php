<!DOCTYPE html>
<html>
  <head>
  	<title>list</title>
    <style type="text/css">
      body{
        background-color: lightgreen;
      }
      .list{
        padding-bottom: 30px;
        padding-top: 30px;
        margin-left: 35%;
        margin-right: 35%;
        margin-top: 10%;
        text-align: center;
        background-color: lightblue;
        font-size: 24px;
      }
    </style>
  </head>
  <body>
   <div class="list">
   <form action='table.php' method='POST'>
     <lable>GameID:</lable><input type='number' name='gameID' required><br>
      <lable>GameName:</lable><input type='text' name='gameName' required><br>
       <lable>Company:</lable><input type='text' name='company' required><br>
        <lable>Type:</lable>
          <select name="type1" required>
            <option value="Rogue">Rogue</option>
            <option value="Adventure">Adventure</option>
            <option value="Relax">Adventure</option>
            <option value="Terror">Adventure</option>
            <option value="Other">Other</option>
          </select><br>
         <lable>Introduct:</lable><input type='text' name='introduct' required><br>
          <lable>Price:</lable><input type='number' name='price' required>￥<br>
           <lable>IssueDate:</lable><input type='text' name='issuedate' required><br>
            <lable>URL:</lable><input type='text' name='url' required><br>
             <lable>Coin:</lable><input type='text' name='photo' required><br>

    <input type="submit">

   </form>
 </div>



  </body>
 </html>
