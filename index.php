<!DOCTYPE html>
<html>
<head>
    <title>Biodata Indah</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>
<body>
<!-- bagian atas (fitur) -->
<div class="menu">
    <div class="logo">
        <h2>PERSONAL WEB</h2>
    </div>

    <div class="dasboard">
        <ul>
            <li><a href="">Profile</a></li>
            <li><a href="">Education</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </div>
</div>
<!-- isi utama -->
<div class="homepage">
    <img src="gambar/ini.jpeg">
    <h1>Hallo Everyone, Welcome To My Personal web</h1>
    <h3><span></span></h3>
    
    
    <a href=""><button>See More About Me</button></a>
</div>

<!-- Profile -->
<div class="Profile">
    <h1>Profile</h1>   
</div>
    <section>
        <div class="swiper mySwiper container">
            <div class="swiper-wrapper content">

                <!-- slide 1 -->
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="gambar/a.jpeg" alt="">
                        </div>

                        <div class="media-icons">
                            <i class="fa-solid fa-user-shakespeare"></i>
                            <i class="fa-solid fa-language"></i>
                            <i class="fa-solid fa-keyboard"></i>
                            <i class="fa-brands fa-figma"></i>
                        </div>

                        <div class="nama">
                            <span class="name">Indah Putri Maharani</span>
                            <span class="sub">Bandung, 08 August 2002</span>
                        </div>
                    </div> 
                </div>

                <!-- slide 2 -->
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="gambar/telkom.jpg">
                        </div>

                        <div class="media-icons">
                            <i class="fa-solid fa-person-dress"></i>
                            <i class="fa-solid fa-building-columns"></i>
                            <i class="fa-brands fa-gratipay"></i>
                            <i class="fa-solid fa-people-group"></i>
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <div class="nama">
                            <span class="name">A student at Telkom University</span>
                            <span class="sub"><p>Majoring in Informatics. The reason I 
                                chose the Informatics major is because it suits with my interest, 
                                which is to develop or create programs that can be useful for many people.</p></span>
                        </div>

                        <div class="button">
                        <button class="aboutme"><p><a href="https://telkomuniversity.ac.id/">See More</a></p>
                            </button>
                        </div>
                    </div> 
                </div>

                <!-- slide 3 -->
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="gambar/like.jpg">
                        </div>

                        <div class="media-icons">
                            <i class="fa-solid fa-person-dress"></i>
                            <i class="fa-solid fa-building-columns"></i>
                            <i class="fa-brands fa-gratipay"></i>
                            <i class="fa-solid fa-people-group"></i>
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <div class="nama">
                            <span class="name">Interested in AI, IoT, UI/UX</span>
                            <span class="sub"><p>and many other things. In my free time, I like 
                                to reading, cooking and enjoy being involved in social activities. 
                                In addition, I also like music and study English. I won 1st place in the 
                                spelling bee category when I was in high school. I also do swimming
                                at the weekend so I can keep myself healthy.</p></span>
                        </div>  
                    </div> 
                </div>

                <!-- slide 4 -->
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="gambar/orga.jpg">
                        </div>

                        <div class="media-icons">
                            <i class="fa-solid fa-person-dress"></i>
                            <i class="fa-solid fa-building-columns"></i>
                            <i class="fa-brands fa-gratipay"></i>
                            <i class="fa-solid fa-people-group"></i>
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <div class="nama">
                            <span class="name">Organization Experience</span>
                            <span class="sub"><p>I am active in several organizations
                                 and events on campus such as being a committee for 
                                 welcoming new students and being a lab assistant for 
                                 Islamic religion courses.  I always try to improve my skills
                                and morals to be a better person. I do this by joining as a 
                                volunteer so I can help each other people with love and dedication.</p></span>
                        </div>       
                    </div> 
                </div>

                <!-- slide 5 -->
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="gambar/apps.jpg">
                        </div>

                        <div class="media-icons">
                            <i class="fa-solid fa-person-dress"></i>
                            <i class="fa-solid fa-building-columns"></i>
                            <i class="fa-brands fa-gratipay"></i>
                            <i class="fa-solid fa-people-group"></i>
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <div class="nama">
                            <span class="name">About Me</span>
                            <span class="sub"><p>I am someone who has a high will and determination, 
                                is always interested in learning new things, likes to socialize, always 
                                prepares all activities with plans and targets and has a high interest in 
                                manufacturing and technology development.</p></span>
                        </div>

                        <div class="button">
                            <button class="aboutme"><p><a href="https://drive.google.com/file/d/1p8luqcv6WCgnfUz2AIcvC7cl_saZwVAy/view?usp=share_link
                                ">See More</a></p>
                            </button>
                        </div>
                    </div> 
                </div>
                

            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </section>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            },
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
        });
    </script>



<!-- pendidikan -->
<div class="list-pendidikan">
    <h1>Education</h1>
    <div class="sd">
        <img src="gambar/sd1.png">
            <p><h3>SDN Mekar Galih 2007 – 2010</h3></p>
            <p>Jl. Sekemala No.73, Pasanggrahan, Kec. Ujung Berung</p>
           
            <p><h3>SDN Lengkong 2011 – 2013</h3></p>
            <p>Jl. Raya Bojongsoang, Lengkong, Kec. Bojongsoang</p>   
    </div>

    <div class="smp">
        <img src="gambar/smp.png">
        <p><h3>SMP Telkom Bandung 2014 – 2016</h3></p>
        <p>Jl. Radio Palasari Road, Sukapura, Kec. Dayeuhkolot</p>   
    </div>

    <div class="sma">
        <img src="gambar/sma.png">
        <p><h3>SMA Telkom Bandung 2017 – 2019</h3></p>
        <p>Jl. Radio Palasari Road, Citeureup, Kec. Dayeuhkolot</p>   
    </div>

    <div class="kuliah">
        <img src="gambar/kuliah.png">
        <p><h3>Telkom University 2020 - Now</h3></p>
        <p>Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Sukapura, Kec. Dayeuhkolot</p>   
    </div>

</div>

<!-- kontak -->
<div class="kontak">
    <h1>Contact</h1>
    <div class="address">
        <img src="gambar/alamat.png">
        <p>Jl. Raya Bojongsoang No.120, Lengkong, Kec. Bojongsoang, Kabupaten Bandung, Jawa Barat 40287</p>
    </div>

    <div class="phone">
        <img src="gambar/telepon.png">
        <p>+62 8953 2538 9940</p>
    </div>

    <div class="email">
        <img src="gambar/email.png">
        <p>indahrani08@gmail.com</p>
    </div>
    


</body>
</html>