<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>:)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&family=Raleway:wght@500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind.config.js"></script>
    <style type="text/tailwindcss">
      @layer utilities {
        header {
          @apply pt-5;
          background: linear-gradient(180deg, #ffffff 0%, #eaf4ff 46.08%, #ffffff 100%);
        }
        nav a {
          @apply hover:underline font-nav text-xl ;
        }
        .button-primary {
          @apply bg-primary text-white px-5 py-2 rounded-full;
        }
        .gradient {
          background: -webkit-linear-gradient(left, #e18700 0%, #ff32ad 50%, #0ec5d7 100%);
          color: transparent;
          background-clip: text;
        }
        .img-sponsor {
          height: 50px;
          width: auto;
          margin: 0px 25%;
        }
        .item-services {
          border: none;
          background: #ffffff;
        }
        .item {
          height: 290px;
          width: 400px;
        }
        .frame{
          margin:20%;
        }
        
        .has-child:hover .submenu {
          @apply visible opacity-100;
        }

        .has-child {
          @apply relative cursor-pointer;
        }
        .has-child > span.caret {
          @apply invert absolute h-[26px] w-[12px] -right-3 top-1/2 transform -translate-y-1/2;
          content: url('data:image/svg+xml;charset=UTF-8, <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.666992 0.666748L4.33366 4.66675L8.00033 0.666748" stroke="white"/></svg>');
        }
        .submenu {
          @apply absolute m-0 py-1 bg-primary invisible opacity-0 transition-all ease-in-out;
        }
        .submenu a{
          @apply text-white min-w-[135px] w-full block py-1 px-4 hover:text-white;
        }
        @media screen and (max-width: 1024px) {
        nav {
          left: -100%;
          transition: all 0.3s ease-in-out;
        }
        nav > ul > li {
          @apply w-full p-0;
        }
        .has-child {
          @apply overflow-hidden;
        }
        .has-child > span.caret {
          @apply invert-0 top-4;
        }
        .has-child.active .submenu {
          @apply visible opacity-100 max-h-[1000px];
        }
        nav .submenu {
          @apply visible opacity-100 relative w-full max-h-0;
        }
        nav.active {
          left: 0;
        }
        }
      }
    </style>
  </head>
<body>
     <section class="container px-5 xl:px-0 mx-auto">
      <div id="navigation" class="flex justify-between gap-10 items-center py-5 ">
        <div class="left-side flex gap-10 items-center">
          <img src="logo.svg" alt="logo" />
          <nav class="fixed w-full h-full top-0 p-10 lg:p-0 lg:relative bg-primary lg:bg-transparent">
            <ul class="flex flex-col lg:flex-row gap-y-5 gap-x-5 items-center">
              <li class="active"><a href="#">Home</a></li>
              <li class="has-child"><a href="#">About</a>
                <span class="caret"></span>
                <ul class="submenu">
                  <li><a href="#">Visi</a></li>
                  <li><a href="#">Misi</a></li>
                  <li><a href="#">Profil</a></li>
                  <li><a href="#">Our Team</a></li>
                </ul></li>
              <li class="has-child"><a href="#">Services</a></li>
              <li class="has-child"><a href="#">Blog</a></li>
              <li class="has-child"><a href="#">Contact</a></li>
            </ul>
          </nav>
        </div>

        <div class="pr-12 lg:pr-0 flex items-center gap-10 max-lg:hidden">
          <button>
            <img src="search.svg" alt="search" id="myBtn-search"/>
          </button>
          <button class="btn button-primary " id="myBtn">Get Started</button>
        </div>
        <button class="mobile-btn right-6 top-7 lg:static lg:hidden">
          <svg class="bar" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 17H19M5 12H19M5 7H19" stroke="black" stroke-width="2.01562" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      
<!-- popup -->
      <div id="myModal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h2>hai</h2>
          </div>
          <div class="modal-body">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias nostrum ratione fugiat repellat et nisi neque facere reiciendis, quod nam optio placeat, tempora iusto accusamus provident ut architecto cum veniam!</p>
          </div>
        </div>
      </div>
    </section>

      <section class="hero md:max-w-[700px] mx-auto relative">
        <h1 class="font-base text-heading-1 font-bold text-center mt-10 leading-tight max-sm:text-2xl">It's Fun To Build a Website With <span class="gradient">The Mangcoding Team</span></h1>
        <p class="text-center text-[#636363] my-3 max-sm:text-sm">The Mangcoding team will help build a website for your company with quality and guaranteed services, with custom templates you can create a website as you like.</p>
        <div class="mb-5 action mx-auto flex justify-center items-center gap-5 max-sm:text-sm">
          <a href="#" class="button-primary">Get Started</a>
          <a href="#" class="underline flex items-center gap-2">
            Explore Our Blog
            <img src="./arrow-right.svg" alt="" />
          </a>
        </div>
        <img src="./thumbnail.png" alt="" />
      </section>
    </header>
</body>
</html>