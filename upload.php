<html>

<head>
  <title>MemePower</title>
  <style>
    html {
      width: 100%;
      height: 100%;
      margin: 0;
    }

    body {
      width: 100%;
      height: 100%;
      margin: 0;
    }

    .gallery {
      position: relative;
    }

    .gallery-background {
      width: 100%;
      height: 100%;
      display: table-cell;
      background-color: #333;
      text-align: center;
      vertical-align: middle;
      padding: 0;
      margin: 0;
      border: 0;
    }

    .gallery-background img {
      display: block;
      max-width: 100%;
      margin: 0 auto;
      max-height: 100%;
    }

    .text {
      color: white;
      font-weight: bold;
      text-align: left;
      padding: 10px 10px;
    }
  </style>
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

</head>

<body>
  <?php
  if (isset($_POST['Submit1'])) {
    // print_r($_POST);exit;
    $temp = explode(".", $_FILES["file"]["name"]);
    $newfilename = 'meme' . '.png';
    move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $newfilename);
  }
  ?>
      <div class="gallery">
        <div class="gallery-background">
        
          <img src="images/meme.png" />
       
          <div class="text">
            <?php echo $_POST['uploader']; ?>
          </div>

        </div>
      </div>
</body>
<script>
  $(function() {
    $('.gallery-background').css('height', $('body').innerHeight())
    $('.gallery-background').css('width', $('body').innerWidth())
    window.onresize = function(event) {
      $('.gallery-background').css('height', $('body').innerHeight())
      $('.gallery-background').css('width', $('body').innerWidth())
    }
  })
</script>

</html>