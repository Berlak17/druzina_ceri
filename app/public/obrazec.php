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
    
 <header class="container-fluid">
  <div class="row">
    <div class="col-12 bg-darkcherryred display-1 text-center text-offwhite pt-3 pb-3 font-orelega-title">
      Košarica
    </div>
  </div>
</header>
<section class="container-fluid">
    <div class="row">
        <div class="col-12 bg-pinklight">
            <div class="row">
                <div class="container-fluid bg-cheryred pb-3 pt-2">
                    <div class="container-fluid">
                        <div class="row mb-3">
                            <div class="col-12 bg-white mt-3 rounded-4 ps-0 pe-0">
                                <div class="container row bg-offwhite rounded-4 pt-2 pb-2 align-items-center pe-0">
                                    <div class="col-3 pe-0">
                                        <img src="images/cesnjevo_vino.png" class="img-fluid d-block pb-3" width="80em" alt="cesnjevo vino">
                                    </div>
                                    <div class="col-6 pb-3">
                                        ČEŠNJEVO VINO <br />
                                        Približno 11-13% vol 
                                        Steklenica 0.75L <br />
                                        Kategorija: Sadno vino
                                    </div>
                                    <div class="col-3 pb-1">
                                        Količina:
                                        <div class="input-group d-block">
                                            <button class="btn btn-outline-secondary rounded-1 w-100 fs-5 px-0 py-0" type="button">+</button>
                                            <input type="text" class="form-control w-100 text-center quantity-input" value="1">
                                            <button class="btn btn-outline-secondary rounded-1 w-100 fs-5 px-0 py-0" type="button">-</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 bg-white mt-3 rounded-4 ps-0 pe-0">
                                <div class="container row bg-offwhite rounded-4 pt-2 pb-2 align-items-center pe-0">
                                    <div class="col-3 pe-0">
                                        <img src="images/visnje_kosara.jpeg" class="img-fluid d-block rounded-3" width="80em" alt="cesnjevo vino">
                                    </div>
                                    <div class="col-6 pb-3">
                                        VIŠNJE <br />
                                        10 kilogramov <br />
                                        Kategorija: Sadje
                                    </div>
                                    <div class="col-3 pb-1">
                                        Količina:
                                        <div class="input-group d-block">
                                            <button class="btn btn-outline-secondary rounded-1 w-100 fs-5 px-0 py-0" type="button">+</button>
                                            <input type="text" class="form-control w-100 text-center quantity-input" value="1">
                                            <button class="btn btn-outline-secondary rounded-1 w-100 fs-5 px-0 py-0" type="button">-</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="izdelki.html">
                            <img src="images/nadaljuj_nakup_button.png" class="img-fluid mx-auto d-block " width="200em" alt="nadaljuj_nakup_button" >
                        </a>                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid">
  <div class="row">
    <div class="col-12 bg-darkcherryred">
      <div class="row">
        <div class="col-12 text-center display-2 text-offwhite py-2 font-orelega-title">
          Obrazec
        </div>
      </div>
      <div class="row">
        <form class="ps-4 pe-4 pb-3">
            <div class="mb-3">
              <label for="ime_priimek" class="form-label text-offwhite">Ime in priimek *</label>
              <input type="text" class="form-control border-4 rounded-1 bg-darkcherryred" id="ime_priimek" aria-describedby="ime_priimek" required>
            </div>
            <div class="mb-3">
              <label for="telefon" class="form-label text-offwhite">Telefonska številka *</label>
              <input type="tel" class="form-control border-4 rounded-1 bg-darkcherryred" id="telefon" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" aria-describedby="telefon" required>
            </div>
            <div class="mb-3">
                <label for="naslov" class="form-label text-offwhite">Naslov *</label>
                <input type="text" class="form-control border-4 rounded-1 bg-darkcherryred" id="naslov" aria-describedby="naslov" required>
            </div>
            <div class="mb-3 row">
                <div class="col-7">
                    <label for="mesto" class="form-label text-offwhite">Mesto *</label>
                    <input type="text" class="form-control border-4 rounded-1 bg-darkcherryred" id="mesto" aria-describedby="mesto" required>
                </div>
                <div class="col-5">        
                    <label for="postna_stevilka" class="form-label text-offwhite">Poštna številka *</label>
                    <input type="number" class="form-control border-4 rounded-1 bg-darkcherryred" id="postna_stevilka" aria-describedby="postna_stevilka" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="naslov_podjetja" class="form-label text-offwhite">Naslov podjetja (opcijsko)</label>
                <input type="text" class="form-control border-4 rounded-1 bg-darkcherryred" id="naslov_podjetja" aria-describedby="naslov_podjetja" required>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="pogoji_poslovanja" required>
              <label class="form-check-label text-offwhite" for="pogoji_poslovanja">Strinjam se s <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Pogoji poslovanja</a> </label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn text"><img src="images/nadaljuj_obrazec_button.png" class="img-fluid mx-auto d-block " width="200em" alt="nadaljuj_obrazec_button"></button>
            </div>    
          </form>
      </div>
    </div>
  </div>
</section>
<div class="card rounded-0 bg-offwhite">
  <div class="card-body rounded-0 p-0">
        <a class="btn p-2 fs-6 d-flex align-items-center rounded-0 justify-content-between ms-1 me-1"
             role="button" aria-expanded="true">
            <span class="fw-bold text-darkgrey">Način plačila: kreditna kartica</span>
        </a>
        <hr class="my-0" />
    <div class="collapse show p-3 pt-0" id="collapseExample">
        <div class="row">
            <div class="col-lg-5 mb-lg-0 mb-3">
                <p class="h4 mb-0 text-darkgrey">Povzetek naročila</p>
                <p class="mb-0 text-darkgrey"><span class="fw-bold "></span>Name of
                  product<span class="c-green text-darkgrey"> #1</span>
                </p>
                <p class="mb-0">
                    <span class="fw-bold text-darkgrey">Skupaj <span class="form-text fw-normal text-darkgrey">(DDV vključen)</span>:</span>
                    
                    <span class="c-green text-darkgrey">XX€</span>
                    
                </p>
            </div>
            <div class="col-lg-7">
                <form action="" class="form">
                    <div class="row">
                        <div class="col-12">
                            <div class="form__div">
                                <input type="text" class="form-control rounded-0" placeholder=" " required>
                                <label for="" class="form__label text-darkgrey">Številka kartice</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form__div">
                                <input type="text" class="form-control" placeholder=" " required>
                                <label for="" class="form__label text-darkgrey">MM / LL</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form__div">
                                <input type="password" class="form-control" placeholder=" " required>
                                <label for="" class="form__label text-darkgrey">CVV</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form__div pb-2">
                                <input type="text" class="form-control" placeholder=" " required>
                                <label for="" class="form__label text-darkgrey">Ime na kartici</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn w-100 text-darkgrey px-0 py-0"><img src="images/potrdi_placilo_button.png" class="img-fluid mx-auto d-block" width="500em" alt="potrdi_placilo_button"> </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
<section class="bg-darkgrey">
<section class="container-fluid pb-4 bg-darkgrey">
  <div class="row ps-2">
    <div class="col-3 pt-4">
      <img src="images/tovornjak_icon.png" class="img-fluid mx-auto " width="90em" alt="tovornjak" >
    </div>
    <div class="col-9 pt-3 text-offwhite"> 
      Vaš izdelek vam lahko dostavimo v roku 3-5 delovnih dni, ali pa ga lahko prevzamete na prevzemnih mestih.
    </div>
  </div>
  <div class="row mt-3 ps-2">
    <div class="col-3 pt-4">
      <img src="images/box_icon.png" class="img-fluid mx-auto " width="90em" alt="tovornjak" >
    </div>
    <div class="col-9 pt-3 text-offwhite"> 
      Možnost reklamacije je mogoča v dveh dneh od prevzema izdelka. Kasnejših reklamacij ne upoštevamo.
    </div>
  </div>
</section>

<section class="container-fluid pb-4 ">
  <div class="row">
    <div class="col-12 display-4 ps-4 pb-3 text-offwhite bg-darkgrey">
      Prevzemna mesta
    </div>
  </div>
  <div class="row ps-4 pe-4 pb-5 bg-darkgrey">
    <div class="col-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d824.6421128086203!2d14.34455712771591!3d45.9561901528921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477ad5b56c85232f%3A0x74c85d1fc1fb29a7!2sDol%20pri%20Borovnici%2085%2C%201353%20Borovnica!5e0!3m2!1ssl!2ssi!4v1746642067632!5m2!1ssl!2ssi" width="100%" height="350" style="border:0;" class="rounded" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-12 text-offwhite">
          Dol pri Borovnici 85, 1353 Borovnica, Slovenija
    </div>
  </div>
  <div class="row  ps-4 pe-4 bg-darkgrey">
    <div class="col-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2774.869716304067!2d14.339291476914351!3d45.9339036710855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477ad596d4d497a7%3A0x2534806882883839!2sDol%20pri%20Borovnici%2023%2C%201353%20Borovnica!5e0!3m2!1ssl!2ssi!4v1746642517041!5m2!1ssl!2ssi" width="100%" height="350" style="border:0;" allowfullscreen="" class="rounded" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
    <div class="col-12 text-offwhite">
          Dol pri Borovnici 23, 1353 Borovnica, Slovenija
    </div>
  </div>
</section>

  <hr class="ms-4 me-4 mt-0 mb-0 text-offyellow bg-darkgrey" />

<section class="container-fluid pb-4 pt-3 bg-darkgrey">
  <div class="row">
    <div class="col-12 display-4 ps-4 pb-3 text-offwhite">
      Delovni čas
    </div>
  </div>
  <div class="row bg-offwhite">
    <div class="col-7 ps-5 pe-0 text-darkgrey ">
      Ponedeljek
    </div>
    <div class="col-5 pe-5 ps-0 text-darkgrey">
      7:00 - 15:00
    </div>
  </div>
  <div class="row">
    <div class="col-7 ps-5 pe-0 text-offwhite">
      Torek
    </div>
    <div class="col-5 pe-5 ps-0 text-offwhite">
      7:00 - 15:00
    </div>
  </div>
  <div class="row bg-offwhite">
    <div class="col-7 ps-5 pe-0 text-darkgrey">
      Sreda
    </div>
    <div class="col-5 pe-5 ps-0 text-darkgrey">
      8:00 - 18:00
    </div>
  </div>
  <div class="row">
    <div class="col-7 ps-5 pe-0 text-offwhite">
      Četrtek
    </div>
    <div class="col-5 pe-5 ps-0 text-offwhite">
      9:00 - 17:00
    </div>
  </div>
  <div class="row bg-offwhite">
    <div class="col-7 ps-5 pe-0 text-darkgrey">
      Petek
    </div>
    <div class="col-5 pe-5 ps-0 text-darkgrey">
      9:00 - 20:00
    </div>
  </div>
  <div class="row">
    <div class="col-7 ps-5 pe-0 text-offwhite">
      Sobota
    </div>
    <div class="col-5 pe-5 ps-0 text-offwhite">
      9:00 - 13:00
    </div>
  </div>
  <div class="row bg-offwhite">
    <div class="col-7 ps-5 pe-0 text-darkgrey">
      Nedelja in prazniki
    </div>
    <div class="col-5 pe-5 ps-0 text-darkgrey">
      zaprto
    </div>
  </div>
</section>

<section class="container-fluid pb-4 pt-3 bg-darkgrey">
  <div class="row">
    <div class="col-12 display-4 ps-4 pb-3 text-offwhite">
      Kontakt
    </div>
  </div>
  <div class="row">
    <div class="col-12 ps-4 text-offwhite">
      Telefon vodje pošiljanja: <a href="tel:+38651227094">+386 51 227 094</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12 ps-4 text-offwhite">
      Obvestilo o pošiljki: <a href="tel:+38669626373">+386 69 626 373</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12 ps-4 text-offwhite">
      Faks: <a href="tel:+38641997926">+386 41 997 926</a>
    </div>
  </div>
  <br />
  <div class="row">
    <div class="col-12 ps-4 text-offwhite">
      E-mail: <a href="mailto:druzinaceri.info@gmail.com">druzinaceri.info@gmail.com</a>
    </div>
  </div>
</section>
</section>
<!--Acordian--> <!--OD TU KOPIRAJ FOOTER IN NAVBAR!-->



<!-- bolsi acordian-->
<?php include ("footer_nav.php"); ?>
</body>
</html>