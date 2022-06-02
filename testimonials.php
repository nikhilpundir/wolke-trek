<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Testimonial</title>
  <link rel="stylesheet" href="style.css">
  
  <style>
    body {
      background-size: cover;
      background: url("https://source.unsplash.com/1600x900/?mountain");
      background-repeat: no-repeat;
    }
  </style>
</head>

<body>
<?php require 'partials/_nav.php'  ?>
<br><br><br>
  <section class="contact" id="contact">
    <h1 class="heading">
      <span>t</span>
      <span>e</span>
      <span>s</span>
      <span>t</span>
      <span>i</span>
      <span>m</span>
      <span>o</span>
      <span>n</span>
      <span>i</span>
      <span>a</span>
      <span>l</span>
      <span>s</span>

    </h1>



    <br>
    <h1 class="test-h1">REVIEWS BY OUR CUSTOMERS</h1>


    <div class="test-container">
      <img src="images/download.jpg" alt="Avatar" style="width:90px">
      <p><span class="test-span">Phulan Devi.</span><b> WANDERER</b></p>
      <p class="test-p">With WolkeTrek I had so much fun, it was my first trek with WolkeTrek but i am sure it won’t be the last. The
        amount of efforts and the planning and management by every team member is applauding.The quality of food was so
        so so so nice that all the people enjoyed it like a family </p>
    </div>

    <div class="test-container">
      <img src="images/download (1).jpg" alt="Avatar" style="width:90px">
      <p><span class="test-span">Baburao</span><b> TRAVELLER</b></p>
      <p class="test-p">This was my 2nd time with WolkeTrek, and guaranteed first class experience from literally everyonre involved
        with this trek,it was a bliss and so heartfelt from everyone. Loved it,The team and the people in the front
        lines are the representatives of the core value WolkeTrek tries to inspire in each trekker's life.</p>
    </div>


    <div class="test-container">
      <img src="images/download (2).jpg" alt="Avatar" style="width:90px">
      <p><span class="test-span">Lala Bhai.</span><b>RIDER</b></p>
      <p class="test-p">Words shall fail for me when I start going into every little detail for every little detail is intricately
        beautiful, touching, to my very core, every time I think about it. The entire experience is one which brings
        tears to my eyes when I reflect upon it. Thank you WolkeTrek.</p>
    </div>

    <div class="content">

      <a href="book.php" class="btn">discover more</a>
    </div>
  </section>
  <footer class="footer">
    <h1 class="credit"> <span> &copy; WOLKE TREK </span> | all rights reserved! </h1>
  </footer>
</body>

</html>