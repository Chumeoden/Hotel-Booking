
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style-home-page.css') }}">
    <style>
        
</style>

    <title>Booking</title>
</head>

<body>

@include('Home.model')
@include('Home.header')
@include('Home.section') 
@include('Home.section2')   
@include('Home.footer')  


<script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>

</html>
