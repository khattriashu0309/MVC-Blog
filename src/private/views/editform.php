<?php

foreach($data as $user)
{
    $bid=$user->id;
    $bname=$user->blogname;
    $bdesc=$user->blogdesc;
    $bimage=$user->blogimage;
}
?>
<!doctype html>
<html lang="en">

<head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="description" content="">
       <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
       <meta name="generator" content="Hugo 0.88.1">
       <title>Dashboard Template · Bootstrap v5.1</title>

       <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">



       <!-- Bootstrap core CSS -->
       <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">


       <style>
              .bd-placeholder-img {
                     font-size: 1.125rem;
                     text-anchor: middle;
                     -webkit-user-select: none;
                     -moz-user-select: none;
                     user-select: none;
              }

              @media (min-width: 768px) {
                     .bd-placeholder-img-lg {
                            font-size: 3.5rem;
                     }
              }

              #blogid {
                     pointer-events: none;
              }
       </style>


       <!-- Custom styles for this template -->
       <link href="./assets/css/dashboard.css" rel="stylesheet">
</head>

<body>

       <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
              <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Blog Page</a>
              <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
              </button>
              <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
              <div class="navbar-nav">
                     <div class="nav-item text-nowrap">
                            <a class="nav-link px-3" href="http://localhost:8080/pages/login" name="signout">Sign out</a>
                     </div>
              </div>
       </header>

       <div class="container-fluid">
              <div class="row">
                     <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                            <div class="position-sticky pt-3">
                                   <ul class="nav flex-column">
                                          <li class="nav-item">
                                                 <a class="nav-link" aria-current="page" href="http://localhost:8080/pages/dashboard">
                                                        <span data-feather="home"></span>
                                                        My Blogs
                                                 </a>
                                          </li>
                                          <li class="nav-item">
                                                 <a class="nav-link" href="http://localhost:8080/pages/allusers">
                                                        <span data-feather="file"></span>
                                                        All Users
                                                 </a>
                                          </li>

                                          <li class="nav-item">
                                                 <a class="nav-link active" href="#">
                                                        <span data-feather="layers"></span>
                                                        Edit Blog
                                                 </a>
                                          </li>
                                   </ul>
                            </div>
                     </nav>

                     <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                   <h1 class="h2">Blog Details</h1>
                                   <div class="btn-toolbar mb-2 mb-md-0">
                                          <div class="btn-group me-2">
                                                 <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                                                 <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                                          </div>
                                          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                                 <span data-feather="calendar"></span>
                                                 This week
                                          </button>
                                   </div>
                            </div>

                            <form class="row g-3" method="POST" action="http://localhost:8080/pages/editform">
                                   <div class="col-md-2">
                                          <label for="inputZip" class="form-label">Blog ID</label>
                                          <input type="text" class="form-control" id="blogid" name="bid" value=<?php echo $bid ?>>
                                   </div>
                                   <div class="col-md-6">
                                          <label for="inputEmail4" class="form-label">Blog Name</label>
                                          <input type="text" class="form-control" name="bname" id="inputEmail4" value=<?php echo $bname ?>>
                                   </div>
                                   <div class="col-md-6">
                                          <label class="form-label">Blog Description</label>
                                          <textarea rows="4" cols="50" name="bdesc"><?php echo $bdesc?></textarea>
                                   </div>

                                   <div class="col-md-2">
                                          <label for="inputZip" class="form-label">Image Name</label>
                                          <input type="text" class="form-control" id="inputimage" name="bimage" value=<?php echo $bimage ?>>
                                   </div>
                                   <div class="col-12">

                                   </div>
                                   <div class="col-12">

                                          <input type="submit" class="btn btn-primary" name="update" value="Update">

                                   </div>
                            </form>
                     </main>
              </div>
       </div>
       <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>