<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="feedback.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">

<script src="jquery-3.3.1.js" charset="utf-8"></script>
    <script>
      $(function() {
        $('input[type="submit"]').on('click',2000,function() {

          var val = $('#name').val();
          if(val!="")
          {
            $('h2').empty();
          $('#body').css({'background-image': 'url("Image/BG1.jpg")'});

          val = "Thank you "+val+" :)";
            var ele = $("<h2></h2>").text(val);
            $('.container').after(ele);
            $(ele).addClass("msg");
			$('input[type="submit"]').off('click');
          }
          else {
            var ele = $("<h2></h2>").text('Please! write something.');
            $('.container').after(ele);
            $('h2').addClass("msg");
          }
        });
      });
    </script>



</head>
<body id="body" style="background-image: url('about_nav.jpg')'">
    <script src="Particle\particles.js-master\particles.js" charset="utf-8"></script>
    <script src="Particle\particles.js-master\demo\js\app.js" charset="utf-8"></script>

  <div class="back_to_home" style="opacity:0.7; position:absolute; top:0%;">
    <a href="HomePage.html"><img src="Menu/left.svg" alt="" title="Back to Main Page!" width="40"></a>
  </div>

    <div class="container">
      <h1 id="h-element">Feedback</h1>

      <form action="f.php" method="POST">
        <div class="text">
            <input type="text" id="name" name="name" placeholder="Enter your name">
          </div>
          <div class="email">
            <input type="email" id="email" name="email" placeholder="abcd@mumbai.com">
          </div>

        <div class="textarea">
          <textarea id="subject" name="subject" placeholder="Write something here..."></textarea>
        </div>

<!--        <p class="line label">Feel free to add any other comments or suggestions :)</p>
-->
        <div class="row">
          <input type="submit" name="submit_button" value="Submit">
        </div>
      </form>
      <p class="condition">*Feel free to write we won't spam you :)</p>

    </div>




</body>
</html>
