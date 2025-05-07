<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Družina Čeri</title>

    <link href="main.css" rel="stylesheet">
  

    <script src=../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js></script>
    <script src="costum.js" defer></script>
</head>
<body>
    
  <header class="container-fluid bg-darkcherryred">
    <div class="row">
      <div class="col-2 bg-darkcherryred px-0">
        <img src="images/filter_icon.png" 
             class="img-fluid d-block pt-4 ms-2 me-0 btn" 
             data-bs-toggle="collapse" 
             data-bs-target="#filter1" 
             aria-expanded="false" 
             aria-controls="filter1" 
             id="filter-btn" 
             type="button" 
             width="70em" 
             alt="filter_icon">
      </div>
  
      <div class="col-8 bg-darkcherryred display-1 text-center text-offwhite pt-3 pb-3 px-0">
        <div class="vr align-middle h-100 me-4 mb-1 font-orelega-title display-1"></div>
        Izdelki
        <div class="vr align-middle h-100 ms-4 mb-1"></div>
      </div>
  
      <div class="col-2 bg-darkcherryred d-flex align-items-center justify-content-center px-0 pt-2">
        <img src="images/lupa_icon.png" 
             class="img-fluid btn ps-0 pe-3 pb-3" 
             data-bs-toggle="collapse" 
             data-bs-target="#search1" 
             aria-expanded="false" 
             aria-controls="search1" 
             id="search-btn" 
             type="button" 
             width="60em" 
             alt="lupa_icon">
      </div>
    </div>
  
    <!-- Search Bar Collapse -->
    <div class="collapse" id="search1">
      <div class="container-fluid py-2 bg-darkcherryred">
        <div class="row justify-content-center">
          <div class="col-10 col-md-6">
            <input 
              type="search" 
              placeholder="Išči izdelek" 
              id="searchbar" 
              class="form-control w-100" 
              data-search>
          </div>
        </div>
      </div>
    </div>
  

<!-- Filter Dropdown Collapse -->
<div class="collapse" id="filter1">
  <div class="container-fluid py-2 bg-darkcherryred">
    <div class="row justify-content-center">
      <div class="col-10 col-md-6">
        <select id="filterDropdown" class="form-select">
          <option value="">Vsi izdelki</option>
          <option value="višnje">izdelki iz višnj</option>
          <option value="češnje">izdelki iz češnj</option>
        </select>
      </div>
    </div>
  </div>
</div>
  </header>
  

<section class="container-fluid bg-cheryred">
  <div class="row">
    <div class="col-12">
      <div class="row">
        <div class="col-12 text-center font-orelega-title text-offwhite py-2">
          Najbolj priljubljeni izdelki
        </div>
      </div>

        <div class="container-fluid pb-3 pt-2">
          <div class="container-fluid">
            <div class="row mb-3">
              <div class="col-6">
                <div class="container bg-offwhite rounded-4 mt-3 text-center card">
                  <div>
                      <img src="images/cesnjevo_vino.png" class="img-fluid mx-auto d-block max-width: 100% pt-3" alt="cesnjevo vino" >
                  </div>
                    <div class="text-center header">
                        ČEŠNJEVO VINO
                    </div>
                  <div>
                      <a href="">
                        <img src="images/v kosarico.png" class="img-fluid mx-auto d-block max-width: 100% pt-3" alt="v kosarico" >
                      </a>
                  </div>  
                </div>
              </div>
                <div class="col-6">
                  <div class="container bg-offwhite rounded-4 mt-3 text-center card">
                    <div>
                        <img src="images/visnjev_liker.png" class="img-fluid mx-auto d-block max-width: 100% pt-3" alt="visnjev liker" >
                    </div>
                    <div class="text-center header">
                        VIŠNJEV LIKER
                    </div>
                    <div>
                        <a href="">
                          <img src="images/v kosarico.png" class="img-fluid mx-auto d-block max-width: 100% pt-3" alt="v kosarico" >
                        </a>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid bg-pinkdark text-offwhite">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="container-fluid pb-3 pt-2">
                    <div class="container-fluid ">
                        <div class="row mb-5 mt-3">
                            <div class="col-6">
                                <div class="container bg-darkcherryred rounded-4 mt-3 text-center card text-offwhite">
                                    <img src="images/cesnje_kosara.jpeg" class="img-fluid mx-auto rounded-3 mt-3" alt="cesnje" >
                                    <div class="text-center mt-2 header">
                                        ČEŠNJE
                                    </div>
                                    <div>
                                        <a href="">
                                            <img src="images/v_kosarico_bel.png" class="img-fluid mx-auto d-block pt-3" alt="v kosarico" >
                                        </a>
                                    </div>  
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="container bg-darkcherryred rounded-4 mt-3 text-center card text-offwhite">
                                    <img src="images/visnje_kosara.jpeg" class="img-fluid mx-auto rounded-3 mt-3" alt="visnje" >
                                    <div class="text-center mt-2 header">
                                        VIŠNJE
                                    </div>
                                    <div>
                                        <a href="">
                                            <img src="images/v_kosarico_bel.png" class="img-fluid mx-auto d-block pt-3" alt="v kosarico" >
                                        </a>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-6">
                                <div class="container bg-darkcherryred rounded-4 mt-3 text-center card text-offwhite">
                                    <img src="images/cesnje_marmelada.png" class="img-fluid mx-auto rounded-3  mt-3" alt="cesnje_marmelada" >
                                    <div class="text-center mt-2 header">
                                        ČEŠNJEVA MARMELADA
                                    </div>
                                    <div>
                                        <a href="">
                                            <img src="images/v_kosarico_bel.png" class="img-fluid mx-auto d-block pt-3" alt="v kosarico" >
                                        </a>
                                    </div>  
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="container bg-darkcherryred rounded-4 mt-3 text-center card text-offwhite">
                                    <img src="images/visnje_marmelada.png" class="img-fluid mx-auto  mt-3 rounded-3" alt="visnje_marmelada" >
                                    <div class="text-center mt-2 header">
                                        VIŠNJEVA MARMELADA
                                    </div>
                                    <div>
                                        <a href="">
                                            <img src="images/v_kosarico_bel.png" class="img-fluid mx-auto d-block pt-3" alt="v kosarico" >
                                        </a>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="container bg-darkcherryred rounded-4 mt-3 text-center card text-offwhite">
                                    <img src="images/cesnje_krema.jpeg" class="img-fluid mx-auto rounded-3  mt-3" alt="cesnje_krema">
                                    <div class="text-center mt-2 header">
                                        KREMA S ČEŠNJEVIM EKSTRATOM
                                    </div>
                                    <div>
                                        <a href="">
                                            <img src="images/v_kosarico_bel.png" class="img-fluid mx-auto d-block pt-3" alt="v kosarico" >
                                        </a>
                                    </div>  
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="container bg-darkcherryred rounded-4 mt-3 text-center card text-offwhite" >
                                    <img src="images/visnje_krema.jpeg" class="img-fluid mx-auto mt-3 rounded-3" alt="visnje_krema">
                                    <div class="text-center mt-2 header">
                                        KREMA Z VIŠNJEVIM EKSTRATOM
                                    </div>
                                    <div>
                                        <a href="">
                                            <img src="images/v_kosarico_bel.png" class="img-fluid mx-auto d-block pt-3" alt="v kosarico" >
                                        </a>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--template-->
<div id="user-card-container" data-user-cards-container></div>
<template user-card-template>
<div class="container bg-offwhite rounded-4 mt-3 text-center card">
  <div>
      <img src="" class="img-fluid mx-auto d-block max-width: 100% pt-3" alt="" >
  </div>
    <div class="text-center header" data-header>
        
    </div>
  <div>
      <a href="">
        <img src="" class="img-fluid mx-auto d-block max-width: 100% pt-3" alt="" >
      </a>
  </div>  
</div>
</template>
<!--Acordian--> <!--OD TU KOPIRAJ FOOTER IN NAVBAR!-->



<!-- bolsi acordian-->

<?php include ("footer_nav.php"); ?>
</body>
</html>