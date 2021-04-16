<html>
  <head>
    <title>Cars</title>
  </head>
  <body>
    <h1>Cars</h1>
    <ul>

      @foreach($cars as $car)
        <li>{{$car->title}}</li>
      @endforeach
    </ul>
  </body>
</html>