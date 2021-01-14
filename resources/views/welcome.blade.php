<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("asset/css/bootstrap.min.css") }}">
</head>
<body>
<div class="container">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ asset("img/me.jpg") }}" width="35px" height="35px" class="rounded-circle" alt="">

        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>
    <nav class="navbar bg-primary">
        <div class="container-fluid p-0">
            <div class="d-flex">
                <h5 class="mb-0 sidebar-open d-lg-none text-white"><i class="fas fa-bars"></i></h5>
                <h5 class="mb-0 ml-3 search-box-open d-lg-none text-white"><i class="fas fa-search"></i></h5>
                <form action="" class="d-none d-lg-inline-block">
                    <div class="search-box">
                        <input type="text" name="search" class="form-control pr-5" placeholder="Search....">
                        <button class="btn text-primary"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset("img/me.jpg") }}" width="35px" height="35px" class="rounded-circle" alt="">

                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>

        </div>
    </nav>

</div>
<script src="{{ asset("asset/jquery.min.js") }}"></script>
<script src="{{ asset("asset/js/popper.js") }}"></script>
<script src="{{ asset("asset/js/bootstrap.min.js") }}"></script>
<script>
    $('.dropdown-toggle').dropdown()

</script>
</body>
</html>
