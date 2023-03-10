<!DOCTYPE html>
<html lang="en" class="a0">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Falcone</title>
  <link rel="shortcut icon" href="images/newlogo.png" type="image/x-icon" />
  <link rel="stylesheet" href="css/glightbox.min.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/apexcharts.css" />
  <link rel="stylesheet" href="css/tailwind.css" />

  <script defer src="js/alpine.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    // ===== wow js
    new WOW().init();
  </script>
</head>

<body x-data="
      {
        scrolledFromTop: false
      }
    " x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false" @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false" class="a1 dark:a2">

  <header x-data="
        {
          navbarOpen: false,
          dropdownOpen: false
        }
      " :class="scrolledFromTop ? 'a1 dark:a3 a4 dark:a4 a5 a6 ' : ' a7 dark:a7' " class="a8 a9 aa ab ac ad">
    <div class="ae">
      <div class="af ag aa ac ah">
        <div class="ai aj ak">
          <a href="index.php" :class="scrolledFromTop && '!al lg:!am' " class="an ab a2h lg:aW">
            <img src="images/newlogo-black.png" style="height: 10%; width: 70%;" alt="logo" class="ab dark:ao" />
            <img src="images/newlogo.png" style="height: 10%; width: 70%;" alt="logo" class="ao ab dark:an" />
          </a>
        </div>
        <div class="aa ab ac ap ak">
          <div>
            <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive' " id="navbarToggler" class="aq ar as/2 an at/2 au av aw[6px] ax focus:ay lg:ao">
              <span :class="navbarOpen && 'az aA[7px]' " class="af aB[6px] an aC[2px] aD[30px] a2 dark:a1"></span>
              <span :class="navbarOpen && 'aE' " class="af aB[6px] an aC[2px] aD[30px] a2 dark:a1"></span>
              <span :class="navbarOpen && 'aA[-8px] aF[135deg]' " class="af aB[6px] an aC[2px] aD[30px] a2 dark:a1"></span>
            </button>
            <nav :class="!navbarOpen && 'ao' " id="navbarCollapse" class="aq ar aG ab aH[250px] au a1 al aI aJ dark:a2 lg:aK lg:an lg:ab lg:aj lg:a7 lg:aL lg:aM dark:lg:a7">
              <ul class="aN lg:aa">
                <li class="aQ dark:aS">
                  <a href="#home" class="scroll-menu aa am aO aP aR hover:aR dark:aT dark:hover:aT lg:aU lg:aV lg:aW xl:aX 2xl:aY">
                    Home
                  </a>
                </li>
                <li>
                  <a href="#features" class="scroll-menu aa am aO aP aQ hover:aR dark:aS dark:hover:aT lg:aU lg:aV lg:aW xl:aX 2xl:aY">
                    Features
                  </a>
                </li>
                <li>
                  <a href="#roadmap" class="scroll-menu aa am aO aP aQ hover:aR dark:aS dark:hover:aT lg:aU lg:aV lg:aW xl:aX 2xl:aY">
                    Roadmap
                  </a>
                </li>
                <li>
                  <a href="index.php#faq" class="scroll-menu aa am aO aP aQ hover:aR dark:aS dark:hover:aT lg:aU lg:aV lg:aW xl:aX 2xl:aY">
                    See FAQ
                  </a>
                </li>
                <li>
                  <a href="#contact" class="scroll-menu aa am aO aP aQ hover:aR dark:aS dark:hover:aT lg:aU lg:aV lg:aW xl:aX 2xl:aY">
                    Support
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="aa ap a1l lg:a1m xl:a1n 2xl:a1o">
            <div class="a1p">
              <label for="darkToggler" class="aa a1q a1r a1s ac a1t a1u a1v dark:a1w[#1E2763]">
                <input type="checkbox" name="darkToggler" id="darkToggler" class="a1x" aria-label="darkToggler" />
                <span class="aa a1y a1z ac a1t a1u a1A aT dark:a7 dark:aS">
                  <svg width="16" height="16" viewBox="0 0 16 16" class="a1B">
                    <path d="M4.50663 3.2267L3.30663 2.03337L2.36663 2.97337L3.55996 4.1667L4.50663 3.2267ZM2.66663 7.00003H0.666626V8.33337H2.66663V7.00003ZM8.66663 0.366699H7.33329V2.33337H8.66663V0.366699ZM13.6333 2.97337L12.6933 2.03337L11.5 3.2267L12.44 4.1667L13.6333 2.97337ZM11.4933 12.1067L12.6866 13.3067L13.6266 12.3667L12.4266 11.1734L11.4933 12.1067ZM13.3333 7.00003V8.33337H15.3333V7.00003H13.3333ZM7.99996 3.6667C5.79329 3.6667 3.99996 5.46003 3.99996 7.6667C3.99996 9.87337 5.79329 11.6667 7.99996 11.6667C10.2066 11.6667 12 9.87337 12 7.6667C12 5.46003 10.2066 3.6667 7.99996 3.6667ZM7.33329 14.9667H8.66663V13H7.33329V14.9667ZM2.36663 12.36L3.30663 13.3L4.49996 12.1L3.55996 11.16L2.36663 12.36Z" />
                  </svg>
                </span>
                <span class="aa a1y a1z ac a1t a1u a7 aQ dark:a1A dark:aT">
                  <svg width="13" height="15" viewBox="0 0 13 15" class="a1B">
                    <path d="M10.6111 12.855C11.591 12.1394 12.3151 11.1979 12.7723 10.1623C10.4824 10.4065 8.1342 9.46314 6.67948 7.47109C5.22476 5.47905 5.04093 2.95516 5.97054 0.848179C4.84491 0.968503 3.72768 1.37162 2.74781 2.08719C-0.224105 4.25747 -0.874706 8.43084 1.29558 11.4028C3.46586 14.3747 7.63923 15.0253 10.6111 12.855Z" />
                  </svg>
                </span>
              </label>
            </div>
            <div class="ao sm:aa">
              <a href="signin.php" class="aa ac a1t a1u a1C a1D aw[9px] a1E a1F aP aQ a1G hover:a1H hover:a1A hover:aT dark:a1I dark:aT dark:hover:a1 dark:hover:aR lg:px-4 xl:px-8">
                Sign In
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>


  <section id="home" class="af a2E a3p a3q">
    <div class="ae">
      <div class="ag aa a1L">
        <div class="ab ak">
          <div class="a3r aH[720px] a2G">
            <h1 class="a1N a2o a1P a2p a1k dark:aT md:a2Q[45px]">
              Falcone Crypto Investment`s
            </h1>
            <p class="a3r a1N aH[620px] aO a1R aQ dark:aT">
              Bitcoin is the biggest opportunity set we can think of over the next decades, Bitcoin is the most
              important invention in the history of the world since the internet.
            </p>
            <div class="a3s a1W aa a1L ac a1t sm:a3t">
              <div class="aZ af a3u a3v sm:a3w">
                <span class="a3x aa a32 a33 ac a1t a1u a1">
                  <svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27.5815 17.3879C25.7115 24.8885 18.1146 29.4533 10.6131 27.5829C3.11474 25.7129 -1.44998 18.1155 0.420775 10.6155C2.28989 3.11409 9.8868 -1.45098 17.386 0.418958C24.8869 2.28889 29.4514 9.8871 27.5813 17.3881L27.5814 17.3879H27.5815Z" fill="#F7931A" />
                    <path d="M18.9713 12.0301C19.2001 10.454 18.0353 9.60675 16.4424 9.04155L16.9591 6.90652L15.6975 6.58268L15.1945 8.6615C14.8628 8.57628 14.5222 8.49599 14.1837 8.41639L14.6904 6.32384L13.4295 6L12.9125 8.13434C12.6381 8.06996 12.3685 8.00634 12.107 7.9393L12.1084 7.93259L10.3686 7.48503L10.033 8.87315C10.033 8.87315 10.969 9.09418 10.9493 9.10778C11.4602 9.23914 11.5526 9.58753 11.5372 9.86367L10.9486 12.296C10.9838 12.3052 11.0294 12.3185 11.0798 12.3393C11.0377 12.3286 10.9929 12.3168 10.9464 12.3054L10.1214 15.7127C10.059 15.8726 9.90051 16.1125 9.54333 16.0214C9.55597 16.0403 8.62637 15.7857 8.62637 15.7857L8 17.2734L9.64178 17.695C9.94721 17.7739 10.2465 17.8564 10.5413 17.9341L10.0192 20.0936L11.2794 20.4174L11.7964 18.2808C12.1406 18.3771 12.4747 18.4659 12.8018 18.5496L12.2865 20.6762L13.5482 21L14.0702 18.8445C16.2215 19.264 17.8391 19.0949 18.52 17.0903C19.0687 15.4764 18.4927 14.5455 17.3609 13.9385C18.1852 13.7426 18.8062 13.1841 18.9717 12.0303L18.9713 12.03L18.9713 12.0301ZM16.0888 16.194C15.6989 17.8079 13.0611 16.9355 12.2059 16.7167L12.8987 13.8557C13.7539 14.0757 16.4963 14.5109 16.0888 16.194H16.0888ZM16.4789 12.0068C16.1233 13.4748 13.9278 12.7289 13.2157 12.5461L13.8438 9.95132C14.556 10.1342 16.8494 10.4755 16.4791 12.0068H16.4789Z" fill="white" />
                  </svg>
                </span>
                <div class="aq a3y a3z/2 a9 a3A/2 a3B a1u a1w[#2D2C4A] a23 am aT aE group-hover:a1d">
                  <span class="aq a3C a3z/2 a3e a3f a3A/2 az a1w[#2D2C4A]"></span>
                  <span>Bitcoin (BTC)</span>
                </div>
              </div>
              <div class="aZ af a3u a3v sm:a3w">
                <span class="a3x aa a32 a33 ac a1t a1u a1">
                  <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="14.28" cy="14.28" r="14.28" fill="#295ADA" />
                    <g clip-path="url(#clip0_73_10326)">
                      <path d="M14.4692 7L13.1848 7.73853L9.68479 9.76147L8.40039 10.5V17.5L9.68479 18.2385L13.2169 20.2615L14.5013 21L15.7857 20.2615L19.2536 18.2385L20.538 17.5V10.5L19.2536 9.76147L15.7536 7.73853L14.4692 7ZM10.9692 16.0229V11.9771L14.4692 9.95413L17.9692 11.9771V16.0229L14.4692 18.0459L10.9692 16.0229Z" fill="white" />
                    </g>
                    <defs>
                      <clipPath id="clip0_73_10326">
                        <rect width="12.1376" height="14" fill="white" transform="translate(8.40039 7)" />
                      </clipPath>
                    </defs>
                  </svg>
                </span>
                <div class="aq a3y a3z/2 a9 a3A/2 a3B a1u a1w[#2D2C4A] a23 am aT aE group-hover:a1d">
                  <span class="aq a3C a3z/2 a3e a3f a3A/2 az a1w[#2D2C4A]"></span>
                  <span>Bitcoin (BTC)</span>
                </div>
              </div>
              <div class="aZ af a3u a3v sm:a3w">
                <span class="a3x aa a32 a33 ac a1t a1u a1">
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="14" cy="14" r="14" fill="#24292F" />
                    <g clip-path="url(#clip0_73_10306)">
                      <path d="M17.0343 8.79657L14.7432 12.2005C14.5847 12.4323 14.8894 12.7129 15.1088 12.5177L17.3633 10.5534C17.4243 10.5046 17.5096 10.5412 17.5096 10.6266V16.7635C17.5096 16.8489 17.3999 16.8855 17.3511 16.8245L10.5265 8.65017C10.3071 8.38176 9.99026 8.23535 9.63684 8.23535H9.39311C8.75939 8.23535 8.23535 8.75997 8.23535 9.40659V18.0445C8.23535 18.6911 8.75939 19.2157 9.40529 19.2157C9.80746 19.2157 10.1853 19.0083 10.4046 18.6545L12.6958 15.2506C12.8542 15.0188 12.5495 14.7382 12.3301 14.9334L10.0756 16.8855C10.0146 16.9343 9.92933 16.8977 9.92933 16.8123V10.6876C9.92933 10.6022 10.039 10.5656 10.0878 10.6266L16.9124 18.8009C17.1318 19.0693 17.4608 19.2157 17.8021 19.2157H18.0458C18.6917 19.2157 19.2157 18.6911 19.2157 18.0445V9.40659C19.2157 8.75997 18.6917 8.23535 18.0458 8.23535C17.6314 8.23535 17.2537 8.44276 17.0343 8.79657Z" fill="white" />
                    </g>
                    <defs>
                      <clipPath id="clip0_73_10306">
                        <rect width="10.9804" height="10.9804" fill="white" transform="translate(8.23535 8.23535)" />
                      </clipPath>
                    </defs>
                  </svg>
                </span>
                <div class="aq a3y a3z/2 a9 a3A/2 a3B a1u a1w[#2D2C4A] a23 am aT aE group-hover:a1d">
                  <span class="aq a3C a3z/2 a3e a3f a3A/2 az a1w[#2D2C4A]"></span>
                  <span>Bitcoin (BTC)</span>
                </div>
              </div>
              <div class="aZ af a3u a3v sm:a3w">
                <span class="a3x aa a32 a33 ac a1t a1u a1">
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27.578 17.3867C25.7082 24.8867 18.1118 29.4511 10.6109 27.5809C3.11305 25.7111 -1.45134 18.1142 0.419279 10.6148C2.28826 3.11387 9.88462 -1.45087 17.3833 0.418928C24.8837 2.28873 29.4478 9.88639 27.5778 17.3868L27.5779 17.3867H27.578Z" fill="#1181E7" />
                    <g clip-path="url(#clip0_73_10312)">
                      <path d="M13.9982 6.12451L13.8926 6.48343V16.8976L13.9982 17.003L18.8323 14.1456L13.9982 6.12451Z" fill="#D6D6D6" />
                      <path d="M13.9982 6.12451L9.16406 14.1456L13.9982 17.003V11.9483V6.12451Z" fill="white" />
                      <path d="M13.998 17.9175L13.9385 17.9901V21.6998L13.998 21.8736L18.835 15.0615L13.998 17.9175Z" fill="#D6D6D6" />
                      <path d="M13.9982 21.8736V17.9175L9.16406 15.0615L13.9982 21.8736Z" fill="white" />
                      <path d="M13.998 17.0025L18.8321 14.1451L13.998 11.9478V17.0025Z" fill="#F3F3F3" />
                      <path d="M9.16406 14.1451L13.9982 17.0025V11.9478L9.16406 14.1451Z" fill="#E2E2E2" />
                    </g>
                    <defs>
                      <clipPath id="clip0_73_10312">
                        <rect width="15.749" height="15.749" fill="white" transform="translate(6.125 6.12451)" />
                      </clipPath>
                    </defs>
                  </svg>
                </span>
                <div class="aq a3y a3z/2 a9 a3A/2 a3B a1u a1w[#2D2C4A] a23 am aT aE group-hover:a1d">
                  <span class="aq a3C a3z/2 a3e a3f a3A/2 az a1w[#2D2C4A]"></span>
                  <span>Bitcoin (BTC)</span>
                </div>
              </div>
              <div class="aZ af a3u a3v sm:a3w">
                <span class="a3x aa a32 a33 ac a1t a1u a1">
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="14" cy="13.9995" r="14" fill="#8247E5" />
                    <g clip-path="url(#clip0_73_10294)">
                      <path d="M17.5729 10.8364C17.3177 10.686 16.9896 10.686 16.6979 10.8364L14.6562 12.0776L13.2708 12.8675L11.2656 14.1087C11.0104 14.2591 10.6823 14.2591 10.3906 14.1087L8.82292 13.1308C8.56771 12.9803 8.38542 12.6794 8.38542 12.3409V10.4603C8.38542 10.1594 8.53125 9.85852 8.82292 9.67046L10.3906 8.73016C10.6458 8.57972 10.974 8.57972 11.2656 8.73016L12.8333 9.70807C13.0885 9.85852 13.2708 10.1594 13.2708 10.4979V11.7391L14.6562 10.9117V9.63285C14.6562 9.33195 14.5104 9.03106 14.2187 8.843L11.3021 7.07524C11.0469 6.92479 10.7187 6.92479 10.4271 7.07524L7.4375 8.88061C7.14583 9.03106 7 9.33195 7 9.63285V13.1684C7 13.4693 7.14583 13.7702 7.4375 13.9582L10.3906 15.726C10.6458 15.8764 10.974 15.8764 11.2656 15.726L13.2708 14.5224L14.6562 13.6949L16.6615 12.4914C16.9167 12.3409 17.2448 12.3409 17.5365 12.4914L19.1042 13.4317C19.3594 13.5821 19.5417 13.883 19.5417 14.2215V16.1021C19.5417 16.403 19.3958 16.7039 19.1042 16.892L17.5729 17.8323C17.3177 17.9827 16.9896 17.9827 16.6979 17.8323L15.1302 16.892C14.875 16.7415 14.6927 16.4406 14.6927 16.1021V14.8985L13.3073 15.726V16.9672C13.3073 17.2681 13.4531 17.569 13.7448 17.757L16.6979 19.5248C16.9531 19.6752 17.2812 19.6752 17.5729 19.5248L20.526 17.757C20.7812 17.6066 20.9635 17.3057 20.9635 16.9672V13.394C20.9635 13.0931 20.8177 12.7923 20.526 12.6042L17.5729 10.8364Z" fill="white" />
                    </g>
                    <defs>
                      <clipPath id="clip0_73_10294">
                        <rect width="14" height="12.6" fill="white" transform="translate(7 7)" />
                      </clipPath>
                    </defs>
                  </svg>
                </span>
                <div class="aq a3y a3z/2 a9 a3A/2 a3B a1u a1w[#2D2C4A] a23 am aT aE group-hover:a1d">
                  <span class="aq a3C a3z/2 a3e a3f a3A/2 az a1w[#2D2C4A]"></span>
                  <span>Bitcoin (BTC)</span>
                </div>
              </div>
              <div class="aZ af a3u a3v sm:a3w">
                <span class="a3x aa a32 a33 ac a1t a1u a1">
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="14" cy="14" r="14" fill="#F14E51" />
                    <path d="M20.8096 11.2176C20.1191 10.6117 19.1639 9.6864 18.386 9.03016L18.34 8.99953C18.2634 8.94108 18.177 8.89524 18.0845 8.86391C16.2087 8.53142 7.47873 6.9805 7.30841 7.00019C7.26069 7.00654 7.21507 7.02298 7.17492 7.04831L7.13119 7.08112C7.07734 7.1331 7.03645 7.19589 7.01151 7.26487L7 7.29331V7.44862V7.47268C7.98278 10.0736 11.8633 18.5938 12.6274 20.5931C12.6734 20.7288 12.7609 20.9869 12.9243 21H12.9611C13.0486 21 13.4215 20.5319 13.4215 20.5319C13.4215 20.5319 20.0869 12.8495 20.7612 12.0314C20.8485 11.9306 20.9256 11.8222 20.9914 11.7076C21.0082 11.618 21.0003 11.5257 20.9684 11.4399C20.9366 11.354 20.8818 11.2774 20.8096 11.2176ZM15.1315 12.1123L17.9763 9.87015L19.645 11.3314L15.1315 12.1123ZM14.0268 11.9657L9.12898 8.1508L17.0534 9.53984L14.0268 11.9657ZM14.4687 12.9654L19.4816 12.1976L13.7506 18.76L14.4687 12.9654ZM8.46382 8.53142L13.6171 12.6876L12.8714 18.7644L8.46382 8.53142Z" fill="white" />
                  </svg>
                </span>
                <div class="aq a3y a3z/2 a9 a3A/2 a3B a1u a1w[#2D2C4A] a23 am aT aE group-hover:a1d">
                  <span class="aq a3C a3z/2 a3e a3f a3A/2 az a1w[#2D2C4A]"></span>
                  <span>Bitcoin (BTC)</span>
                </div>
              </div>
            </div>
            <a href="#features" class="a1u a1A a22 a1E a1F aP aT hover:a2X dark:hover:bg-opacity-90">
              Get Started
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="aq a8 a1a a2Z a2w ab a3D" style="
          background-image: linear-gradient(
            180deg,
            #3e7dff 0%,
            rgba(62, 125, 255, 0) 100%
          );
        "></div>
    <img src="images/shapes/hero-shape-1.svg" alt="" class="aq a1a a8 a2Z" />
    <img src="images/shapes/hero-shape-2.svg" alt="" class="aq a19 a8 a2Z" />
  </section>


  <section id="features" class="a1J[110px] a3J">
    <div class="ae">
      <div class="wow fadeInUp a3r a3K aH[590px] a2G md:a30" data-wow-delay="0s">
        <span class="a2d aO a1P a3L aR sm:a1O">
          CRYPTO FEATURE
        </span>
        <h2 class="a2d a2o a1P a2p a1k dark:aT md:a2Q[45px]">
          Best Features
        </h2>
        <p class="aO a1R aQ dark:aS">
          Cryptocurrencies are a digital representation of value considered by their holders as a means of payment.
        </p>
      </div>
      <div class="ag aa a1L">
        <div class="ab ak md:a1M/2 lg:a1M/3">
          <div class="wow fadeInUp a3r a2_ aH[370px] a2G" data-wow-delay="0s">
            <div class="a3r a3M aa a3N a1r ac a1t a1u a1A aT">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 1.66675L5 8.33341V18.3334C5 27.5834 11.4 36.2334 20 38.3334C28.6 36.2334 35 27.5834 35 18.3334V8.33341L20 1.66675ZM20 19.9834H31.6667C30.7833 26.8501 26.2 32.9667 20 34.8834V20.0001H8.33333V10.5001L20 5.31675V19.9834Z" fill="white" />
              </svg>
            </div>
            <div>
              <h3 class="a2d a1O a1P a1k dark:aT sm:a2o lg:a1O xl:a2o">
                Safe & Secure
              </h3>
              <p class="a1F a1R aQ dark:aS sm:aO lg:a1F xl:aO">
                Cryptocurrencies can be stored in special virtual wallets, and tey are most secured with a private key.
              </p>
            </div>
          </div>
        </div>
        <div class="ab ak md:a1M/2 lg:a1M/3">
          <div class="wow fadeInUp a3r a2_ aH[370px] a2G" data-wow-delay="0s">
            <div class="a3r a3M aa a3N a1r ac a1t a1u a1A aT">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M33.3333 9.99992H29.6999C29.8833 9.48325 29.9999 8.91658 29.9999 8.33325C29.9999 5.56659 27.7666 3.33325 24.9999 3.33325C23.2499 3.33325 21.7333 4.23325 20.8333 5.58325L19.9999 6.69992L19.1666 5.56659C18.2666 4.23325 16.7499 3.33325 14.9999 3.33325C12.2333 3.33325 9.99992 5.56659 9.99992 8.33325C9.99992 8.91658 10.1166 9.48325 10.2999 9.99992H6.66659C4.81659 9.99992 3.34992 11.4833 3.34992 13.3333L3.33325 31.6666C3.33325 33.5166 4.81659 34.9999 6.66659 34.9999H33.3333C35.1833 34.9999 36.6666 33.5166 36.6666 31.6666V13.3333C36.6666 11.4833 35.1833 9.99992 33.3333 9.99992ZM24.9999 6.66659C25.9166 6.66659 26.6666 7.41658 26.6666 8.33325C26.6666 9.24992 25.9166 9.99992 24.9999 9.99992C24.0833 9.99992 23.3333 9.24992 23.3333 8.33325C23.3333 7.41658 24.0833 6.66659 24.9999 6.66659ZM14.9999 6.66659C15.9166 6.66659 16.6666 7.41658 16.6666 8.33325C16.6666 9.24992 15.9166 9.99992 14.9999 9.99992C14.0833 9.99992 13.3333 9.24992 13.3333 8.33325C13.3333 7.41658 14.0833 6.66659 14.9999 6.66659ZM33.3333 31.6666H6.66659V28.3333H33.3333V31.6666ZM33.3333 23.3333H6.66659V13.3333H15.1333L11.6666 18.0499L14.3666 19.9999L18.3333 14.5999L19.9999 12.3333L21.6666 14.5999L25.6333 19.9999L28.3333 18.0499L24.8666 13.3333H33.3333V23.3333Z" fill="white" />
              </svg>
            </div>
            <div>
              <h3 class="a2d a1O a1P a1k dark:aT sm:a2o lg:a1O xl:a2o">
                Early Bonus
              </h3>
              <p class="a1F a1R aQ dark:aS sm:aO lg:a1F xl:aO">
                we can get the profit and the success from those Crypto Currencies by geting the Early Success by the
                great knowledge
              </p>
            </div>
          </div>
        </div>
        <div class="ab ak md:a1M/2 lg:a1M/3">
          <div class="wow fadeInUp a3r a2_ aH[370px] a2G" data-wow-delay="0s">
            <div class="a3r a3M aa a3N a1r ac a1t a1u a1A aT">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 3.33325L10.8334 18.3333H29.1667L20 3.33325Z" fill="white" />
                <path d="M29.1666 36.6667C33.3088 36.6667 36.6666 33.3089 36.6666 29.1667C36.6666 25.0246 33.3088 21.6667 29.1666 21.6667C25.0245 21.6667 21.6666 25.0246 21.6666 29.1667C21.6666 33.3089 25.0245 36.6667 29.1666 36.6667Z" fill="white" />
                <path d="M5 22.5H18.3333V35.8333H5V22.5Z" fill="white" />
              </svg>
            </div>
            <div>
              <h3 class="a2d a1O a1P a1k dark:aT sm:a2o lg:a1O xl:a2o">
                Universal Access
              </h3>
              <p class="a1F a1R aQ dark:aS sm:aO lg:a1F xl:aO">
                You do not need to take a permit from anybody while using it. means no one will stop you from using the
                currency.
              </p>
            </div>
          </div>
        </div>

        <div class="ab ak md:a1M/2 lg:a1M/3">
          <div class="wow fadeInUp a3r a2_ aH[370px] a2G" data-wow-delay="0s">
            <div class="a3r a3M aa a3N a1r ac a1t a1u a1A aT">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 24.9999H18.3333V21.6666H5V24.9999ZM5 31.6666H18.3333V28.3333H5V31.6666ZM5 18.3333H18.3333V14.9999H5V18.3333ZM5 8.33325V11.6666H18.3333V8.33325H5ZM21.6667 8.33325H35V31.6666H21.6667V8.33325Z" fill="white" />
              </svg>
            </div>
            <div>
              <h3 class="a2d a1O a1P a1k dark:aT sm:a2o lg:a1O xl:a2o">
                Secure Storage
              </h3>
              <p class="a1F a1R aQ dark:aS sm:aO lg:a1F xl:aO">
                the virtual currency owner should incorporate encryption technology on their storage devices.
              </p>
            </div>
          </div>
        </div>
        <div class="ab ak md:a1M/2 lg:a1M/3">
          <div class="wow fadeInUp a3r a2_ aH[370px] a2G" data-wow-delay="0s">
            <div class="a3r a3M aa a3N a1r ac a1t a1u a1A aT">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M35 30V31.6667C35 33.5 33.5 35 31.6667 35H8.33333C6.48333 35 5 33.5 5 31.6667V8.33333C5 6.5 6.48333 5 8.33333 5H31.6667C33.5 5 35 6.5 35 8.33333V10H20C18.15 10 16.6667 11.5 16.6667 13.3333V26.6667C16.6667 28.5 18.15 30 20 30H35ZM20 26.6667H36.6667V13.3333H20V26.6667ZM26.6667 22.5C25.2833 22.5 24.1667 21.3833 24.1667 20C24.1667 18.6167 25.2833 17.5 26.6667 17.5C28.05 17.5 29.1667 18.6167 29.1667 20C29.1667 21.3833 28.05 22.5 26.6667 22.5Z" fill="white" />
              </svg>
            </div>
            <div>
              <h3 class="a2d a1O a1P a1k dark:aT sm:a2o lg:a1O xl:a2o">
                Low Cost
              </h3>
              <p class="a1F a1R aQ dark:aS sm:aO lg:a1F xl:aO">
                you can Invest on the Crypto Currencies with the lower budgets also and many of available.
              </p>
            </div>
          </div>
        </div>
        <div class="ab ak md:a1M/2 lg:a1M/3">
          <div class="wow fadeInUp a3r a2_ aH[370px] a2G" data-wow-delay="0s">
            <div class="a3r a3M aa a3N a1r ac a1t a1u a1A aT">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 13.3333C16.3167 13.3333 13.3333 16.3167 13.3333 20C13.3333 23.6833 16.3167 26.6667 20 26.6667C23.6833 26.6667 26.6667 23.6833 26.6667 20C26.6667 16.3167 23.6833 13.3333 20 13.3333ZM8.33333 25H5V31.6667C5 33.5 6.5 35 8.33333 35H15V31.6667H8.33333V25ZM8.33333 8.33333H15V5H8.33333C6.5 5 5 6.5 5 8.33333V15H8.33333V8.33333ZM31.6667 5H25V8.33333H31.6667V15H35V8.33333C35 6.5 33.5 5 31.6667 5ZM31.6667 31.6667H25V35H31.6667C33.5 35 35 33.5 35 31.6667V25H31.6667V31.6667Z" fill="white" />
              </svg>
            </div>
            <div>
              <h3 class="a2d a1O a1P a1k dark:aT sm:a2o lg:a1O xl:a2o">
                Several Profit
              </h3>
              <p class="a1F a1R aQ dark:aS sm:aO lg:a1F xl:aO">
                believe that Bitcoin holds value as a form of money that is superior to any previously discovered form
                of money
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="af a2E">
    <div class="ae">
      <div class="au a1v a3O a1E dark:a1w[#14102C] sm:a3P sm:a3Q lg:a1E xl:a3Q">
        <div class="ag aa a1L ac">
          <div class="ab ak lg:a1M/2">
            <div class="wow fadeInUp a3R aa ac a1t lg:a1Q" data-wow-delay="0s">
              <div id="chart"></div>
            </div>
          </div>
          <div class="ab ak lg:a1M/2">
            <div class="wow fadeInUp a3S" data-wow-delay="0s">
              <span class="a2d aO a1P a3L aR sm:a1O">
                SALES
              </span>
              <h2 class="a2d a2o a1P a2p a1k dark:aT md:a2Q[45px]">
                Crypto Market
              </h2>
              <p class="aO a1R aQ dark:aS">
                The Crypto Currencies the most in demeanding Currencies in the Whole world and here is the some on
                treanding Crypto Currencies are listed
              </p>
            </div>
            <div class="wow fadeInUp a3T" data-wow-delay="0s">
              <p class="aa">
                <span class="a1p a3U a3V a1u a1A"></span>
                <span class="aO a1R aQ dark:aS">
                  73% Bitcoin
                </span>
              </p>
              <p class="aa">
                <span class="a1p a3U a3V a1u a1w[#2347B9]"></span>
                <span class="aO a1R aQ dark:aS">
                  55% Etherenum
                </span>
              </p>
              <p class="aa">
                <span class="a1p a3U a3V a1u a1w[#8BA6FF]"></span>
                <span class="aO a1R aQ dark:aS">
                  38% Binance Coin
                </span>
              </p>
              <p class="aa">
                <span class="a1p a3U a3V a1u a1w[#8696CA]"></span>
                <span class="aO a1R aQ dark:aS">
                  20.93% Tether
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="aq a19 a3W a2Z">
      <img src="images/shapes/token-sale-shape.svg" alt="shape" />
    </div>
  </section>


  <section id="roadmap" class="af a2E aw[120px]">
    <div class="ae">
      <div class="wow fadeInUp a3r a3K aH[590px] a2G md:a30" data-wow-delay="0s">
        <span class="a2d aO a1P a3L aR sm:a1O">
          ROADMAP
        </span>
        <h2 class="a2d a2o a1P a2p a1k dark:aT md:a2Q[45px]">
          The Timeline
        </h2>
        <p class="aO a1R aQ dark:aS">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed
          congue arcu, In et dignissim quam condimentum vel.
        </p>
      </div>
      <div class="ag aa a1t">
        <div class="ab ak lg:a33/12 xl:a2N/12">
          <div class="wow fadeInUp af ag aa a1L md:a3X lg:a3Y" data-wow-delay="0s">
            <span class="aq a8 a3Z ao a2w aD[2px] a1v dark:a1w[#2D2C4A] md:a3z/2 md:an"></span>
            <div class="ab ak md:a1M/2">
              <div class="af a2E a1W au a1v a3_ aI dark:a3 md:a2k md:a1Q md:a2L lg:a20">
                <span class="aq as/2 a1a ao a40 a1U at/2 a1u a41 a1H a1 dark:a27 md:a3b md:a42 md:an lg:a43"></span>
                <span class="aq a44 as/2 ao a3e a3f at/2 az a1v dark:a3 md:an"></span>
                <h3 class="a2d a1O a1P a1k dark:aT">
                  Nov 5,2021
                </h3>
                <p class="a2K a1F a1R aQ dark:aS">
                  Bitcoin BTC/USD price history up until September 5, 2022. Bitcoin (BTC) price again reached an
                  all-time high in 2021, as values exceeded over 65,000 USD in November 2021.
                </p>
                <a href="#" class="aV ac a1t a1u a1 a45 a46">
                  <span class="a35">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.7287 11.1771C16.5267 15.9986 11.6433 18.9329 6.82128 17.7306C2.00125 16.5285 -0.933006 11.6449 0.269537 6.82378C1.47102 2.00177 6.3544 -0.932704 11.175 0.269311C15.9966 1.47133 18.9307 6.35553 17.7286 11.1772L17.7287 11.1771H17.7287Z" fill="#F7931A" />
                      <path d="M13.1113 8.32768C13.2804 7.19652 12.4193 6.58848 11.2416 6.18285L11.6237 4.65059L10.6909 4.41817L10.319 5.91009C10.0738 5.84893 9.82201 5.79131 9.57173 5.73418L9.94632 4.23242L9.01417 4L8.63193 5.53176C8.42902 5.48556 8.22972 5.4399 8.03636 5.39179L8.03744 5.38697L6.75117 5.06577L6.50305 6.06199C6.50305 6.06199 7.19507 6.22062 7.18048 6.23038C7.55819 6.32465 7.62649 6.57468 7.61515 6.77286L7.17998 8.51847C7.20599 8.52507 7.23973 8.53463 7.27695 8.54959C7.24584 8.54186 7.21272 8.53343 7.17836 8.5252L6.56841 10.9705C6.52225 11.0853 6.40509 11.2575 6.14101 11.1921C6.15036 11.2057 5.46309 11.0229 5.46309 11.0229L5 12.0906L6.2138 12.3932C6.43961 12.4498 6.66089 12.5091 6.87881 12.5648L6.49283 14.1146L7.42449 14.347L7.80672 12.8137C8.06124 12.8828 8.30824 12.9465 8.55005 13.0066L8.1691 14.5327L9.10188 14.7651L9.48781 13.2182C11.0783 13.5192 12.2743 13.3979 12.7776 11.9592C13.1833 10.801 12.7574 10.1329 11.9207 9.69725C12.5301 9.55669 12.9892 9.15584 13.1116 8.32781L13.1113 8.3276L13.1113 8.32768ZM10.9802 11.316C10.6919 12.4743 8.74179 11.8481 8.10952 11.6911L8.62171 9.63788C9.25394 9.79571 11.2814 10.1081 10.9802 11.316H10.9802ZM11.2686 8.3109C11.0057 9.36445 9.38257 8.8292 8.85604 8.69795L9.32041 6.83576C9.84694 6.96701 11.5426 7.21197 11.2687 8.3109H11.2686Z" fill="white" />
                    </svg>
                  </span>
                  <span class="a2t a2g aP aQ dark:aS">
                    Bitcoin
                  </span>
                  <span class="a2Q[8px] aP aQ dark:a2Q[#959595]">
                    4.5%
                  </span>
                  <span>
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.66675 5.00008L2.25425 5.58758L4.58341 3.26258V8.33341H5.41675V3.26258L7.74175 5.59175L8.33341 5.00008L5.00008 1.66675L1.66675 5.00008Z" fill="#60D16B" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
            <div class="ab ak md:a1M/2"></div>
            <div class="ab ak md:a1M/2"></div>
            <div class="ab ak md:a1M/2">
              <div class="af a2E a1W au a1v a3_ aI dark:a3 md:a2O md:a1Q lg:a47">
                <span class="aq as/2 a1a ao a40 a1U at/2 a1u a41 a1H a1 dark:a27 md:a48 md:a49 md:an lg:a4a"></span>
                <span class="aq a4b as/2 ao a3e a3f at/2 az a1v dark:a3 md:an"></span>
                <h3 class="a2d a1O a1P a1k dark:aT">
                  Nov 14,2021
                </h3>
                <p class="a2K a1F a1R aQ dark:aS">
                  Ethereum ETH/USD price history up until September 5, 2022. The Ethereum (ETH) price in USD soared to
                  new heights in November 2021, reaching over 4,800 U.S. dollars.
                </p>
                <a href="#" class="aV ac a1t a1u a1 a45 a46">
                  <span class="a35">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.7307 11.1771C16.5286 15.9986 11.6446 18.9329 6.82205 17.7306C2.00148 16.5285 -0.933111 11.6449 0.269567 6.82378C1.47119 2.00177 6.35511 -0.932704 11.1762 0.269311C15.9985 1.47133 18.9329 6.35553 17.7306 11.1772L17.7307 11.1771H17.7307Z" fill="#1181E7" />
                      <g clip-path="url(#clip0_27_564)">
                        <path d="M8.99897 4L8.93188 4.22789V10.84L8.99897 10.907L12.0682 9.09273L8.99897 4Z" fill="#D6D6D6" />
                        <path d="M8.99899 4L5.92969 9.09273L8.99899 10.907V7.69762V4Z" fill="white" />
                        <path d="M8.99899 11.4881L8.96118 11.5342V13.8896L8.99899 13.9999L12.0701 9.6748L8.99899 11.4881Z" fill="#D6D6D6" />
                        <path d="M8.99899 13.9999V11.4881L5.92969 9.6748L8.99899 13.9999Z" fill="white" />
                        <path d="M8.99902 10.907L12.0682 9.09274L8.99902 7.69763V10.907Z" fill="#F3F3F3" />
                        <path d="M5.92969 9.09274L8.99899 10.907V7.69763L5.92969 9.09274Z" fill="#E2E2E2" />
                      </g>
                      <defs>
                        <clipPath id="clip0_27_564">
                          <rect width="10" height="10" fill="white" transform="translate(4 4)" />
                        </clipPath>
                      </defs>
                    </svg>
                  </span>
                  <span class="a2t a2g aP aQ dark:aS">
                    ethereum
                  </span>
                  <span class="a2Q[8px] aP aQ dark:a2Q[#959595]">
                    2.5%
                  </span>
                  <span>
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.66675 5.00008L2.25425 5.58758L4.58341 3.26258V8.33341H5.41675V3.26258L7.74175 5.59175L8.33341 5.00008L5.00008 1.66675L1.66675 5.00008Z" fill="#60D16B" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
            <div class="ab ak md:a1M/2">
              <div class="af a2E a1W au a1v a3_ aI dark:a3 md:a2k md:a1Q md:a2L lg:a20">
                <span class="aq as/2 a1a ao a40 a1U at/2 a1u a41 a1H a1 dark:a27 md:a3b md:a42 md:an lg:a43"></span>
                <span class="aq a44 as/2 ao a3e a3f at/2 az a1v dark:a3 md:an"></span>
                <h3 class="a2d a1O a1P a1k dark:aT">
                  May 30,2021
                </h3>
                <p class="a2K a1F a1R aQ dark:aS">
                  Between December 2020 and May 2021, link's price rose more than sixfold and reached an all-time high
                  of $52.88.
                </p>
                <a href="#" class="aV ac a1t a1u a1 a45 a46">
                  <span class="a35">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.7287 11.1771C16.5267 15.9986 11.6433 18.9329 6.82128 17.7306C2.00125 16.5285 -0.933006 11.6449 0.269537 6.82378C1.47102 2.00177 6.3544 -0.932704 11.175 0.269311C15.9966 1.47133 18.9307 6.35553 17.7286 11.1772L17.7287 11.1771H17.7287Z" fill="#295ADA" />
                      <path d="M9 4L8.15344 4.47477L5.84656 5.77523L5 6.25V10.75L5.84656 11.2248L8.1746 12.5252L9.02116 13L9.86772 12.5252L12.1534 11.2248L13 10.75V6.25L12.1534 5.77523L9.84656 4.47477L9 4ZM6.69312 9.80046V7.19954L9 5.89908L11.3069 7.19954V9.80046L9 11.1009L6.69312 9.80046Z" fill="white" />
                    </svg>
                  </span>
                  <span class="a2t a2g aP aQ dark:aS">
                    chainlink
                  </span>
                  <span class="a2Q[8px] aP aQ dark:a2Q[#959595]">
                    4.5%
                  </span>
                  <span>
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.66675 5.00008L2.25425 5.58758L4.58341 3.26258V8.33341H5.41675V3.26258L7.74175 5.59175L8.33341 5.00008L5.00008 1.66675L1.66675 5.00008Z" fill="#60D16B" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
            <div class="ab ak md:a1M/2"></div>
            <div class="ab ak md:a1M/2"></div>
            <div class="ab ak md:a1M/2">
              <div class="af a2E a1W au a1v a3_ aI dark:a3 md:a2O md:a1Q lg:a47">
                <span class="aq as/2 a1a ao a40 a1U at/2 a1u a41 a1H a1 dark:a27 md:a48 md:a49 md:an lg:a4a"></span>
                <span class="aq a4b as/2 ao a3e a3f at/2 az a1v dark:a3 md:an"></span>
                <h3 class="a2d a1O a1P a1k dark:aT">
                  May 19,2030
                </h3>
                <p class="a2K a1F a1R aQ dark:aS">
                  Polygon price prediction May 2030: Polygon's price for May 2030 according to our analysis should range
                  between $34.315 to $39.481 and the average price of MATIC should be around $36.898.
                </p>
                <a href="#" class="aV ac a1t a1u a1 a45 a46">
                  <span class="a35">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.7307 11.1771C16.5286 15.9986 11.6446 18.9329 6.82205 17.7306C2.00148 16.5285 -0.933111 11.6449 0.269567 6.82378C1.47119 2.00177 6.35511 -0.932704 11.1762 0.269311C15.9985 1.47133 18.9329 6.35553 17.7306 11.1772L17.7307 11.1771H17.7307Z" fill="#8247E5" />
                      <path d="M11.5718 7.75074C11.389 7.64392 11.154 7.64392 10.9452 7.75074L9.48303 8.63205L8.49086 9.19288L7.05483 10.0742C6.87206 10.181 6.63708 10.181 6.4282 10.0742L5.30548 9.37982C5.12272 9.273 4.99217 9.05935 4.99217 8.81899V7.48368C4.99217 7.27003 5.09661 7.05638 5.30548 6.92285L6.4282 6.25519C6.61097 6.14837 6.84595 6.14837 7.05483 6.25519L8.17755 6.94956C8.36031 7.05638 8.49086 7.27003 8.49086 7.51039V8.39169L9.48303 7.80415V6.89614C9.48303 6.68249 9.37859 6.46884 9.16971 6.33531L7.08094 5.08012C6.89817 4.97329 6.66319 4.97329 6.45431 5.08012L4.31332 6.36202C4.10444 6.46884 4 6.68249 4 6.89614V9.40653C4 9.62018 4.10444 9.83383 4.31332 9.96736L6.4282 11.2226C6.61097 11.3294 6.84595 11.3294 7.05483 11.2226L8.49086 10.368L9.48303 9.78042L10.9191 8.92582C11.1018 8.81899 11.3368 8.81899 11.5457 8.92582L12.6684 9.59347C12.8512 9.7003 12.9817 9.91395 12.9817 10.1543V11.4896C12.9817 11.7033 12.8773 11.9169 12.6684 12.0504L11.5718 12.7181C11.389 12.8249 11.154 12.8249 10.9452 12.7181L9.82245 12.0504C9.63969 11.9436 9.50914 11.73 9.50914 11.4896V10.635L8.51697 11.2226V12.1039C8.51697 12.3175 8.62141 12.5312 8.83029 12.6647L10.9452 13.9199C11.1279 14.0267 11.3629 14.0267 11.5718 13.9199L13.6867 12.6647C13.8695 12.5579 14 12.3442 14 12.1039V9.56677C14 9.35312 13.8956 9.13947 13.6867 9.00594L11.5718 7.75074Z" fill="white" />
                    </svg>
                  </span>
                  <span class="a2t a2g aP aQ dark:aS">
                    polygon
                  </span>
                  <span class="a2Q[8px] aP aQ dark:a2Q[#959595]">
                    2.5%
                  </span>
                  <span>
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.66675 5.00008L2.25425 5.58758L4.58341 3.26258V8.33341H5.41675V3.26258L7.74175 5.59175L8.33341 5.00008L5.00008 1.66675L1.66675 5.00008Z" fill="#60D16B" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="aq a1a a2J a2Z">
      <img src="images/shapes/timeline.svg" alt="shape" />
    </div>
  </section>

  <section id="faq" x-data="
        {
          openFaq1: false,
          openFaq2: false,
          openFaq3: false,
          openFaq4: false,
          openFaq5: false,
        }
      " class="af a2E a1v a4h dark:a1w[#14102C]">
    <div class="ae">
      <div class="wow fadeInUp a3r a3K aH[600px] a2G md:a30" data-wow-delay="0s">
        <span class="a2d aO a1P a3L aR sm:a1O">
          FAQ
        </span>
        <h2 class="a2d a2o a1P a2p a1k dark:aT md:a2Q[45px]">
          Frequently Asked Questions
        </h2>
        <p class="a3r aH[590px] aO a1R aQ dark:aS">
          Here are there some Frequently Asked Questions from our Customers about Crypto
        </p>
      </div>
      <div class="ag aa a1L a1t">
        <div class="ab ak lg:a2N/12 xl:a1z/12">
          <div class="single-faq wow fadeInUp a1W au a1 a2h a2W dark:a3 md:a3_ md:a2R" data-wow-delay="0s">
            <button @click="openFaq1 = !openFaq1" class="faq-btn aa ab ac ah a4l">
              <h3 class="a4m a1F a1P a2u dark:aT sm:aO md:a1O">
                How can I participate in the ICO Token sale?
              </h3>
              <span class="icon aV a4n ab aH[20px] ac a1t a1i a4o aT dark:a1k dark:a2m aO aP" :class="openFaq1 && 'a4p' ">
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_50_132)">
                    <path d="M8.82033 1.91065L4.99951 5.73146L1.17869 1.91064L-0.000488487 3.08978L4.99951 8.08978L9.99951 3.08979L8.82033 1.91065Z" fill="currentColor" />
                  </g>
                  <defs>
                    <clipPath id="clip0_50_132">
                      <rect width="10" height="10" fill="white" transform="translate(-0.000488281 0.000488281)" />
                    </clipPath>
                  </defs>
                </svg>
              </span>
            </button>
            <div x-show="openFaq1" class="faq-content">
              <p class="a4q a4r a1F aQ dark:aS">
                Register with an Cryptocurrency Exchange, Exchange Fiat for Bitcoin or Ether,
                Transfer your Coins from the Exchange to a Blockchain Wallet you Control, then
                Set up your Wallet, now you can Buy ICO Tokens.
              </p>
            </div>
          </div>
          <div class="single-faq wow fadeInUp a1W au a1 a2h a2W dark:a3 md:a3_ md:a2R" data-wow-delay="0s">
            <button @click="openFaq2 = !openFaq2" class="faq-btn aa ab ac ah a4l">
              <h3 class="a4m a1F a1P a2u dark:aT sm:aO md:a1O">
                What is ICO Crypto?
              </h3>
              <span class="icon aV a4n ab aH[20px] ac a1t a1i a4o aT dark:a1k dark:a2m aO aP" :class="openFaq2 && 'a4p' ">
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_50_132)">
                    <path d="M8.82033 1.91065L4.99951 5.73146L1.17869 1.91064L-0.000488487 3.08978L4.99951 8.08978L9.99951 3.08979L8.82033 1.91065Z" fill="currentColor" />
                  </g>
                  <defs>
                    <clipPath id="clip0_50_132">
                      <rect width="10" height="10" fill="white" transform="translate(-0.000488281 0.000488281)" />
                    </clipPath>
                  </defs>
                </svg>
              </span>
            </button>
            <div x-show="openFaq2" class="faq-content">
              <p class="a4q a4r a1F aQ dark:aS">
                An initial coin offering or initial currency offering is a type of funding using cryptocurrencies. It is
                often a form of crowdfunding, although a private ICO which does not seek public investment is also
                possible.
              </p>
            </div>
          </div>
          <div class="single-faq wow fadeInUp a1W au a1 a2h a2W dark:a3 md:a3_ md:a2R" data-wow-delay="0s">
            <button @click="openFaq3 = !openFaq3" class="faq-btn aa ab ac ah a4l">
              <h3 class="a4m a1F a1P a2u dark:aT sm:aO md:a1O">
                How do I benefit from the ICO Token?
              </h3>
              <span class="icon aV a4n ab aH[20px] ac a1t a1i a4o aT dark:a1k dark:a2m aO aP" :class="openFaq3 && 'a4p' ">
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_50_132)">
                    <path d="M8.82033 1.91065L4.99951 5.73146L1.17869 1.91064L-0.000488487 3.08978L4.99951 8.08978L9.99951 3.08979L8.82033 1.91065Z" fill="currentColor" />
                  </g>
                  <defs>
                    <clipPath id="clip0_50_132">
                      <rect width="10" height="10" fill="white" transform="translate(-0.000488281 0.000488281)" />
                    </clipPath>
                  </defs>
                </svg>
              </span>
            </button>
            <div x-show="openFaq3" class="faq-content">
              <p class="a4q a4r a1F aQ dark:aS">
                Anyone Can Buy Tokens. Token launches differ from equity sales in a large-scale initial public offering,
                Tokens Are Sold Globally, Token Economy Liquidity Premium, Less Barrier to Entry, The Business Model
                That Beats “Free”, and Instant Buy-In.
              </p>
            </div>
          </div>
          <div class="single-faq wow fadeInUp a1W au a1 a2h a2W dark:a3 md:a3_ md:a2R" data-wow-delay="0s">
            <button @click="openFaq4 = !openFaq4" class="faq-btn aa ab ac ah a4l">
              <h3 class="a4m a1F a1P a2u dark:aT sm:aO md:a1O">
                How can i purchase bitcoin?
              </h3>
              <span class="icon aV a4n ab aH[20px] ac a1t a1i a4o aT dark:a1k dark:a2m aO aP" :class="openFaq4 && 'a4p' ">
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_50_132)">
                    <path d="M8.82033 1.91065L4.99951 5.73146L1.17869 1.91064L-0.000488487 3.08978L4.99951 8.08978L9.99951 3.08979L8.82033 1.91065Z" fill="currentColor" />
                  </g>
                  <defs>
                    <clipPath id="clip0_50_132">
                      <rect width="10" height="10" fill="white" transform="translate(-0.000488281 0.000488281)" />
                    </clipPath>
                  </defs>
                </svg>
              </span>
            </button>
            <div x-show="openFaq4" class="faq-content">
              <p class="a4q a4r a1F aQ dark:aS">
                Choose a Crypto Trading Service or Venue, Connect Your Exchange to a Payment Option, then Connect Your
                Exchange to a Payment Option and Cryptocurrency exchanges have evolved to mimic the same level of
                features as their stock brokerage counterparts. Crypto exchanges offer several order types and ways to
                invest.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="aq a1a a4s a2Z">
      <img src="images/shapes/faq-shape-1.svg" alt="shape" />
    </div>
    <div class="aq a19 a4t a2Z">
      <img src="images/shapes/faq-shape-2.svg" alt="shape" />
    </div>
  </section>

  <section style="margin-top: -100px;" id="contact" class="a1v aw[120px] dark:a1w[#14102C]">
    <div class="ae">
      <div class="ag aa a1L ac">
        <div class="ab ak lg:a4v/12">
          <div class="wow fadeInUp a3K aH[350px]" data-wow-delay="0s">
            <span class="a2d aO a1P a3L aR sm:a1O">
              Contact Us
            </span>
            <h2 class="a2d a2o a1P a2p a1k dark:aT md:a2Q[45px]">
              Let's talk about your problem.
            </h2>
          </div>
          <div class="ag aa a1L">
            <div class="ab ak sm:a1M/2">
              <div class="wow fadeInUp a4w aH[250px]" data-wow-delay="0s">
                <h3 class="a1N aO aP a2u dark:aT">
                  Our Location
                </h3>
                <p class="a1F a1R a4u aQ dark:aS">
                  401 Broadway, 24th Floor, Orchard Cloud View, London
                </p>
              </div>
            </div>
            <div class="ab ak sm:a1M/2">
              <div class="wow fadeInUp a4w aH[250px]" data-wow-delay="0s">
                <h3 class="a1N aO aP a2u dark:aT">
                  Email Address
                </h3>
                <p class="a1F a1R a4u aQ dark:aS">
                  <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="96fff8f0f9d6eff9e3e4f2f9fbf7fff8b8f5f9fb">[email&#160;protected]</a>
                </p>
                <p class="a1F a1R a4u aQ dark:aS">
                  <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="492a26273d282a3d0930263c3b2d2624282027672a2624">[email&#160;protected]</a>
                </p>
              </div>
            </div>
            <div class="ab ak sm:a1M/2">
              <div class="wow fadeInUp a4w aH[250px]" data-wow-delay="0s">
                <h3 class="a1N aO aP a2u dark:aT">
                  Phone Number
                </h3>
                <p class="a1F a1R a4u aQ dark:aS">
                  +990 846 73644
                </p>
                <p class="a1F a1R a4u aQ dark:aS">
                  +550 9475 4543
                </p>
              </div>
            </div>
            <div class="ab ak sm:a1M/2">
              <div class="wow fadeInUp a4w aH[250px]" data-wow-delay="0s">
                <h3 class="a1N aO aP a2u dark:aT">
                  How Can We Help?
                </h3>
                <p class="a1F a1R a4u aQ dark:aS">
                  Tell us your problem we will get back to you ASAP.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="ab ak lg:a4x/12">
          <div class="sm:a4y wow fadeInUp a1X a1 a3O a1E dark:a3" data-wow-delay="0s">
            <h3 class="a2n a2B a1P a2u dark:aT sm:a2Q[34px] lg:a2B xl:a2Q[34px]">
              Send us a Message
            </h3>
            <form>
              <div class="a2K">
                <label for="name" class="a2s an a1j a1R a2u dark:aT">
                  Full Name*
                </label>
                <input type="text" id="name" placeholder="Enter your full name" class="ab a1X a1C a2l[#E9E9E9] a4z a22 a23 a1F a1R aS a24 focus:a1H dark:a4A dark:a1 dark:a4B" />
              </div>
              <div class="a2K">
                <label for="email" class="a2s an a1j a1R a2u dark:aT">
                  Email Address*
                </label>
                <input type="email" id="email" placeholder="Enter your email address" class="ab a1X a1C a2l[#E9E9E9] a4z a22 a23 a1F a1R aS a24 focus:a1H dark:a4A dark:a1 dark:a4B" />
              </div>
              <div class="a2K">
                <label for="message" class="a2s an a1j a1R a2u dark:aT">
                  Message*
                </label>
                <textarea rows="6" id="message" placeholder="Type your message" class="ab a1X a1C a2l[#E9E9E9] a4z a22 a23 a1F a1R aS a24 focus:a1H dark:a4A dark:a1 dark:a4B"></textarea>
              </div>
              <div>
                <button class="ab a1u a1A a4C a2G a1F aP aT hover:a2X dark:a1 dark:a1k dark:hover:a2X">
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="newsletter" class="af a2E">
    <div class="aq a8 a1a a2Z aC[120px] ab a1v dark:a1w[#14102C]"></div>
    <div class="ae">
      <div class="wow fadeInUp af a2E a2c a1i a3 a29 sm:a2P" data-wow-delay="0s">
        <div class="ag aa a1L ac">
          <div class="ab ak lg:a1M/2">
            <div class="a1W lg:a1Q">
              <div class="aH[500px]">
                <h2 class="a2s a2o a1P a2p aT md:a2Q[45px]">
                  Newsletter
                </h2>
                <p class="aO a1R aT">
                  You can Subscribe to our Newsletters by submitting your E-mail Address, we will notify you!
                </p>
              </div>
            </div>
          </div>
          <div class="ab av lg:a1M/2">
            <div>
              <form class="af">
                <input type="email" placeholder="Enter email address" class="ab a1u a1C a21 a1 aW a2R a1F a1R aQ a24 dark:aS sm:a2S" />
                <button class="a2T[10px] as/2 a2U aV a2V ac a1u a1A a2W a1F a1R aT hover:a2X sm:aq sm:a1Z sm:at/2">
                  Submit
                  <span class="a2Y">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.67496 17.5L19.1666 10L1.67496 2.5L1.66663 8.33333L14.1666 10L1.66663 11.6667L1.67496 17.5Z" fill="white" />
                    </svg>
                  </span>
                </button>
              </form>
            </div>
          </div>
        </div>
        <div class="aq a8 a19 a2Z">
          <img src="images/shapes/newsletter-shape.svg" alt="shape" />
        </div>
      </div>
    </div>
  </section>

  <footer class="af a2E" style="margin-top: 100px; margin-bottom: 0px;">
    <div class="ae">
      <div class="ag aa a1L">
        <div class="ab ak md:a1M/2 lg:a1U/12 xl:a1U/12">
          <div class="wow fadeInUp a2_ aH[330px] xl:a30" data-wow-delay="0s">
            <a href="index.php" class="a2a a2i">
              <img src="images/newlogo.png" width="40%" alt="logo" class="ao dark:an" />
              <img src="images/newlogo-black.png" width="40%" alt="logo" class="dark:ao" />
            </a>
            <p class="a1W a1F a1R aQ dark:aS">We are the trusted crypto traders, with having the community supports from
              the top crypto traders</p>

          </div>
        </div>
        <div class="ab ak sm:a1M/2 md:a1M/2 lg:a1U/12 xl:a12/12">
          <div class="wow fadeInUp a2_ xl:a30" data-wow-delay="0s">
            <h2 class="a2K a2B a1P a1k dark:aT">
              Quick Links
            </h2>
            <div class="a34">
              <a href="index.php" class="an a1F a1R aQ hover:aR dark:aS dark:hover:aR">
                Crypto
              </a>
              <a href="signin.php" class="an a1F a1R aQ hover:aR dark:aS dark:hover:aR">
                Sign In
              </a>
              <a href="signup.php" class="an a1F a1R aQ hover:aR dark:aS dark:hover:aR">
                Register
              </a>
              <a href="javascript:void(0)" class="an a1F a1R aQ hover:aR dark:aS dark:hover:aR">
                Social Network
              </a>
            </div>
          </div>
        </div>
        <div class="ab ak sm:a1M/2 md:a1M/2 lg:a1U/12 xl:a12/12">
          <div class="wow fadeInUp a2_ xl:a30" data-wow-delay="0s">
            <h2 class="a2K a2B a1P a1k dark:aT">
              Supports
            </h2>
            <div class="a34">
              <a href="javascript:void(0)" class="an a1F a1R aQ hover:aR dark:aS dark:hover:aR">
                Help & Support
              </a>
              <a href="javascript:void(0)" class="an a1F a1R aQ hover:aR dark:aS dark:hover:aR">
                Terms & Conditions
              </a>
              <a href="javascript:void(0)" class="an a1F a1R aQ hover:aR dark:aS dark:hover:aR">
                24/7 Supports
              </a>
              <a href="javascript:void(0)" class="an a1F a1R aQ hover:aR dark:aS dark:hover:aR">
                On Point FAQ
              </a>
            </div>
          </div>
        </div>
        <div class="ab ak md:a1M/2 lg:a1M/2 xl:a1U/12">
          <div class="wow fadeInUp a2_ xl:a30" data-wow-delay="0s">
            <h2 class="a2K a2B a1P a1k dark:aT">
              Our Socail Media
            </h2>
            <div class="aa ac a31">
              <a href="javascript:void(0)" class="aa a32 a33 ac a1t a1u a1v aQ hover:a1A hover:aT dark:a3 dark:aT dark:hover:a1A" name="social-link" aria-label="social-link">
                <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.25 8.46875C7.6875 8.46875 7.28125 8.96875 7.28125 9.53125C7.28125 10.0938 7.71875 10.5938 8.25 10.5938C8.8125 10.5938 9.21875 10.125 9.21875 9.53125C9.25 8.9375 8.8125 8.46875 8.25 8.46875Z" fill="currentColor" />
                  <path d="M11.75 10.5625C12.285 10.5625 12.7187 10.0868 12.7187 9.5C12.7187 8.9132 12.285 8.4375 11.75 8.4375C11.215 8.4375 10.7812 8.9132 10.7812 9.5C10.7812 10.0868 11.215 10.5625 11.75 10.5625Z" fill="currentColor" />
                  <path d="M16.4687 0.3125H3.53125C2.4375 0.3125 1.53125 1.1875 1.53125 2.28125V15.375C1.53125 16.4688 2.40625 17.3438 3.5 17.3438H14.4687L13.9375 15.5938L15.1562 16.75L16.3437 17.8437L18.4062 19.6875V2.28125C18.5 1.1875 17.5625 0.3125 16.4687 0.3125ZM12.7187 12.9375C12.7187 12.9375 12.375 12.5313 12.0625 12.1563C13.3437 11.8125 13.8125 11 13.8125 11C13.4062 11.25 13.0312 11.4375 12.7187 11.5625C12.25 11.7812 11.75 11.9062 11.3125 11.9687C10.375 12.1562 9.5625 12.0937 8.8125 11.9687C8.25 11.875 7.8125 11.7188 7.40625 11.5625C7.1875 11.4687 6.90625 11.375 6.6875 11.25C6.65625 11.25 6.65625 11.2188 6.59375 11.2188C6.59375 11.2188 6.5625 11.2187 6.5625 11.1875C6.375 11.0937 6.3125 11 6.3125 11C6.3125 11 6.8125 11.7813 8.03125 12.1563C7.71875 12.5 7.375 12.9375 7.375 12.9375C5.21875 12.8438 4.4375 11.5 4.4375 11.5C4.4375 8.375 5.84375 5.875 5.84375 5.875C7.25 4.8125 8.5625 4.875 8.5625 4.875L8.65625 5C6.875 5.46875 6.09375 6.25 6.09375 6.25C6.09375 6.25 6.3125 6.125 6.65625 6C7.71875 5.5625 8.5 5.4375 8.84375 5.375C8.875 5.375 8.9375 5.375 9.03125 5.375C9.59375 5.28125 10.3125 5.28125 10.9687 5.375C11.9062 5.46875 12.875 5.78125 13.875 6.3125C13.875 6.3125 13.125 5.59375 11.4375 5.09375L11.5625 4.90625C11.5625 4.90625 12.875 4.875 14.2812 5.90625C14.2812 5.90625 15.6875 8.40625 15.6875 11.5313C15.7187 11.5 14.875 12.9063 12.7187 12.9375Z" fill="currentColor" />
                </svg>
              </a>
              <a href="javascript:void(0)" class="aa a32 a33 ac a1t a1u a1v aQ hover:a1A hover:aT dark:a3 dark:aT dark:hover:a1A" name="social-link" aria-label="social-link">
                <svg width="18" height="15" viewBox="0 0 18 15" class="a1B">
                  <path d="M17.7165 2.00016C17.0749 2.29183 16.3832 2.4835 15.6665 2.57516C16.3999 2.1335 16.9665 1.4335 17.2332 0.591829C16.5415 1.0085 15.7749 1.30016 14.9665 1.46683C14.3082 0.750163 13.3832 0.333496 12.3332 0.333496C10.3749 0.333496 8.77487 1.9335 8.77487 3.9085C8.77487 4.19183 8.8082 4.46683 8.86654 4.72516C5.89987 4.57516 3.2582 3.15016 1.49987 0.991829C1.19154 1.51683 1.01654 2.1335 1.01654 2.7835C1.01654 4.02516 1.64154 5.12516 2.6082 5.75016C2.01654 5.75016 1.46654 5.5835 0.983203 5.3335C0.983203 5.3335 0.983203 5.3335 0.983203 5.3585C0.983203 7.09183 2.21654 8.54183 3.84987 8.86683C3.54987 8.95016 3.2332 8.99183 2.9082 8.99183C2.6832 8.99183 2.4582 8.96683 2.24154 8.92516C2.69154 10.3335 3.99987 11.3835 5.57487 11.4085C4.3582 12.3752 2.81654 12.9418 1.1332 12.9418C0.84987 12.9418 0.566536 12.9252 0.283203 12.8918C1.86654 13.9085 3.74987 14.5002 5.76654 14.5002C12.3332 14.5002 15.9415 9.05016 15.9415 4.32516C15.9415 4.16683 15.9415 4.01683 15.9332 3.8585C16.6332 3.3585 17.2332 2.72516 17.7165 2.00016Z" />
                </svg>
              </a>
              <a href="javascript:void(0)" class="aa a32 a33 ac a1t a1u a1v aQ hover:a1A hover:aT dark:a3 dark:aT dark:hover:a1A" name="social-link" aria-label="social-link">
                <svg width="16" height="16" viewBox="0 0 16 16" class="a1B">
                  <path d="M13.8333 0.5C14.2754 0.5 14.6993 0.675595 15.0118 0.988155C15.3244 1.30072 15.5 1.72464 15.5 2.16667V13.8333C15.5 14.2754 15.3244 14.6993 15.0118 15.0118C14.6993 15.3244 14.2754 15.5 13.8333 15.5H2.16667C1.72464 15.5 1.30072 15.3244 0.988155 15.0118C0.675595 14.6993 0.5 14.2754 0.5 13.8333V2.16667C0.5 1.72464 0.675595 1.30072 0.988155 0.988155C1.30072 0.675595 1.72464 0.5 2.16667 0.5H13.8333ZM13.4167 13.4167V9C13.4167 8.27949 13.1304 7.5885 12.621 7.07903C12.1115 6.56955 11.4205 6.28333 10.7 6.28333C9.99167 6.28333 9.16667 6.71667 8.76667 7.36667V6.44167H6.44167V13.4167H8.76667V9.30833C8.76667 8.66667 9.28333 8.14167 9.925 8.14167C10.2344 8.14167 10.5312 8.26458 10.75 8.48338C10.9688 8.70217 11.0917 8.99891 11.0917 9.30833V13.4167H13.4167ZM3.73333 5.13333C4.10464 5.13333 4.46073 4.98583 4.72328 4.72328C4.98583 4.46073 5.13333 4.10464 5.13333 3.73333C5.13333 2.95833 4.50833 2.325 3.73333 2.325C3.35982 2.325 3.0016 2.47338 2.73749 2.73749C2.47338 3.0016 2.325 3.35982 2.325 3.73333C2.325 4.50833 2.95833 5.13333 3.73333 5.13333ZM4.89167 13.4167V6.44167H2.58333V13.4167H4.89167Z" />
                </svg>
              </a>
              <a href="javascript:void(0)" class="aa a32 a33 ac a1t a1u a1v aQ hover:a1A hover:aT dark:a3 dark:aT dark:hover:a1A" name="social-link" aria-label="social-link">
                <svg width="18" height="12" viewBox="0 0 18 12" class="a1B">
                  <path d="M7.33366 8.49984L11.6587 5.99984L7.33366 3.49984V8.49984ZM16.967 1.97484C17.0753 2.3665 17.1503 2.8915 17.2003 3.55817C17.2587 4.22484 17.2837 4.79984 17.2837 5.29984L17.3337 5.99984C17.3337 7.82484 17.2003 9.1665 16.967 10.0248C16.7587 10.7748 16.2753 11.2582 15.5253 11.4665C15.1337 11.5748 14.417 11.6498 13.317 11.6998C12.2337 11.7582 11.242 11.7832 10.3253 11.7832L9.00033 11.8332C5.50866 11.8332 3.33366 11.6998 2.47533 11.4665C1.72533 11.2582 1.24199 10.7748 1.03366 10.0248C0.925326 9.63317 0.850326 9.10817 0.800326 8.44151C0.741992 7.77484 0.716992 7.19984 0.716992 6.69984L0.666992 5.99984C0.666992 4.17484 0.800326 2.83317 1.03366 1.97484C1.24199 1.22484 1.72533 0.741504 2.47533 0.533171C2.86699 0.424837 3.58366 0.349837 4.68366 0.299837C5.76699 0.241504 6.75866 0.216504 7.67533 0.216504L9.00033 0.166504C12.492 0.166504 14.667 0.299837 15.5253 0.533171C16.2753 0.741504 16.7587 1.22484 16.967 1.97484Z" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="wow fadeInUp a36 a2l[#F3F4F4] a37 a2G dark:a2l[#2D2C4A]" data-wow-delay="0s">
        <p class="a1F a1R aQ dark:aS">
          © DNK - all Rights Reserved, Crafted by
          <a href="" rel="noopenner nofollow" target="_blank" class="hover:aR">
            Nithin Kumar K
          </a>
        </p>
      </div>
    </div>
    <div class="aq a8 a1a a2Z">
      <img src="images/shapes/footer-shape-2.svg" alt="shape" />
    </div>
    <div class="aq a2J a19 a2Z">
      <img src="images/shapes/footer-shape-1.svg" alt="shape" />
    </div>
  </footer>


  <a x-show="scrolledFromTop" href="javascript:void(0)" name="scrollToTop" aria-label="scrollToTop" class="hover:a38 back-to-top ad a39 a3a a3b a2I[999] aa a32 a33 ac a1t au a1A aT a3c a3d">
    <span class="a10[6px] a3e a3f az a36 a3g a1I"></span>
  </a>

  <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="js/apexcharts.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    // ==== for menu scroll
    const pageLink = document.querySelectorAll(".scroll-menu");

    pageLink.forEach((elem) => {
      elem.addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(elem.getAttribute("href")).scrollIntoView({
          behavior: "smooth",
          offsetTop: 1 - 60,
        });
      });
    });

    // section menu active
    function onScroll(event) {
      const sections = document.querySelectorAll(".scroll-menu");
      const scrollPos =
        window.pageYOffset ||
        document.documentElement.scrollTop ||
        document.body.scrollTop;

      for (let i = 0; i < sections.length; i++) {
        const currLink = sections[i];
        const val = currLink.getAttribute("href");
        const refElement = document.querySelector(val);
        const scrollTopMinus = scrollPos + 73;
        if (
          refElement.offsetTop <= scrollTopMinus &&
          refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
        ) {
          document
            .querySelector(".scroll-menu")
            .classList.remove("dark:aT", "aR");
          currLink.classList.add("dark:aT", "aR");
        } else {
          currLink.classList.remove("dark:aT", "aR");
        }
      }
    }

    window.document.addEventListener("scroll", onScroll);

    // ====
    var options = {
      series: [73, 55, 38, 20],
      chart: {
        type: "donut",
        width: 400,
      },
      colors: ["#2347B9", "#3363FF", "#8BA6FF", "#8696CA"],
      legend: {
        show: false,
      },
      stroke: {
        show: false,
      },
      responsive: [{
        breakpoint: 480,
        options: {
          chart: {
            width: 200,
          },
          legend: {
            position: "bottom",
          },
        },
      }, ],
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
  </script>
</body>

</html>