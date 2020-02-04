@extends('student.layout')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<body>
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="margin-top:10%">
                <center>
                    <h1>Passarelles Numeriques - Parent's Counterpart</h1>
                </center>
                <br>
                <div class="item active">
                    <img src="images/pn.jpg" alt="graduation" style="width:100%;height:80%">
                </div>
                <div class="item">
                    <img src="images/hey.jpg" alt="graduation" style="width:100%;height:80%">
                </div>
                <div class="item">
                    <img src="images/im.jpg" alt="batch2021" style="width:100%;height:80%">
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <footer>
        @include('student.footer')
    </footer>
</body>

</html>