<html>

<head>
  <title>MemePower</title>
  <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <style>
    .wrapper {
      background-color: #fff;
      padding: 25px;
      border-radius: 5px;
      width: 360px;
      max-width: 100%;
      margin: 50px auto;
      align-self: center;
      box-sizing: border-box;
    }

    header {
      border-bottom: 1px solid #ddd;
      padding-bottom: 10px;
      margin-bottom: 20px;
      display: flex;
    }

    h1 {
      flex: 1;
      padding: 0;
      margin: 0;
      font-size: 16px;
      letter-spacing: 1px;
      font-weight: 700;
      color: #7A7B7F;
    }

    header span {
      flex: 1;
      text-align: right;
      font-size: 12px;
      color: #999;
    }

    .ways ul {
      display: flex;
      list-style: none;
      padding: 0;
      border-radius: 5px;
      overflow: hidden;
    }

    .ways li {
      align-self: center;
      flex: 1;
      background-color: #F5F7FA;
      text-align: center;
      cursor: pointer;
      padding: 15px 0;
      color: #999;
      text-transform: uppercase;
      font-weight: 500;
      font-size: 12px;
      letter-spacing: 1px;
      border: 1px solid #ddd;
    }

    .ways li:first-child {
      border-right: 0;
    }

    .ways li:last-child {
      border-left: 0;
    }

    .ways li.active {
      border: 2px solid #1AA1E5;
      color: #66676C;
    }

    .ways li.active::before {
      content: '\f00c';
      font-family: 'fontawesome';
      color: #1AA1E5;
    }

    .ways li:not(.active) {
      padding: 16px 0;
    }

    section {
      display: none;
    }

    section.active {
      display: block;
    }

    section input,
    section textarea {
      display: block;
      width: 100%;
      box-sizing: border-box;
      border: 1px solid #ddd;
      outline: 0;
      background-color: #F5F7FA;
      padding: 10px;
      margin-bottom: 10px;
      letter-spacing: 1.4px;
    }

    section textarea {
      min-height: 200px;
    }

    section select {
      display: none;
    }

    .select-option {
      background-color: #F5F7FA;
      color: #999;
      font-size: 15px;
      position: relative;
      cursor: pointer;
    }

    .select-option::before {
      content: '\f107';
      font-family: 'fontawesome';
      position: absolute;
      right: 0;
      top: 0;
      margin-top: 9px;
      margin-right: 10px;
      font-size: 20px;
    }

    .select-option div:not(.option) {
      padding: 10px 10px;
      border: 1px solid #ddd;
    }

    .select-option div:last-child,
    .select-option .head {
      border-bottom: 1px solid #ddd;
    }

    .select-option .option {
      display: none;
    }

    .select-option .option div {
      text-transform: capitalize;
    }

    .select-option.active .option {
      display: block;
      position: absolute;
      width: 100%;
      background-color: #F5F7FA;
      box-sizing: border-box;
      padding: 0;
      margin-top: -1px;
      z-index: 2;
    }

    .select-option .option div {
      border-bottom: 0;
    }

    .images {
      display: flex;
      flex-wrap: wrap;
      margin-top: 20px;
    }

    .images .img,
    .images .pic {
      flex-basis: 100%;
      margin-bottom: 10px;
      border-radius: 4px;
    }

    .images .img {
      width: 112px;
      height: 93px;
      background-size: cover;
      margin-right: 10px;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }

    .images .img:nth-child(3n) {
      margin-right: 0;
    }

    .images .img span {
      display: none;
      text-transform: capitalize;
      z-index: 2;
    }

    .images .img::after {
      content: '';
      width: 100%;
      height: 100%;
      transition: opacity .1s ease-in;
      border-radius: 4px;
      opacity: 0;
      position: absolute;
    }

    .images .img:hover::after {
      display: block;
      background-color: #000;
      opacity: .5;
    }

    .images .img:hover span {
      display: block;
      color: #fff;
    }

    .images .pic {
      background-color: #F5F7FA;
      align-self: center;
      text-align: center;
      padding: 40px 0;
      text-transform: uppercase;
      color: #848EA1;
      font-size: 12px;
      cursor: pointer;
    }

    @media screen and (max-width: 400px) {
      .wrapper {
        margin-top: 0;
      }

      header {
        flex-direction: column;
      }

      header span {
        text-align: left;
        margin-top: 10px;
      }

      .ways li,
      section input,
      section textarea,
      .select-option .head,
      .select-option .option div {
        font-size: 8px;
      }

      .images .img,
      .images .pic {
        flex-basis: 100%;
        margin-right: 0;
      }
    }

    .wrapper footer ul {
      margin: 0;
      margin-top: 30px;
      display: flex;
      list-style: none;
      padding: 0;
    }

    .wrapper footer ul li {
      flex: 1;
    }

    .wrapper footer li span {
      text-transform: capitalize;
      cursor: pointer;
    }

    .wrapper footer li:first-child {
      color: #999;
      font-size: 12px;
    }

    .wrapper footer li:first-child span {
      display: inline-block;
      border-bottom: 1px solid #ddd;
    }

    .wrapper footer li:last-child span {
      background-color: #22A4E6;
      padding: 10px 20px;
      color: #fff;
      border-radius: 3px;
    }



    footer {
      text-align: center;
      margin-bottom: 20px;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: #fff;
      font-size: 12px;
    }

    footer a {
      color: #fff;
      text-decoration: none;
      border-bottom: 1px solid #fff;
      padding-bottom: 5px;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <header>
      <h1>Upload your Meme</h1>
    </header>
    <form action="upload.php" enctype="multipart/form-data" method="post">
      <div class="sections">
        <section class="active">
          <input type="text" name="uploader" placeholder="Uploaded by" id="title" />
          <div class="images">
            <div class="pic">
              <input type="file" id="image-file" name="file"><br />
            </div>
          </div>
        </section>
      </div>
      <footer>
        <ul>
          <li>
            <input type="submit" value="Upload" name="Submit1">
          </li>
        </ul>
      </footer>
    </form>

  </div>
  <script type="text/javascript">
    $('#image-file').bind('change', function() {
      if ((this.files[0].size / 1024 / 1024).toFixed(2) > 5) {
        alert("Please upload file less than 5MB");
      }
    });
  </script>
</body>


</html>