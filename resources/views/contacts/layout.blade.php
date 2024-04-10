<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background color */
        }
        .container {
            margin-top: 30px; /* Add some top margin */
        }
        .card-header {
            background-color: #343a40; /* Dark background color for card header */
            color: white; /* White text color for card header */
        }
    </style>
</head>
<body>
  
<div class="container">
    @yield('content')
</div>

</body>
</html>
