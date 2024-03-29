<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="/resources/css/app.css" />
    <style>
        body {
            background-color: #fbfbfb;
        }

        .sidebarMenu {
            margin: 0;
            padding: 0;
        }

        .position-sticky {
            top: 0;
            z-index: 1000;
            width: 100%;
        }

        .sidebar {
            width: 17%;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            padding: 58px 0 0;
            /* Height of navbar */
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%),
                0 2px 10px 0 rgb(0 0 0 / 5%);
            z-index: 600;
        }

        .sidebar .active {
            border-radius: 5px;
        }

        .sidebar:hover {
            background-color: red;
        }

        .sidebar a {
            width: 100%;
        }

        /* koten */

        h2,
        p {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #e8f1f5;
        }

        .container-fluid {
            width: auto;
            background-color: white;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 20%;
            margin-right: 3%;
            margin-top: 40px;
            margin-bottom: 40px;
            border-radius: 8px;
        }

        .form {
            display: flex;
            flex-direction: column;
            width: 100%;
            background-color: white;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-right: 3%;
            margin-top: 40px;
            border-radius: 8px;
        }

        .pdf-preview {
            max-width: 200px;
            width: 100%;
        }

        .form-group {
            margin-left: 20%;
        }

        .dropdown {
            display: inline-block;
            position: relative;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 100%;
            padding: 0;
            margin: 0;
            border: none;
            border-radius: 0;
            box-shadow: none;
        }

        .dropdown-toggle::after {
            display: none;
        }

        .number {
            width: 5%;
        }

        .action {
            width: 23%;
            text-align: center;
        }

        .form-outline,
        .form-file {
            margin-bottom: 25px;
        }

        .form {
            display: flex;
            margin-bottom: 5%;
        }

        .cover-preview {
            max-width: 500px;
        }

        hr {
            width: 500px;
        }

        .invalid-feedback {
            display: block;
            font-size: 12px;
        }
    </style>
</head>

<body>
    @include('layout.sidebar') @yield('content')

    <script>
        function hide() {
            var x = document.getElementById("filter");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</body>

</html>
