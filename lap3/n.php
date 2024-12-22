<!DOCTYPE html>
      <html lang="ar">
      <head>
          <meta charset="UTF-8">
          <title>نموذج POST</title>
      </head>
      <body>
          <form method="post" action="process_post.php">
              <label for="name">الاسم:</label>
              <input type="text" id="name" name="name">
              <input type="submit" value="إرسال">
          </form>
      </body>
      </html>
      
      <?php
      // process_post.php
      
      if (isset($_POST['name'])) {
          $name = htmlspecialchars($_POST['name']); 
          echo "مرحبًا، " . $name;
      } else {
          echo "وئام";
      }
      ?>