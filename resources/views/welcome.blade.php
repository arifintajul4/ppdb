@extends('layouts.app')

@section('content')
     <!-- Header -->
     <div class="header bg-primary pt-5 pb-7">
       <div class="container">
         <div class="header-body">
           <div class="row align-items-center">
             <div class="col-lg-6">
               <div class="pr-5">
                 <h1 class="display-2 text-white font-weight-bold mb-0">Penerimaan Siswa Baru</h1>
                 <h2 class="display-4 text-white font-weight-light">SMP Negeri 10 PPU</h2>
                 <div class="mt-5">
                   <a href="" class="btn btn-neutral my-2">Masuk</a>
                   <a href="" class="btn btn-default my-2">Daftar Sekarang</a>
                 </div>
               </div>
             </div>
             <div class="col-lg-6">
               <img src="{{ asset('img/banner.svg') }}" class="d-sm-none d-lg-inline img-fluid">
             </div>
           </div>
         </div>
       </div>
       <div class="separator separator-bottom separator-skew zindex-100">
         <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
           <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
         </svg>
       </div>
     </div>
     <section class="py-6 pb-9 bg-default">
       <div class="row justify-content-center text-center">
         <div class="col-md-6">
           <h2 class="display-3 text-white">A complete HTML solution</h3>
             <p class="lead text-white">
               Argon is a completly new product built on our newest re-built from scratch framework structure that is meant to make our products more intuitive,
               more adaptive and, needless to say, so much easier to customize. Let Argon amaze you with its cool features and build tools and get your project to a whole new level.
             </p>
         </div>
       </div>
     </section>
     <section class="section section-lg pt-lg-0 mt--7">
       <div class="container">
         <div class="row justify-content-center">
           <div class="col-lg-12">
             <div class="row">
               <div class="col-lg-4">
                 <div class="card card-lift--hover shadow border-0">
                   <div class="card-body py-5">
                     <div class="icon icon-shape bg-gradient-primary text-white rounded-circle mb-4">
                       <i class="ni ni-check-bold"></i>
                     </div>
                     <h4 class="h3 text-primary text-uppercase">Based on Bootstrap 4</h4>
                     <p class="description mt-3">Argon is built on top of the most popular open source toolkit for developing with HTML, CSS, and JS.</p>
                     <div>
                       <span class="badge badge-pill badge-primary">bootstrap 4</span>
                       <span class="badge badge-pill badge-primary">dashboard</span>
                       <span class="badge badge-pill badge-primary">template</span>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-lg-4">
                 <div class="card card-lift--hover shadow border-0">
                   <div class="card-body py-5">
                     <div class="icon icon-shape bg-gradient-success text-white rounded-circle mb-4">
                       <i class="ni ni-istanbul"></i>
                     </div>
                     <h4 class="h3 text-success text-uppercase">Integrated build tools</h4>
                     <p class="description mt-3">Use Argons's included npm and gulp scripts to compile source code, run tests, and more with just a few simple commands.</p>
                     <div>
                       <span class="badge badge-pill badge-success">npm</span>
                       <span class="badge badge-pill badge-success">gulp</span>
                       <span class="badge badge-pill badge-success">build tools</span>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-lg-4">
                 <div class="card card-lift--hover shadow border-0">
                   <div class="card-body py-5">
                     <div class="icon icon-shape bg-gradient-warning text-white rounded-circle mb-4">
                       <i class="ni ni-planet"></i>
                     </div>
                     <h4 class="h3 text-warning text-uppercase">Full Sass support</h4>
                     <p class="description mt-3">Argon makes customization easier than ever before. You get all the tools to make your website building process a breeze.</p>
                     <div>
                       <span class="badge badge-pill badge-warning">sass</span>
                       <span class="badge badge-pill badge-warning">design</span>
                       <span class="badge badge-pill badge-warning">customize</span>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
     <section class="py-6">
       <div class="container">
         <div class="row row-grid align-items-center">
           <div class="col-md-6 order-md-2">
             <img src="./assets/img/theme/landing-1.png" class="img-fluid">
           </div>
           <div class="col-md-6 order-md-1">
             <div class="pr-md-5">
               <h1>Awesome features</h1>
               <p>This dashboard comes with super cool features that are meant to help in the process. Handcrafted components, page examples and functional widgets are just a few things you will see and love at first sight.</p>
               <ul class="list-unstyled mt-5">
                 <li class="py-2">
                   <div class="d-flex align-items-center">
                     <div>
                       <div class="badge badge-circle badge-success mr-3">
                         <i class="ni ni-settings-gear-65"></i>
                       </div>
                     </div>
                     <div>
                       <h4 class="mb-0">Carefully crafted components</h4>
                     </div>
                   </div>
                 </li>
                 <li class="py-2">
                   <div class="d-flex align-items-center">
                     <div>
                       <div class="badge badge-circle badge-success mr-3">
                         <i class="ni ni-html5"></i>
                       </div>
                     </div>
                     <div>
                       <h4 class="mb-0">Amazing page examples</h4>
                     </div>
                   </div>
                 </li>
                 <li class="py-2">
                   <div class="d-flex align-items-center">
                     <div>
                       <div class="badge badge-circle badge-success mr-3">
                         <i class="ni ni-satisfied"></i>
                       </div>
                     </div>
                     <div>
                       <h4 class="mb-0">Super friendly support team</h4>
                     </div>
                   </div>
                 </li>
               </ul>
             </div>
           </div>
         </div>
       </div>
     </section>
     <section class="py-6">
       <div class="container">
         <div class="row row-grid align-items-center">
           <div class="col-md-6">
             <img src="./assets/img/theme/landing-2.png" class="img-fluid">
           </div>
           <div class="col-md-6">
             <div class="pr-md-5">
               <h1>Example pages</h1>
               <p>If you want to get inspiration or just show something directly to your clients, you can jump start your development with our pre-built example pages.</p>
               <a href="./pages/examples/profile.html" class="font-weight-bold text-warning mt-5">Explore pages</a>
             </div>
           </div>
         </div>
       </div>
     </section>
     <section class="py-6">
       <div class="container">
         <div class="row row-grid align-items-center">
           <div class="col-md-6 order-md-2">
             <img src="./assets/img/theme/landing-3.png" class="img-fluid">
           </div>
           <div class="col-md-6 order-md-1">
             <div class="pr-md-5">
               <h1>Lovable widgets and cards</h1>
               <p>We love cards and everybody on the web seems to. We have gone above and beyond with options for you to organise your information. From cards designed for content, to pricing cards or user profiles, you will have many options to choose from.</p>
               <a href="./pages/widgets.html" class="font-weight-bold text-info mt-5">Explore widgets</a>
             </div>
           </div>
         </div>
       </div>
     </section>
     <section class="py-7 section-nucleo-icons bg-white overflow-hidden">
       <div class="container">
         <div class="row justify-content-center">
           <div class="col-lg-8 text-center">
             <h2 class="display-3">Nucleo Icons</h2>
             <p class="lead">
               The official package contains over 21.000 icons which are looking great in combination with Argon Design System. Make sure you check all of them and use those that you like the most.
             </p>
             <div class="btn-wrapper">
               <a href="./docs/foundation/icons.html" class="btn btn-primary">View demo icons</a>
               <a href="https://nucleoapp.com/?ref=1712" target="_blank" class="btn btn-default mt-3 mt-md-0">View all icons</a>
             </div>
           </div>
         </div>
         <div class="blur--hover">
           <a href="./docs/foundation/icons.html">
             <div class="icons-container blur-item mt-5">
               <!-- Center -->
               <i class="icon ni ni-diamond"></i>
               <!-- Right 1 -->
               <i class="icon icon-sm ni ni-album-2"></i>
               <i class="icon icon-sm ni ni-app"></i>
               <i class="icon icon-sm ni ni-atom"></i>
               <!-- Right 2 -->
               <i class="icon ni ni-bag-17"></i>
               <i class="icon ni ni-bell-55"></i>
               <i class="icon ni ni-credit-card"></i>
               <!-- Left 1 -->
               <i class="icon icon-sm ni ni-briefcase-24"></i>
               <i class="icon icon-sm ni ni-building"></i>
               <i class="icon icon-sm ni ni-button-play"></i>
               <!-- Left 2 -->
               <i class="icon ni ni-calendar-grid-58"></i>
               <i class="icon ni ni-camera-compact"></i>
               <i class="icon ni ni-chart-bar-32"></i>
             </div>
             <span class="blur-hidden h5 text-success">Explore all the 21.000+ Nucleo Icons</span>
           </a>
         </div>
       </div>
     </section>
     <section class="py-7">
       <div class="container">
         <div class="row row-grid justify-content-center">
           <div class="col-lg-8 text-center">
             <h2 class="display-3">Do you love this awesome <span class="text-success">Dashboard for Bootstrap 4?</span></h2>
             <p class="lead">Cause if you do, it can be yours now. Hit the button below to navigate to get the free version or purchase a license for your next project. Build a new web app or give an old Bootstrap project a new look!</p>
             <div class="btn-wrapper">
               <a href="https://www.creative-tim.com/product/argon-dashboard" class="btn btn-neutral mb-3 mb-sm-0" target="_blank">
                 <span class="btn-inner--text">Get FREE version</span>
               </a>
               <a href="https://www.creative-tim.com/product/argon-dashboard-pro" class="btn btn-primary btn-icon mb-3 mb-sm-0">
                 <span class="btn-inner--icon"><i class="ni ni-basket"></i></span>
                 <span class="btn-inner--text">Purchase now</span>
                 <span class="badge badge-md badge-pill badge-floating badge-danger border-white">$79</span>
               </a>
             </div>
             <div class="text-center">
               <h4 class="display-4 mb-5 mt-5">Available on these technologies</h4>
               <div class="row justify-content-center">
                 <div class="w-10 mx-2 mb-2">
                   <a href="https://www.creative-tim.com/product/argon-dashboard" target="_blank" data-toggle="tooltip" data-original-title="Bootstrap 4 - Most popular front-end component library">
                     <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/bootstrap.jpg" class="img-fluid rounded-circle shadow shadow-lg--hover">
                   </a>
                 </div>
                 <div class="w-10 mx-2 mb-2">
                   <a href=" https://www.creative-tim.com/product/vue-argon-dashboard" target="_blank" data-toggle="tooltip" data-original-title="Vue.js - The progressive javascript framework">
                     <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg" class="img-fluid rounded-circle">
                   </a>
                 </div>
                 <div class="w-10 mx-2 mb-2">
                   <a href=" https://www.creative-tim.com/product/argon-dashboard" target="_blank" data-toggle="tooltip" data-original-title="Sketch - Digital design toolkit">
                     <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg" class="img-fluid rounded-circle">
                   </a>
                 </div>
                 <div class="w-10 mx-2 mb-2">
                   <a href=" https://www.creative-tim.com/product/argon-dashboard-angular" target="_blank" data-toggle="tooltip" data-original-title="Angular - One framework. Mobile &amp; desktop">
                     <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg" class="img-fluid rounded-circle">
                   </a>
                 </div>
                 <div class="w-10 mx-2 mb-2">
                   <a href=" https://www.creative-tim.com/product/argon-dashboard-react" target="_blank" data-toggle="tooltip" data-original-title="React - A JavaScript library for building user interfaces">
                     <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg" class="img-fluid rounded-circle">
                   </a>
                 </div>
                 <div class="w-10 mx-2 mb-2">
                   <a href=" https://www.creative-tim.com/product/argon-dashboard-laravel" target="_blank" data-toggle="tooltip" data-original-title="Laravel - The PHP Framework For Web Artisans">
                     <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/laravel_logo.png" class="img-fluid rounded-circle">
                   </a>
                 </div>
                 <div class="w-10 mx-2 mb-2">
                   <a href=" https://www.creative-tim.com/product/argon-dashboard-nodejs" target="_blank" data-toggle="tooltip" data-original-title="Node.js - a JavaScript runtime built on Chrome's V8 JavaScript engine">
                     <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/nodejs-logo.jpg" class="img-fluid rounded-circle">
                   </a>
                 </div>
                 <div class="w-10 mx-2 mb-2">
                   <a href=" https://www.adobe.com/products/photoshop.html" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Adobe Photoshop - Software for digital images manipulation">
                     <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/ps.jpg" class="img-fluid rounded-circle opacity-3">
                   </a>
                 </div>
               </div>
               <div class="spinner-border" role="status">
                 <span class="sr-only">Loading...</span>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
@endsection
