<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>Max</span>Wheels </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#vehicles">vehicles</a>
        <a href="#services">services</a>
        <a href="#featured">featured</a>
        <a href="#reviews">reviews</a>
        <a href="#contact">contact</a>
    </nav>

    <div id="login-btn">
        <button class="btn" onclick="location.href='loginform.php'">login</button>
        <i class="far fa-user"></i>
    </div>

</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

</div>

<section class="home" id="home" style="background-color:rgb(248, 248, 222);">

    <h3 data-speed="-2" class="home-parallax">find your car</h3>

    <img data-speed="5" class="home-parallax" src="image/home-img.png" alt="">

    <a data-speed="7" href="https://www.bigboytoyz.com/our-showroom" class="btn home-parallax">explore cars</a>

</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>150+</h3>
            <p>branches</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>4770+</h3>
            <p>cars sold</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>320+</h3>
            <p>happy clients</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>1500+</h3>
            <p>news cars</p>
        </div>
    </div>

</section>

<section class="vehicles" id="vehicles">

    <h1 class="heading"> popular <span>vehicles</span> </h1>

    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/Lamborgini.png" alt="">
                <div class="content">
                    <h3>Lamborgini Huracan</h3>
                    <div class="price"> <span>price : </span> $90,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 390mph
                    </p>
                    <a href="https://www.bigboytoyz.com/used-luxury-cars/2014-lamborghini-huracan-lp-610-4-detail-page" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-2.png" alt="">
                <div class="content">
                    <h3>Porsche 911</h3>
                    <div class="price"> <span>price : </span> $82,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 283mph
                    </p>
                    <a href="https://www.bigboytoyz.com/used-luxury-cars/porsche-911-turbo-s--detail-page" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/Lamborghini-Urus.jpg" alt="">
                <div class="content">
                    <h3>Lamborghini Urus</h3>
                    <div class="price"> <span>price : </span> $90,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 233mph
                    </p>
                    <a href="https://www.bigboytoyz.com/used-luxury-cars/lamborghini-urus--1-detail-page" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-4.png" alt="">
                <div class="content">
                    <h3>Porsche Spider360</h3>
                    <div class="price"> <span>price : </span> $83,500/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2022
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 293mph
                    </p>
                    <a href="https://www.bigboytoyz.com/used-luxury-cars/porsche-911-carrera--s-detail-page" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image\Bentley-Continental-GT-Exterior-158571.png" alt="">
                <div class="content">
                    <h3>Bentley Continental</h3>
                    <div class="price"> <span>price : </span> $89,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 273mph
                    </p>
                    <a href="https://www.bigboytoyz.com/used-luxury-cars/bentley-flying-spur-w12-3-detail-page" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image\Rolls-Royce.png" alt="">
                <div class="content">
                    <h3>Rolls-Royce</h3>
                    <div class="price"> <span>price : </span> $98,200/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2022
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 293mph
                    </p>
                    <a href="https://www.bigboytoyz.com/used-luxury-cars/rolls-royce-ghost-17-detail-page" class="btn">check out</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-car"></i>
            <h3>car selling</h3>
            <p>Sell your car in just 10 min. easily done paper work without any hesitation.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-tools"></i>
            <h3>parts repair</h3>
            <p>we do car service and maintainance with an effective price and repair all car spare parts.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-car-crash"></i>
            <h3>car insurance</h3>
            <p>Here you can insurance your car in just Rs.2000/year and get max revenue for selling time.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-car-battery"></i>
            <h3>battery replacement</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-gas-pump"></i>
            <h3>oil change</h3>
            <p>here available all engine oil like Castrol, Toyota oil, Liquid moli.Bharat Petroleum.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>24/7 support</h3>
            <p>Our support team connected with you 24*7 you can get any information easily.</p>
            <a href="#" class="btn"> read more</a>
        </div>

    </div>

</section>

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured</span> cars </h1>

    <div class="swiper featured-slider">

       <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/car-1.png" alt="">
                <div class="content">
                    <h3>Mercedes-Benz C</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rs.72,30,000/-</div>
                    <a href="https://www.bigboytoyz.com/used-luxury-cars/mercedes-amg-slc-43--detail-page" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-2.png" alt="">
                <div class="content">
                    <h3>MG Astor</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rs.9,98,000/-</div>
                    <a href="https://www.mgmotor.co.in/vehicles/mgastor/digital-kmi?ecid=Search:MG-Astor:adwords-IA-kmi:IA:Jan-22:Post-Price-Change&ef_id=Cj0KCQjwnNyUBhCZARIsAI9AYlF_9dJPdFd_M8WO2bEcHJzdbLD9KdMIxX9OD3-oFsIXs5WHSE09ewsaAsomEALw_wcB:G:s&s_kwcid=AL!8805!3!601235782313!b!!g!!mg%20astor&gclid=Cj0KCQjwnNyUBhCZARIsAI9AYlF_9dJPdFd_M8WO2bEcHJzdbLD9KdMIxX9OD3-oFsIXs5WHSE09ewsaAsomEALw_wcB" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-3.png" alt="">
                <div class="content">
                    <h3>Ford Figo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rs.7,50,000/-</div>
                    <a href="https://www.cardekho.com/carmodels/Ford/Ford_Figo" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-4.png" alt="">
                <div class="content">
                    <h3>Audi Q7</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rs.88,00,000/-</div>
                    <a href="https://www.bigboytoyz.com/used-luxury-cars/audi-q7-premium-plus-55-tfsi-detail-page" class="btn">check out</a>
                </div>
            </div>

       </div>

       <div class="swiper-pagination"></div>

    </div>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
 
             <div class="swiper-slide box">
                 <img src="image/car-5.png" alt="">
                 <div class="content">
                     <h3>Kia Sportage</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">Rs.23,30,000/-</div>
                     <a href="https://www.cardekho.com/kia/sportage" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-6.png" alt="">
                 <div class="content">
                     <h3>Honda Civic</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">Rs.18,28,000/-</div>
                     <a href="https://www.cardekho.com/honda/civic" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-7.png" alt="">
                 <div class="content">
                     <h3>Kia Seltos</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">Rs.12,35,000/-</div>
                     <a href="https://www.kia.com/in/our-vehicles/seltos/showroom.html?utm_source=google&utm_medium=sem&utm_campaign=search_seltos_brand&gclid=Cj0KCQjwnNyUBhCZARIsAI9AYlFKuLtNvlAjt9k85vISEWjTMailebk52U6SHW0WS4iDllloGIhGiOQaAknMEALw_wcB" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image\Toyota_Fortuner_4x4_AT_Diesel_2020.png" alt="">
                 <div class="content">
                     <h3>Toyoto Fortuner</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">Rs.34,55,000/-</div>
                     <a href="https://www.carwale.com/toyota-cars/fortuner/" class="btn">check out</a>
                 </div>
             </div>
 
        </div>
 
        <div class="swiper-pagination"></div>
 
     </div>

</section>

<section class="newsletter1">
    
    <h3>subscribe for latest updates</h3>
    <p>Connected with MaxWheels Society for the Latest Updates and Share your feedback with us.</p>

   <form>
        <input type="email" placeholder="enter your email">
        <button type="submit" onclick="openPopup()">Subscribe</button>
        <div class="popup" id="popup">
            <img src="image\tick.png" alt="">
             <h2>Thank You!</h2>
             <p>Your details has been successfully submitted. Thanks!</p>
             <button type="button" onclick="closePopup()">OK</button>
        </div>
   </form>
</section>   

<section class="featured" id="featured">
    <h1 class="heading"> <span>Our</span> Garage</h1>
</section>

   <!-- Slide Show -->
   <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img\garage1.jpg" style="width:100%">
    <div class="text">American Classic Cars</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img\garage5.jpg" style="width:100%">
    <div class="text">Premium Cars</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img\garage2.jpg" style="width:100%">
    <div class="text">Electric Cars</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img\garage3.jpg" style="width:100%">
    <div class="text">Classic Cars Collection</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>



<section class="reviews" id="reviews">

    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <div class="content">
                    <p>This MaxWheels contain lots of premium vechiels. and i was purchased Audi Q7 in 2020 and it was so luxirious and reliable Car love it.</p>
                    <h3>Krishna</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-5.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                    <h3>Rajeev</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <div class="content">
                    <p>This is best place to buy a luxury cars. i love MaxWheels here i can complete my dream for buy a Sport car like Lamborghini</p>
                    <h3>Hitesh</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-5.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                    <h3>Abhay</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-5.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                    <h3>Pranav</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="contact" id="contact">

    <h1 class="heading"><span>contact</span> us</h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1632137920043!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

        <form action="">
            <h3>get in touch</h3>
            <input type="text" placeholder="your name" class="box">
            <input type="email" placeholder="your email" class="box">
            <input type="tel" placeholder="subject" class="box">
            <textarea placeholder="your message" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn" onclick="myFunction()">
            <script>
                function myFunction() {
                  alert("Your Data is Saved... We will get in Touch");
                }
                </script>
        </form>

    </div>

</section>

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>our Location</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>Address: Plot No. 134, Sector 37, Pace City 1, Gurgaon, Haryana, 122001 </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> MaxWheels Showroom is a multibrand dealer located at Gurgaon.
             It offers used cars &services across a wide range of and available car models in the market.</a>
    
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#vehicles"> <i class="fas fa-arrow-right"></i> vehicles </a>
            <a href="#services"> <i class="fas fa-arrow-right"></i> services </a>
            <a href="#featured"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#reviews"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="#contact"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> tushar.patara11@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Delhi, india - 122001 </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://twitter.com/i/flow/login"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com/accounts/login/"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://www.linkedin.com/login"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="https://in.pinterest.com/vanderphoolingaround/cars/"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by Tushar | all rights reserved </div>

</section>

<script>
    let popup = document.getElementById("popup");

    function openPopup(){
        popup.classList.add("open-popup");
    }
    function closePopup() {
        popup.classList.remove("open-popup");
    }
</script>



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>
    let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>