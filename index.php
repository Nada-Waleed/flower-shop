<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style">
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300;600&family=Dancing+Script:wght@400;700&family=Lato:ital,wght@0,300;0,400;1,300&family=Open+Sans:ital,wght@0,300;0,400;1,300&family=Playfair+Display:ital,wght@0,400;1,600&family=Roboto:ital,wght@0,300;1,100&family=Work+Sans:ital,wght@0,200;0,400;0,500;0,600;0,800;1,200;1,400;1,500&family=Yanone+Kaffeesatz:wght@200;300;500&display=swap" rel="stylesheet">

    <title>flower</title>
</head>
<body>
  <?php
      
       if(isset($_POST['submit'])){
        $type=$_POST['type'];
        $place=$_POST['place'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $errors =array();
  
       
        session_start();
        include 'conn.php';
          $sql="insert into booking (type , place , date , time, name,phone)
                values (?,?,?,?,?,?)";
  
          $stmt=$conn->prepare($sql);
          $stmt->bindParam(1,$type,PDO::PARAM_STR);
          $stmt->bindParam(2,$place,PDO::PARAM_STR) ;  
          $stmt->bindParam(3,$date,PDO::PARAM_STR) ; 
          $stmt->bindParam(4,$time,PDO::PARAM_STR);
          $stmt->bindParam(5,$name,PDO::PARAM_STR) ;  
          $stmt->bindParam(6,$phone,PDO::PARAM_STR) ; 
          $stmt->execute();
          $success =" Booked successfully";        
       }
     
  ?>

       <!--start navbar-->
       
       <nav class="navbar navbar-expand-lg sticky-top " >
        <div class="container">
          <a class="navbar-brand text-light pt-2" href="#" style="font-weight: bold;letter-spacing: 3px;">Floral Studio</a>
       
          <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3 active text-light" aria-current="page" href="#home">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3 text-light" href="#about">ABOUT US</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link p-2 p-lg-3 text-light" href="#portofolio">PORTFOLIO</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3 text-light" href="#Pricing">PRICING</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  p-2 p-lg-3 text-light" href="#contact">CONTACT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  p-2 p-lg-3 text-light" href="login.php">LOGIN</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!--end navbar-->
    <!-- home -->
    <section class="intro" id="home">
                    <div class="sec1">
                        <div class="container">
                            <div class="head">
                                <h1 >Excellent bouquets for you</h1>   
                            </div>
                        </div>
                    </div>
    </section>
        <div class="container home pt-5 pb-5" style=" color: #1b745e;">
            <div class="row ">
            <div class="col-md-1 col-sm-1"></div>
                <div class="col-md-4 col-sm-11 pt-5 ">
                    <h1 class="pt-5">Local Florist Just For You</h1>
                    <p class=" pt-2">Lorem ipsum dolor sit amet, pri autem nemore bonorum te. Autem fierent ullamcorper ius no. Te tibique intellegam mediocritatem his, est quis.</p>
                    <p class=" pt-3"style="font-family:Cursive;">Mary Byrd, owner</p>
                    <img class="sign" src="img/sign.PNG" alt="">

                </div>
                <div class="col-md-1 col-sm-1"></div>
                <div class="col-md-5 col-sm-12">
                    <img src="img/f1.PNG" alt="" class="img-fluid " style="height:500px ; width: 600px;">

                </div>
                
            </div>
        </div>
        <!-- Services -->
        <div class="services" style="background-color:#eae8eb2e ;" id="about">
            <div class="container pt-5 pb-5 ">
                <div>  
                 <h5 class="text-center pt-5" style="font-style:italic;">Services</h5>
                 <h4 class="text-center pt-3" >We offer a variety of floral services, from unique bouquets to event decoration.</h4>
                </div> 
                <div class="container align-items-center text-center pt-5 pb-5">
                    <div class="row se"  >
                    <div class="col-md-0 col-lg-1" ></div>
                        <div class="col-md-12 col-lg-3">
                            <img src="img/f2.PNG" class="img-fluid">
                            <h5 class="serv pt-4"  style="background-color: white; height:83px;">Events</h5>
                           
                         </div>

                         <div class="col-md-12 col-lg-3">
                            <img src="img/f3.PNG" class="img-fluid">
                            <h5 class=" serv pt-4" style="background-color: white; height:83px;">Decoration</h5>
                            
                         </div>

                         <div class="col-md-12 col-lg-3">
                            <img src="img/f4.PNG" class="img-fluid">
                            <h5 class="serv pt-4"  style="background-color: white; height:83px;">Floral Design</h5>
                            
                         </div>
                    </div>
               </div>
               <div class="container mission pt-5 pb-5">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-lg-5 col-md-11 mission-color pt-5">
                        <div class="pt-5">
                        <h2 class="pt-5 text-center">Our Mission</h2>
                        <p class="pt-2 text-center">Lorem ipsum dolor sit amet, pri omnium verterem id, sit labore dicunt an, ea civibus.</p>
                        <button type="button" class="btn btn-light mt-3 " style="font-weight:bold ;color:#1b745e;margin-left:40%;">Read More</button>
                        </div>
                    </div>
                    
                    <div class="col-lg-5 col-md-11">
                        <img src="img/serve.png" class="img-fluid mission-img" >
                    </div>
                    <div class="col-1"></div>
                </div>
               </div>

 
        <!-- 777777777777 -->
        <div class="container align-items-center text-center pt-5 pb-5">
                    <div class="row review"  >
                        <div class="col-md-6 col-lg-3" >
                            <h5 class=" pt-4" style="font-weight:bold; font-size:25;" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-emoji-smile " viewBox="0 0 16 16" style="font-weight:bold ;margin-right:3px;">
                              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                              <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                            </svg>Happiness</h5>
                            <p>Vis ne postulant principes</br> accommodare ius modo</p>
                          </div>

                         <div class="col-md-6 col-lg-3">
                            <h5 class="  pt-4" style="font-weight:bold; font-size:25;" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16" style="font-weight:bold ;margin-right:3px;">
                             <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                            </svg>Organic</h5>
                            <p>Vis ne postulant principes </br> accommodare ius modo</p>    
                         </div>

                         <div class="col-md-6 col-lg-3">
                            <h5 class=" pt-4"  style="font-weight:bold; font-size:25;" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16" style="font-weight:bold ;margin-right:3px;">
                             <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                            </svg>Freshness</h5>
                            <p>Vis ne postulant principes</br> accommodare ius modo</p>
                         </div>

                         <div class="col-md-6 col-lg-3">
                            <h5 class=" pt-4" style="font-weight:bold; font-size:25;" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16" style="font-weight:bold ;margin-right:3px;">
                             <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            </svg>Delivery</h5>
                            <p>Vis ne postulant principes</br> accommodare ius modo</p>
                          </div>
                    </div>
              </div>
               
            </div>
      </div>

      <!-- Pricing -->
      <section class="price pt-5 pb-5" id="Pricing">
        <div class="container price-2 ">
          <h5 class="text-center pt-5" style="font-style:italic;">Devoted to wonderful beauty</h5>
          <h4 class="text-center pt-5 pb-5">Flowers Pricing</h4>
          <div class="row">
            <div class="col-lg-3 col-md-6">
            <div class="f-price shadow-lg p-3 mb-5 bg-body rounded">
              <img src="img/price1.PNG" class="img-fluid" style="height: 200px;">
              <h4 class="text-center pt-2" style="text-transform: uppercase;">Sun Flower</h4>
              <h5 class="text-center ">50$</h5>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 ">
              <div class="f-price shadow-lg p-3 mb-5 bg-body rounded">
            <img src="img/p.PNG" class="img-fluid" style="height: 200px;">
              <h4 class="text-center pt-2" style="text-transform: uppercase;">MORNING SWEET</h4>
              <h5 class="text-center ">50$</h5>
              </div>
            </div>
            

            <div class="col-lg-3 col-md-6">
            <div class="f-price shadow-lg p-3 mb-5 bg-body rounded">
            <img src="img/price3.PNG" class="img-fluid" style="height: 200px;">
              <h4 class="text-center pt-2" style="text-transform: uppercase;">Fuchsia Fantasy</h4>
              <h5 class="text-center ">50$</h5>
            </div>
            </div>

            <div class="col-lg-3 col-md-6">
            <div class="f-price shadow-lg p-3 mb-5 bg-body rounded">
            <img src="img/price22.PNG" class="img-fluid" style="height: 200px;">
              <h4 class="text-center pt-2" style="text-transform: uppercase;">Soloist</h4>
              <h5 class="text-center ">50$</h5>
            </div>
            </div>
          </div>

                 <!-- price 2 -->
           <div class="row">
            <div class="col-lg-3 col-md-6">
            <div class="f-price shadow-lg p-3 mb-5 bg-body rounded">
              <img src="img/price5.PNG" class="img-fluid" style="height: 200px;">
              <h4 class="text-center pt-2" style="text-transform: uppercase;">Roses</h4>
              <h5 class="text-center ">50$</h5>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 ">
              <div class="f-price shadow-lg p-3 mb-5 bg-body rounded">
            <img src="img/price6.PNG" class="img-fluid" style="height: 200px;">
              <h4 class="text-center pt-2" style="text-transform: uppercase;">Colourful Roses</h4>
              <h5 class="text-center ">50$</h5>
              </div>
            </div>
            

            <div class="col-lg-3 col-md-6">
            <div class="f-price shadow-lg p-3 mb-5 bg-body rounded">
            <img src="img/price7.PNG" class="img-fluid" style="height: 200px;">
              <h4 class="text-center pt-2"style="text-transform: uppercase;">SURPRISING</h4>
              <h5 class="text-center ">50$</h5>
            </div>
            </div>

            <div class="col-lg-3 col-md-6">
            <div class="f-price shadow-lg p-3 mb-5 bg-body rounded">
            <img src="img/price8.PNG" class="img-fluid" style="height: 200px;">
              <h4 class="text-center pt-2" style="text-transform: uppercase;">RED BY ROSES</h4>
              <h5 class="text-center ">50$</h5>
            </div>
            </div>
          </div>


        </div>
      </section>

      <!-- contact -->
      <div class="contact pb-5" id="contact">
        <div class="container">
                <div>  
                 <h5 class="text-center pt-5" style="font-style:italic;">Contacts</h5>
                 <h2 class="text-center pt-3" >Where to find</h2>
                </div> 
                <div class="container align-items-center  pt-5 pb-5">
                    <div class="row conn"  >
                    <!-- <div class="col-md-0 col-lg-1" ></div> -->
                         <div class="col-md-12 col-lg-3" style="background-color: #d8e3d5; padding-left:50px;">
                            <h5 class="pt-5 pb-3 text-center">Toronto</h5>
                            <p>Say hello</p>
                            <p style="font-weight:bold ;">email@site.com</p>
                            <p>Phone</p>
                            <p style="font-weight:bold ;">+369 35 353562 3544</p>
                            <p >Address</p>
                            <p style="font-weight:bold ;"class="pb-5">4th Avenue 4856, New York</p>
                            
                           
                         </div>
                         <div class="col-md-0 col-lg-1" ></div>

                         <div class="col-md-12 col-lg-3" style="background-color: #fffbf6;padding-left:50px;">
                         <h5 class="pt-5 pb-3 text-center">Paris</h5>
                            <p>Say hello</p>
                            <p style="font-weight:bold ;">email@site.com</p>
                            <p>Phone</p>
                            <p style="font-weight:bold ;">+369 35 353562 3544</p>
                            <p >Address</p>
                            <p style="font-weight:bold ;"class="pb-5">4th Avenue 4856, New York</p>
                            
                         </div>
                         <div class="col-md-0 col-lg-1" ></div>

                         <div class="col-md-12 col-lg-3" style="background-color: #fef1e6;padding-left:50px;">
                         <h5 class="pt-5 pb-3 text-center">Barcelona</h5>
                            <p>Say hello</p>
                            <p style="font-weight:bold ;">email@site.com</p>
                            <p>Phone</p>
                            <p style="font-weight:bold ;">+369 35 353562 3544</p>
                            <p >Address</p>
                            <p style="font-weight:bold ;"class="pb-5">4th Avenue 4856, New York</p>
                            
                         </div>
                    </div>
               </div>
        </div>
      </div>
     <!-- booking -->
     <div class="book pt-5 pb-5" >
      <div class="container">
        <h2 class="pt-5 text-center">Shop Flowers</h2>
        <p style="text-align: center; font-style:italic;">summer sale under 50%</p>
      <div class="row">
        <div class="col-lg-6 col-md-12">
        <form method="POST" action="">
        <?php
           if(isset($success)){
            echo '<div class="alert alert-primary" role="alert">'.$success.'</div>';
           }
           
           if(isset($errors)){
            foreach($errors as $error){
                echo '<div class="alert alert-warning" role="alert">'.$error.'</div>';
            }
           }
          ?> 
        
      <div class="mb-3">
        <label class="form-label">Chose Type</label>
      <select class="form-select" aria-label="Default select example" name="type" >
  <option selected>MORNING SWEET</option>
  <option value="SUN FLOWER">SUN FLOWER</option>
  <option value="FUCHSIA FANTASY">FUCHSIA FANTASY</option>
  <option value="SOLOIST">SOLOIST</option>
  <option value="ROSES">ROSES</option>
  <option value="COLOURFUL ROSES">COLOURFUL ROSES</option>
  <option value="SURPRISING">SURPRISING</option>
  <option value="RED BY ROSES">RED BY ROSES</option>
</select>
</div>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Where is it going?(required)</label>
    <input type="location" class="form-control in" id="exampleInputEmail1" name="place" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Date</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="date" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Time</label>
    <input type="time" class="form-control" id="exampleInputPassword2" name="time" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword3" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword3" name="name" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword4" class="form-label">Phone</label>
    <input type="text" class="form-control" id="exampleInputPassword4" name="phone" >
  </div>
  
  <button type="submit" class="btn " name="submit" style="background-color:#1b745e ;color:white;font-weight:bold;">Submit</button>
</form>
</div>
<div class="col-lg-6 col-md-12">
  <h2 class="text-center pt-5 pb-3">The fine makers of flora</h2>
  <p style="padding-left:100px;">Lorem ipsum dolor sit amet, pri autem nemore bonorum te. </br>Autem fierent ullamcorper ius no, nec ea quodsi invenire.</br> Pri facilisi eleifend ad, ad eos scripta oblique.</br> Vix cu oratio.</br>
  </p>
  <h1 class="text-center pt-5"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16" style="font-weight:bold ;margin-right:3px;">
                             <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                            </svg></h1>
                            <h3 class="pt-2 text-center">Subscribe to Us</h3>
                            <p class="pt-2" style="padding-left:100px;">Interactively utilize leveraged interfaces vis-a-vis state of the art human capital.</br> Interactively parallel task focused content via low-risk high-yield internal or "organic" sources.</p>
          

</div>
</div>
      </div>
     </div>
      <!-- footer -->
    
<section class="footer4 cid-sxLtnlOFWa pt-5 pb-5" once="footers" id="footer5-18" style="background-color:#eae8eb2e ;">
    
    <div class="container  ">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 right">
               
                <div class="mbr-form" data-form-type="formoid">
                    <form class="mbr-form form-with-styler" data-form-title="Form Name">
                        <div class="dragArea form-row" style="width: 400px;">
                            <div data-for="email" class="form-group col-12 col-lg " style="display: flex;">
                                <input type="email" name="email" placeholder="Your Email" data-form-field="email" class="form-control display-7" value="" id="email-footer5-18"  style="border-radius:5px 0px  0px 5px;">
                                    <!-- <div class="col-auto button"> -->
                                    <button type="submit" class="btn display-4" style="background-color: #1b745e; color:white;font-weight:bold ;border-radius:  0px 5px  5px 0px ;">Send</button>
                                <!-- </div> -->
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
            <div class=" col-md-2 col-lg-2 small">
                <p class="lin mbr-fonts-style display-5">
                    <h3 class="bottom text-success" >About</h3>
</p>
                <p class="small-bottom lin mbr-fonts-style display-7">
                    <a href="index.html" class="text-success it">About Us<div class="line"></div></a>
          </p>
                <p class="small-bottom lin mbr-fonts-style display-7">
                    <a href="index.html" class="text-success it">Our Partners<div class="line"></div></a>
</p>
                <p class="lin mbr-fonts-style display-7">
                    <a href="index.html" class="text-success it">Our Services<div class="line"></div></a>
</p>
            </div>
            <div class=" col-md-2 col-lg-2 top small">
                <p class="lin mbr-fonts-style display-5" >
                    <h3 class="bottom text-success">Contact</h3>
</p>
                <p class="small-bottom lin mbr-fonts-style display-7">
                    <a href="index.html" class="text-success it">Contact Us<div class="line"></div></a>
</p>
                <p class="small-bottom lin mbr-fonts-style display-7">
                    <a href="index.html" class="text-success it">FAQ Page<div class="line"></div></a>
</p>
                <p class="lin mbr-fonts-style display-7">
                    <a href="index.html" class="text-success it">About Me<div class="line"></div></a>
</p>
            </div>
            <div class=" col-md-2 col-lg-2 top small">
                <h6 class="lin mbr-fonts-style display-5">
                    <h3 class="bottom text-success">Follow Us</h3>
                </h6>
            </div>
        </div>
    </div>
</section>


    



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>
</html>