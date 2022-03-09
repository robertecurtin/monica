@extends('layouts.skeleton')

@section('content')

<div>

  {{-- Breadcrumb --}}
  <div class="breadcrumb">
    <div class="{{ Auth::user()->getFluidLayout() }}">
      <div class="row">
        <div class="col-12">
          <ul class="horizontal">
            <li>
              <a href="{{ route('dashboard.index') }}">{{ trans('app.breadcrumb_dashboard') }}</a>
            </li>
            <li>
              <a href="{{ route('settings.subscriptions.index') }}">{{ trans('app.breadcrumb_settings') }}</a>
            </li>
            <li>
              {{ trans('app.breadcrumb_settings_subscriptions') }}
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="mt4 mw6 center mb4 pa2 pa0-ns">
    <div class="b--gray-monica br3 ba bg-white pa4">
      <div class="tc">
        <svg width="124px" height="114px" viewBox="0 0 124 114" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <defs></defs>
          <g id="App" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Artboard-5" transform="translate(-310.000000, -181.000000)">
              <g id="Imported-Layers" transform="translate(310.000000, 181.000000)">
                <path d="M26.7867319,23.4678522 L32.066953,34.3611715 C32.4444118,35.1404424 33.1727181,35.6797724 34.0144722,35.802966 L45.7815219,37.5298246 C47.899913,37.8406735 48.7507709,40.5022275 47.2206273,42.0328359 L38.7225526,50.5353406 C38.1146969,51.1434298 37.8387809,52.0179608 37.9837418,52.8745859 L40.0145961,64.8544438 C40.3801499,67.0117637 38.1686196,68.6612682 36.2715216,67.6456376 L25.7397915,62.0073832 C24.9869748,61.6041392 24.0877966,61.6055717 23.3363805,62.0116807 L12.8235584,67.6886121 C10.9306621,68.7106889 8.71352952,67.069063 9.07138005,64.9110269 L11.0602166,52.9232903 C11.2023764,52.0666653 10.9236592,51.1928505 10.3137026,50.58691 L1.78621559,42.1159199 C0.25046959,40.5903252 1.09152337,37.9259062 3.20991446,37.6071787 L14.9706615,35.8373456 C15.8117153,35.711287 16.5379208,35.1690921 16.9125784,34.3891049 L22.1549836,23.4764471 C23.0989807,21.5117962 25.8364322,21.5067825 26.7867319,23.4678522" id="Fill-1" fill="#FFF3B6"></path>
                <path d="M12.9126394,71 C11.934032,71 10.9611142,70.6931249 10.1290134,70.0907667 C8.65114562,69.0206197 7.92216847,67.2370415 8.22727208,65.437087 L10.2470722,53.519509 C10.2740977,53.3607314 10.2214691,53.1983937 10.1062551,53.0866086 L1.44600658,44.6656983 C0.137403691,43.3926293 -0.327008094,41.5228982 0.234126513,39.7848884 C0.794549923,38.0483026 2.26388338,36.8037138 4.06747953,36.5388471 L16.0113257,34.7794771 C16.1706338,34.7559809 16.3086061,34.6548758 16.3797258,34.5103383 L21.703037,23.6621953 C22.5074011,22.0238665 24.1395987,21.00356 25.9638196,21 L25.9723539,21 C27.7930188,21 29.4252164,22.0138984 30.2331365,23.6472431 L35.5962747,34.476162 C35.6681056,34.6206995 35.8046555,34.7203805 35.9639637,34.7431647 L47.915633,36.4598143 C49.7213627,36.720409 51.1949634,37.9593017 51.7610764,39.6944634 C52.3279005,41.4303372 51.8691783,43.3014924 50.5655538,44.5781214 L41.9358868,53.029648 C41.8206728,53.1421451 41.7680442,53.3051948 41.7957809,53.4639724 L43.8582528,65.3722944 C44.1697572,67.1715368 43.447892,68.9579631 41.9735802,70.0338061 C40.5006908,71.1096491 38.5818807,71.2534746 36.9653294,70.4040499 L26.2689232,64.7998405 C26.1266837,64.7250797 25.9567076,64.7265038 25.8130458,64.8005525 L15.1379755,70.4439223 C14.4346014,70.8155901 13.6714868,71 12.9126394,71 L12.9126394,71 Z M25.9723539,25.2720437 L25.9709315,25.2720437 C25.7696627,25.2727558 25.6217337,25.3646047 25.5328341,25.5461666 L20.2095229,36.3950216 C19.5189504,37.801236 18.1811884,38.777398 16.6322008,39.0059524 L4.68835471,40.7646104 C4.48850829,40.7945147 4.3562256,40.9070118 4.29435145,41.0985418 C4.23247729,41.2914958 4.27443792,41.4602415 4.41952216,41.601219 L13.0783483,50.0214172 C14.2020399,51.1143484 14.7162355,52.6885965 14.4545149,54.2343643 L12.4347148,66.1512303 C12.4005774,66.3498804 12.4667187,66.510794 12.6310053,66.6296992 C12.7931582,66.7464684 12.9659792,66.7599966 13.1452009,66.6660116 L23.8216935,61.0219298 C25.2063945,60.2899863 26.8613505,60.2878503 28.2488962,61.0155218 L38.9453024,66.6197311 C39.1216793,66.7137161 39.2966339,66.7009 39.459498,66.5819948 C39.6230734,66.4630895 39.6877923,66.3021759 39.6536549,66.1021018 L37.5911829,54.1937799 C37.324484,52.6494361 37.83299,51.073764 38.9502808,49.9772727 L47.5820815,41.5243222 C47.7264545,41.3833447 47.767704,41.213887 47.7051186,41.022357 C47.6425333,40.8294031 47.5095394,40.7176179 47.3089818,40.6891376 L35.3587349,38.972488 C33.8097473,38.7503418 32.4684293,37.7784518 31.7728785,36.3729494 L26.4111626,25.5440305 C26.3208406,25.3638927 26.1736227,25.2720437 25.9723539,25.2720437 L25.9723539,25.2720437 Z" id="Fill-2" fill="#FFDC0D"></path>
                <path d="M69.7454224,37.7860069 L72.1723717,52.7766803 C72.3465311,53.8483276 73.0495144,54.768554 74.0521646,55.2365824 L88.0793957,61.7827851 C90.6050588,62.9618036 90.64948,66.456186 88.1548413,67.6957729 L74.2996542,74.5819844 C73.3089907,75.0747908 72.6299807,76.0115358 72.4840253,77.0873128 L70.4399445,92.1323601 C70.0718831,94.8414184 66.6817691,95.9626217 64.7025574,94.0299398 L53.7114807,83.2948832 C52.9260009,82.5274543 51.8034839,82.1860689 50.709876,82.3829161 L35.4198133,85.1353359 C32.6664034,85.6308954 30.5264292,82.8296079 31.798427,80.3944838 L38.8606944,66.8739701 C39.365545,65.9076292 39.3507379,64.7602714 38.821914,63.8056312 L31.4155585,50.4613164 C30.081512,48.0585414 32.1495661,45.2056331 34.9149627,45.6344297 L50.2705996,48.0131151 C51.3684381,48.1831195 52.4817888,47.8148913 53.2482309,47.0281907 L63.9607937,36.0288357 C65.8899434,34.0479744 69.3082613,35.0865844 69.7454224,37.7860069" id="Fill-3" fill="#FFE876"></path>
                <path d="M67.0517206,97 C65.6283775,97 64.243674,96.4532363 63.1954865,95.427024 L52.2443156,84.7143022 C51.951357,84.4271826 51.5333466,84.3028557 51.1265768,84.3736053 L35.8927309,87.1204746 C33.8272676,87.495516 31.7674246,86.7021592 30.5119882,85.056373 C29.2572543,83.4119606 29.0710816,81.254442 30.0237239,79.4266302 L37.0610525,65.9340684 C37.2486303,65.5727647 37.24301,65.1448328 37.0462992,64.7890243 L29.6668343,51.4716192 C28.6671219,49.6678485 28.7991992,47.5062086 30.0110782,45.8315731 C31.2236597,44.1562507 33.2666418,43.3148115 35.3370229,43.6376494 L50.6362049,46.011538 C51.0436772,46.073358 51.4609851,45.9366671 51.7462158,45.6433655 L62.4191814,34.6668783 C63.8664108,33.1804503 66.0098559,32.6364342 68.0120908,33.2450179 C70.0157307,33.8536016 71.4643652,35.491832 71.7917482,37.5181548 L74.2105884,52.4785985 C74.2759245,52.8790549 74.5372688,53.2218125 74.9110193,53.3962823 L88.8866186,59.9292842 C90.7806626,60.8146842 91.9728705,62.6397484 91.9995669,64.6907992 C92.0255609,66.7425368 90.8797205,68.5957635 89.0095629,69.5264982 L75.205383,76.3988232 C74.8358477,76.5822226 74.5829338,76.9318492 74.5281358,77.3336793 L72.4921791,92.3483873 C72.216784,94.3829527 70.8103018,96.0548407 68.8221177,96.7128804 C68.2397133,96.9058962 67.6425555,97 67.0517206,97 L67.0517206,97 Z M51.3549018,80.2316642 C52.7937007,80.2316642 54.1903474,80.7873575 55.2258892,81.8012057 L66.1770601,92.5139275 C66.676565,93.0029925 67.2484314,92.882787 67.469731,92.8092898 C67.6924357,92.7357927 68.2207447,92.4905733 68.3141823,91.8064318 L70.3494365,76.7910369 C70.5868945,75.044278 71.6870699,73.5248794 73.2923705,72.7260274 L87.0965504,65.8530155 C87.7260249,65.5397941 87.7871458,64.9717368 87.7843356,64.7423159 C87.7815255,64.512208 87.7063539,63.9462114 87.0684489,63.6481016 L73.0928495,57.1144128 C71.4671753,56.3547135 70.3290629,54.8621036 70.0480475,53.1215267 L67.6285047,38.1624567 C67.5182062,37.4810627 66.9842769,37.2482074 66.7594645,37.1795184 C66.5353547,37.1128902 65.9599757,37.0064224 65.473819,37.5071645 L54.8008534,48.4836517 C53.5594678,49.7605785 51.7588615,50.358172 49.9758186,50.0813557 L34.6766367,47.7074671 C33.9790159,47.6003124 33.5869994,48.024123 33.452112,48.2123306 C33.3165221,48.3998513 33.0369117,48.9019672 33.3734277,49.5084902 L40.75219,62.8258954 C41.6106921,64.3748302 41.6345785,66.2362996 40.816121,67.8051542 L33.779495,81.2990898 C33.4584348,81.9138555 33.7506909,82.4091025 33.8911986,82.5938757 C34.0317063,82.7772751 34.4349634,83.1935298 35.128369,83.0678291 L50.3622148,80.3209598 C50.6931105,80.2612004 51.0254112,80.2316642 51.3549018,80.2316642 L51.3549018,80.2316642 Z" id="Fill-4" fill="#FFDC0D"></path>
                <path d="M101.357833,23.5324969 L102.633381,31.7771256 C102.724691,32.3668417 103.094112,32.872516 103.621059,33.1303387 L110.990658,36.7305977 C112.317786,37.3787156 112.341484,39.3009904 111.030388,39.9825824 L103.750705,43.7701546 C103.230031,44.0407972 102.873156,44.5557304 102.796484,45.1475831 L101.723072,53.4228372 C101.5293,54.912796 99.7477155,55.5295763 98.7084577,54.4662357 L92.9336418,48.5619533 C92.5203085,48.1396084 91.9306291,47.9522952 91.3562841,48.0605523 L83.3224242,49.5740143 C81.8761064,49.8467935 80.7511151,48.3062673 81.4195579,46.9665863 L85.1304958,39.5303244 C85.3960606,38.9990102 85.3883934,38.3679855 85.1095852,37.8430813 L81.218119,30.5036809 C80.5176132,29.1818054 81.6042684,27.6135027 83.0568594,27.8485344 L91.1255702,29.1568778 C91.7020063,29.2501783 92.2875036,29.0479085 92.6896845,28.6155926 L98.3181262,22.5660179 C99.3315942,21.4763252 101.127816,22.0475236 101.357833,23.5324969" id="Fill-5" fill="#FFF3B6"></path>
                <path d="M98.9353231,59 C97.934043,59 96.9611925,58.588308 96.224794,57.8164762 L90.5971004,51.9206396 L82.7678387,53.4323553 C81.3186174,53.7133515 79.8687028,53.117233 78.9873821,51.8792526 C78.1060615,50.6419982 77.9743141,49.0177388 78.6441455,47.6425276 L82.260958,40.2160971 L78.4687135,32.8855101 C77.7662919,31.5284512 77.8585151,29.9012874 78.7107126,28.6415243 C79.5615234,27.3810351 80.9968765,26.7493383 82.4530318,26.9903996 L90.315577,28.2966324 L95.8011221,22.254126 C96.8169638,21.135224 98.3230444,20.7264363 99.7313547,21.184598 C101.139665,21.6427597 102.156893,22.8763836 102.386411,24.4011689 L103.62969,32.6350097 L110.812697,36.2313248 C112.143345,36.8964216 112.980981,38.2694545 112.999703,39.8138442 C113.017732,41.3575078 112.213379,42.7523233 110.899372,43.4522724 L103.803736,47.2351921 L102.757384,55.4995286 C102.563923,57.0308487 101.576511,58.2891596 100.178602,58.7843518 C99.7694921,58.9295694 99.3499806,59 98.9353231,59 L98.9353231,59 Z M90.7038851,47.5372448 C91.7134861,47.5372448 92.6946575,47.9554717 93.4227351,48.7178643 L98.7168998,54.2651785 L99.7015381,46.4909517 C99.8686493,45.1752798 100.641798,44.0316908 101.770665,43.4312158 L108.443324,39.8741095 L101.686763,36.4905383 C100.544028,35.9183807 99.7445294,34.7965744 99.5469083,33.4867112 L98.3771302,25.7400757 L93.2167932,31.4238945 C92.3451802,32.3845092 91.0741646,32.8339578 89.8281117,32.6262966 L82.4308427,31.3977553 L85.9977298,38.2926893 C86.6009942,39.4580609 86.617636,40.8594112 86.0428013,42.0400307 L82.6402517,49.0264518 L90.005624,47.6047711 C90.2379154,47.5597536 90.4715937,47.5372448 90.7038851,47.5372448 L90.7038851,47.5372448 Z" id="Fill-6" fill="#FFDC0D"></path>
                <path d="M122,14 L114,22" id="Fill-7" fill="#E6E6E6"></path>
                <path d="M113.291602,26 C112.724675,26 112.157749,25.7984216 111.713834,25.3915728 C110.796208,24.5490783 110.758005,23.1476281 111.629789,22.2600923 L120.045057,13.6904242 C120.915312,12.8036267 122.366247,12.7652308 123.286166,13.6092021 C124.203792,14.4516966 124.241995,15.8531467 123.370211,16.7406826 L114.954179,25.3103507 C114.504152,25.7688863 113.899023,26 113.291602,26" id="Fill-8" fill="#CCCCCC"></path>
                <path d="M12,18 L6,8" id="Fill-9" fill="#F2F2F2"></path>
                <path d="M11.8348569,20 C11.0486827,20 10.2892196,19.6088786 9.9066004,18.9283537 L4.23878243,8.86616548 C3.69300859,7.89820568 4.11461166,6.71171665 5.17944818,6.21690873 C6.24139701,5.72144456 7.5495216,6.10337853 8.09385159,7.07133833 L13.7616696,17.1335265 C14.3067215,18.1014863 13.8851184,19.2879753 12.8210038,19.7827833 C12.5048015,19.9304381 12.1676634,20 11.8348569,20" id="Fill-10" fill="#E6E6E6"></path>
                <path d="M38,21 L42,8" id="Fill-11" fill="#E6E6E6"></path>
                <path d="M37.1328408,23 C36.9168312,23 36.6972688,22.9643401 36.4812592,22.8899854 C35.3607095,22.5068311 34.7432348,21.2253507 35.1020665,20.0280884 L38.8381796,7.58126411 C39.1963007,6.3847605 40.3985646,5.72543162 41.5191143,6.10934464 C42.6396641,6.49249893 43.2571388,7.77397934 42.8975965,8.97124168 L39.1614834,21.4180659 C38.8722864,22.3831595 38.0338281,23 37.1328408,23" id="Fill-12" fill="#CCCCCC"></path>
                <path d="M53,101 L47,111" id="Fill-13" fill="#F2F2F2"></path>
                <path d="M48.1642056,114 C47.8321126,114 47.4949661,113.930441 47.1794778,113.782791 C46.1146145,113.287345 45.6930009,112.101556 46.2387884,111.133632 L51.9067487,101.071816 C52.4518143,100.103892 53.7585278,99.7213157 54.8212253,100.216762 C55.8853666,100.712207 56.3069802,101.898653 55.7611927,102.86592 L50.0939544,112.928393 C49.7113255,113.608893 48.9518434,114 48.1642056,114" id="Fill-14" fill="#E6E6E6"></path>
                <path d="M78,97 L84,107" id="Fill-15" fill="#E6E6E6"></path>
                <path d="M85.1217455,110 C84.5327077,110 83.9524427,109.692173 83.5858607,109.116307 L77.3458196,99.3049408 C76.746129,98.361218 76.9460259,97.054525 77.7932377,96.385822 C78.6404495,95.716421 79.8135121,95.9404854 80.414456,96.8842081 L86.6538705,106.694876 C87.2541877,107.638599 87.0536642,108.94599 86.207079,109.614693 C85.8768418,109.875054 85.4977271,110 85.1217455,110" id="Fill-16" fill="#CCCCCC"></path>
                <path d="M90,11 L89,1" id="Fill-17" fill="#F2F2F2"></path>
                <path d="M89.8606051,14 C88.8223244,14 87.9115143,13.3232358 87.7512858,12.3780557 L86.0243785,2.19478943 C85.8477711,1.15292871 86.6496258,0.180398161 87.8168015,0.0226561234 C88.9839771,-0.138902254 90.0721068,0.581113822 90.2487142,1.62297454 L91.9756215,11.8062408 C92.1522289,12.8481015 91.3503742,13.820632 90.1831985,13.9783741 C90.0749553,13.9936394 89.966712,14 89.8606051,14" id="Fill-18" fill="#E6E6E6"></path>
              </g>
            </g>
          </g>
        </svg>
      </div>

      <h2 class="tc mt2 fw4">{{ trans('settings.subscriptions_upgrade_success') }}</h2>
      <p class="tc mb4">{{ trans('settings.subscriptions_upgrade_thanks') }}</p>
      <p class="tc"><a href="settings/subscriptions" class="btn btn-primary">{{ trans('settings.subscriptions_back') }}</a></p>
    </div>
  </div>
</div>

@endsection
