 <!DOCTYPE html>
 <html lang="en" dir="ltr">

 <head>
   <meta charset="utf-8">
   <title>Itemize</title>
   <link rel="icon" href="favicon.ico">


   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Sacramento&display=swap" rel="stylesheet">

   <!-- For Bootstrap styles -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



   <!-- Custom Stylesheet -->
   <link rel="stylesheet" href="css/styles.css">

 </head>

 <body>
   <section class="odd-sec">

     <nav class="navbar navbar-expand-lg">
       <a class="navbar-brand myBrand" href="#"><i class="fas fa-cube myIcon"></i>Itemize</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="main-menu">


         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
             <a class="nav-link" href="#">Link</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Pricing</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Download</a>
           </li>

         </ul>

       </div>
     </nav>



     <!-- Responsive Bootstrap Grid -->
     <div class="row front">

       <div class="col-lg-6 title-img-container">
         <img class="title-img" src="img\title-img-3.png" alt="inventory-img">
       </div>

       <div class="col-lg-6 title-desc-container">
         <h1>Track goods across your business’s supply chain.</h1>
         <h5>Prevent stockouts, manage multiple-locations n' ensure accurate recordkeeping for businesses- big or small!🌞 </h5>
         <button type="submit" class="btn btn-success btn-lg signUpBT" onClick="document.location.href='create_user.php'"><i class="fas fa-user-plus"></i> Sign Up</button>
         <button type="submit" class="btn btn-outline-primary btn-lg LogInBT" onClick="document.location.href='login.php'"><i class="fas fa-sign-in-alt"></i> Log In</button>
       </div>


     </div>


   </section>

   <!-- <section class="even-sec">

   </section>

   <section class="odd-sec">

   </section> -->

   <!-- Bootstrap CDN and needed Js -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

   <!-- Font Awesome CDN for Icons -->
   <script src="https://kit.fontawesome.com/97a0227a13.js" crossorigin="anonymous"></script>



 </body>

 </html>

 <?php ?>