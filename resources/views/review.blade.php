<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" >
    <title>Sushi</title>
    <link rel="stylesheet" href="{{ asset('css/Vlad/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"> 
</head>
<body>
    <div class="project">
    <!-- left-bar ------------------------------>
<x-leftSideBar />
    <!-- end-left-bar ------------------------------>
    <!-- main ----------------------------------->
    <div class="main">
    <!-- header ----------------------------->
<x-header />
    <!-- main-content ----------------------->
    <div class="main-content">
<x-reviewOne :review="$review"/>

    </div>
    </div>
    <!--end-main ----------------------------------->
    <!-- right-bar ------------------------------------>
<x-rightSideBar />
    <!--end-right-bar ------------------------------------>
    </div>
    <script src="main.js"></script>
</body>
</html>