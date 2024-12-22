<?php
    html
      <!DOCTYPE html>
      <html lang="ar">
      <head>
          <meta charset="UTF-8">
          <title>نموذج GET</title>
      </head>
      <body>
          <form method="get" action="process_get.php">
              <label for="name">الاسم:</label>
              <input type="text" id="name" name="name">
              <input type="submit" value="إرسال">
          </form>
      </body>
      </html>
    
   
      // process_get.php
      
      if (isset($_GET['name'])) {
          $name = htmlspecialchars($_GET['name']);
          echo "مرحبًا، " . $name;
      } else {
          echo "وئام";
      }
      ?>
      
      
      
      
     