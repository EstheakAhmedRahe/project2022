<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   
    <link rel="stylesheet" href="shopping.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body class="bg ">

  
  <!-- d-flex flex-row-reverse -->
  <section >
  <div class="container mt-4" id="home">

    <div class="container categories"data-aos="slide-up">
      <div class="row">
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center cat1">
            <h1>Watch</h1>
            <img src="categories/watch.png"  alt="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center cat2">
            <h1>Bag</h1>
            <img src="categories/bag.png" alt="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center cat3">
            <h1>Shoes</h1>
            <img src="categories/shoes.png" alt="">
          </div>
        </div>
      </div>
    </div>


    

    <div class="container shoes" id="ball">
      <h3>Ball</h3>
      <div class="card-deck">
        <div class="card" data-aos="fade-left"> 
          <img class="imgx" src="https://media.istockphoto.com/photos/new-cricket-ball-picture-id157441568?k=20&m=157441568&s=612x612&w=0&h=QnhcQpdPIOv_J6ptY0exIMGwp59zKHLHCtNhU0ILrsM=" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Red Cricket Ball</h5>
            <p class="card-text"> Check out our cricket cricut selection for the very best in unique or custom, handmade pieces from our shops.</p>
            <h5>TK.220</h5>
            <button class="buy-now-button">Buy Now >></button>
          </div>
        </div>
        <div class="card" data-aos="fade-right">
          <img class="imgx" src="https://static-01.daraz.com.bd/p/253b64ae49adc56325240532bc5f84f4.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">White Cricket Ball</h5>
            <p class="card-text">White ball is said to be swing more and is smoother than the red ball. White ball is harder than the red cricket ball.</p>
            <h5>TK.580</h5>
            <button class="buy-now-button">Buy Now >></button>
          </div>
        </div>
        <div class="card" data-aos="fade-left">
          <img class="imgx" src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tennis ball</h5>
            <p class="card-text">Check out our tennis ball cricut selection for the very best in unique or custom, handmade pieces from our shops.</p>
            <h5>TK.50</h5>
            <button class="buy-now-button">Buy Now >></button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container" id="backpack"data-aos="fade-left">
      <h3>Backpack</h3>
      <div class="card-deck">
        <div class="card">
          <img class="imgx" src="https://images-na.ssl-images-amazon.com/images/I/81C86ppCpLL._AC_UL210_SR210,210_.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Red Bag</h5>
            <h5>TK.120</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <button class="buy-now-button">Buy Now >></button>
          </div>
        </div>
        <div class="card">
          <img class="imgx mt-4 mb-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcz4fQV0dwgW5FggcbSd2yxMcLC1a88E4R-grhFCvg&s" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Blue Bag</h5>
            <h5>TK.320</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <button class="buy-now-button">Buy Now >></button>
          </div>
        </div>
        <div class="card">
          <img class="imgx" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSK6tdYulV7zLzyRk1Q4Z_vzaFqKrIBKEe9Zg&usqp=CAU" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Black Kaltu Bag</h5>
            <h5>TK.169</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <button class="buy-now-button">Buy Now >></button>
          </div>
        </div>
      </div>
    </div>


    <footer >
    <div class="row"data-aos="fade-left">
      <div class="col-lg-6 col-sm-12 col-md-12 text-white m-auto">
     <form class="cmt" method="post" action="send">     
      <div class="form-group">
           <label for="email">Email :</label>
           <input type="email" class="form-control" name="email" id="email" value="" required>
         </div>

         <div class="form-group">
          <label for="subject">Subject :</label>
          <input type="text" class="form-control" id="subject" name="subject" value=""  required>
        </div>

        <div class="form-group">
          <label for="comment">Comment :</label>
         <textarea name="comment" id="comment" cols="30" rows="3"  type="text" class="form-control" value=""  required></textarea>
        </div>

        <div style="text-align:center;" class="pl-lg-2 m-1 btn-md pb-3" >
          <button type="submit" name="send" class="btn btn-outline-info m-2 submite ">Submit</button>
          <a href="#home"><button type="button" class="btn btn-outline-info m-2 cancel">cancel</button></a>
        </div>

        </form>
      </div>

      <div class="col-lg-3 col-sm-12 col-md-6 text-white pt-5 pb-5 ok">
              <h3 class="text-center pl-4">Quick Links</h3>
              <div class="pl-3">
             <a href="home.php" ><h5 class="text-white pt-3 pl-5">Home Page</h5></a> 
             <a href="login.php" ><h5 class="text-white pt-1  pl-5">Login Page</h5></a> 
             <a href="signin.php" ><h5 class="text-white pt-1  pl-5">SignUp page</h5></a> 
             <a href="login.php" ><h5 class="text-white pt-1  pl-5">Shoping page</h5></a> 
             <a href="#about" ><h5 class="text-white pt-1  pl-5">About Us page</h5></a> 
             <a href="#contact" ><h5 class="text-white pt-1  pl-5">Contact page</h5></a> 
            </div>
        </div>
  
        <div class="col-lg-3 col-sm-12 col-md-6 pt-5 pb-5 ok">
          <h3 class="text-center text-white">Academic links</h3>
          <a href="bca_home.php" ><h5 class="pt-3 pl-5 text-white">BCA Page</h5></a>
          <a href="gca_home.php" ><h5 class="text-white pt-1  pl-5 ">GCA Page</h5></a> 
          <a href="csca_home.php" ><h5 class="text-white pt-1  pl-5">CSCA page</h5></a> 
          <a href="bca_registration.php" ><h5 class="text-white pt-1  pl-5">Registration </h5></a> 
          <a href="#achivement" ><h5 class="text-white pt-1  pl-5">Achivement page</h5></a> 
          <a href="#contact" ><h5 class="text-white pt-1  pl-5">Contact page</h5></a> 
         <div class="text-center pt-4"> 
          <a href="https://www.google.com/"><button type="button" class="btn btn-outline-info leave">Leave</button></a>
        </div>    
      </div>
        </div>
        <section class="row text-white p-3 bg-dark m-auto ">
          <h5 class="col-lg-8 col-sm-12 col-md-8 ">Copyright: Sylhet Cricket Academy ltd 2022</h5>
          <h5 class="col-lg-4 col-sm-12 col-md-4 d-flex flex-row-reverse">Created By Team Osthir</h5>
        </section>
    </footer>
  
  <hr>
    </div>
   


    <!-- for slide picture -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
     <!-- for trasatio -->
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init( {
          offset: 400,
          duration: 1000,
        }
         );
      </script>
  </body>
    </html>