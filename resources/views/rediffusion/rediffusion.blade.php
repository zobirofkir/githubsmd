<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMD 2024</title>
    <link rel="stylesheet" href="{{asset('css/reduffusion/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/reduffusion/css/css1.css')}}">
    <!-------------La chatgraphi------------------>
    <link rel="stylesheet" href="{{asset('css/reduffusion/css/GlobaleColor.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="{{asset('css/photos.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    </head>


  </nav>
  <body onload="vedioSource('','')" style="background: white;">
<nav class="navbar navbar-expand-lg navbar-dark" style="background: #D1EAF1;">
    <div class="container-fluid " >
      <a class="navbar-brand" href="{{url('/')}}"><i class="fa-solid fa-house fa-xl" style="color: white;"> </i> Accueil</a>
    </div>
  </nav>

    <div class="content">

        <div class="lefttop">
            <i class="fas fa-volume-mute logo" style="display: none;" onclick="logo()"></i>
            <div id="contentvedio" ></div>
        </div>
        <div class="contentright">
            <div style="" class="righttop">
                <!--Les jours --->
                <div class="btn-group btnjour" style="display: flex;" role="group" id="btnjour"
                    aria-label="Basic example">
                    <button style="outline: none; " class="btnjr1 btnactive">Vendredi</button>
                    <button style="outline: none;  ;" class="btnjr2 ">Samedi</button>
                    <button style="outline: none;"> <a class="nav-link " href="{{url('/photos')}}"
                            style=" padding: 0; color: white; width:fite-content;position: relative;"><span
                                style=" font-weight:bold"> GALERIE </span> </a></button>


                </div>
                <div style="" id="contentjour" class="contentjour">
                    <div style="" class="jr1 jr jouractive">
                        <h1> Vendredi 01 September 2023 </h1>

                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/tA94GSdbDBw?si=h9cG2WCjjlmmD20n">
                            <img
                            src="{{asset('img/redeffusion/image/vendredi')}}/01.png" width="100%" alt="">
                            
                            <span class="btnplay">
                            <img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/VtABVu5zYEM?si=6OvFyDqf98d56JGD"><img
                            src="{{asset('img/redeffusion/image/vendredi')}}/02.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/raykCRZX2NY?si=DQz7pGmy90DoZoPj"><img
                            src="{{asset('img/redeffusion/image/vendredi')}}/03.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/dCKyTr7Tdd8?si=o1ii8RVm0Kz5z9kk"><img
                            src="{{asset('img/redeffusion/image/vendredi')}}/04.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/66-4AQam1wI?si=KZANrHlE3SbUJyR2"><img
                            src="{{asset('img/redeffusion/image/vendredi')}}/05.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/2QhFXa5zrtQ?si=alajmSm2Ti9A9C_7"><img
                            src="{{asset('img/redeffusion/image/vendredi')}}/06.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/tv4vPtQ8roM?si=y4vsIv2UOTYJKvBm"><img
                            src="{{asset('img/redeffusion/image/vendredi')}}/07.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/11ClOYeu1uI?si=dbui3-qUiLhrR2l_"><img
                            src="{{asset('img/redeffusion/image/vendredi')}}/08.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/tF-fVtd-Jbs?si=gD1Dcxubc2zgBhFg"><img
                            src="{{asset('img/redeffusion/image/vendredi')}}/09.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/mDqChbiXjG8?si=3pcsYsKu5KgJNde3"><img
                            src="{{asset('img/redeffusion/image/vendredi')}}/10.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/4ZBsEmJ42No?si=iO8DLMgNAlFu3icF"><img
                            src="{{asset('img/redeffusion/image/vendredi')}}/11.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/nl_dQ7q2eDk?si=5VPJYH65_Od5a2v3"><img
                            src="{{asset('img/redeffusion/image/vendredi')}}/12.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/G3AtKpxvE4Q?si=OCv3dDhxlNqbS0jR"><img
                            src="{{asset('img/redeffusion/image/vendredi')}}/13.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/tF-fVtd-Jbs?si=SEuX3J5jZX_P1zcM"><img
                            src="{{asset('img/redeffusion/image/vendredi')}}/14.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>

                    </div>

                    <div style="display: block;" class="jr2 jr">
                        <h1> samedi 02 September 2023 </h1>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/2wkO_NmHp7A?si=Pqu37YC0b36hOMgU"><img
                            src="{{asset('img/redeffusion/image/samedi')}}/01.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/XMQgqinblio?si=HMwlGypuhlebBHIL"><img
                            src="{{asset('img/redeffusion/image/samedi')}}/02.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/Rcfoa4CHOm4?si=GXsXy0021RjAE1Zs"><img
                            src="{{asset('img/redeffusion/image/samedi')}}/03.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/q1ccstt0xr4?si=N8Hmt_PBVTaFh2OQ"><img
                            src="{{asset('img/redeffusion/image/samedi')}}/04.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/HjhFiS6Jd9E?si=Ur6e9NNDEqkBOqpK"><img
                            src="{{asset('img/redeffusion/image/samedi')}}/05.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/EPVmz8ZFmQE?si=fmqwSRYCh6ZYgBYQ"><img
                            src="{{asset('img/redeffusion/image/samedi')}}/06.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <!--<div class="txtnormal">-->
                        <!--<li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/fZ-6LQngHQQ?si=6_W2Qy2fDB-zO2Lw"><img-->
                        <!--    src="{{asset('img/redeffusion/image/samedi')}}/08.png" width="100%" alt=""><span class="btnplay"><img-->
                        <!--    src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>-->
                        <!--</div>-->
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/iShRQvbtZsk?si=DQMUl0hu0Z6MdmzC"><img
                            src="{{asset('img/redeffusion/image/samedi')}}/09.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/wGue5GXZIbU?si=e15_rYd6KyzbrzDR"><img
                            src="{{asset('img/redeffusion/image/samedi')}}/10.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/EyFmzYK8-fY?si=EHfM_GSQ2mn78oKr"><img
                            src="{{asset('img/redeffusion/image/samedi')}}/11.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/6pjAfyOGbDY?si=gf0ib32Iqtu3ImLV"><img
                            src="{{asset('img/redeffusion/image/samedi')}}/12.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/rp2r6LpQmos?si=WgdFtZONpYu3Z8OG"><img
                            src="{{asset('img/redeffusion/image/samedi')}}/13.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/K0A4hBPHbKc?si=1MTbCsShn7ppJfFq"><img
                            src="{{asset('img/redeffusion/image/samedi')}}/14.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/rlQ7EXTYBRY?si=Z9JP68_kC610cYZ3"><img
                            src="{{asset('img/redeffusion/image/samedi')}}/15.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/uvk03qctchQ?si=Wa0Lt320js8hn2f3"><img
                            src="{{asset('img/redeffusion/image/samedi')}}/16.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                        <div class="txtnormal">
                        <li><a onclick='vedioSource(this)' id="https://www.youtube.com/embed/OKZItnCLIXs?si=7mF3_rnzyC7F6AK_"><img
                            src="{{asset('img/redeffusion/image/samedi')}}/17.png" width="100%" alt=""><span class="btnplay"><img
                            src="img/redeffusion/image/Play.png" width="10%" alt=""></span></a></li>
                        </div>
                    </div>

                    <div style="display: block;" class="jr3 jr">
                        <h1> Dimanche 03 September 2023 </h1>
                        <div class="txtnormal">
                        </div>
                    </div>
                </div>
            </div>

            <script src="js/js/js/js.js"></script>
            <!-- lien de live -->
            <a hidden id="cmclive" class="glightbox"></a>
            <script src="{{asset('js/js/js/jquery.js')}}"></script>
            <script src="{{asset('js/js/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('js/js/js/glightbox.min.js')}}" id="glightbox"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script>
                window.addEventListener('load', function () {
                    const hiddenLink = document.querySelector('.privideo');
                    hiddenLink.click();
                });
            </script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>

</html>