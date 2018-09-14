<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    #container {
      position: absolute;
      display: flex;
      flex-wrap: wrap;
      border: 1px solid #f00;
      width: 650px;
      padding: 1px;
    }

    #container > div {
      border: 1px solid #555;
      flex: 0 0 200px;
      background-color: #ccc;
      margin: 1px;
      font-size: 50px;
      line-height:200px;
      text-align: center;
    }
    </style>
  </head>
  <body>

    <div id="container">
      <div>1</div>
      <div>2</div>
      <div>3</div>
      <div>4</div>
      <div>5</div>
    </div>
  </body>
</html>
