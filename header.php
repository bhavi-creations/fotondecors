<!-- header.php -->
<nav
    class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
    id="ftco-navbar">

    <div class="container">

        <a class="navbar-brand d-none d-md-block" href="index.php">
            <img
                class="img-fluid navbar_logo_img"
                src="images/Screenshot 2024-12-20 155515.png"
                alt="Icon" style="width: 50%;" />
        </a>


        <a class="navbar-brand d-md-none" href="index.php">
            <img
                class="img-fluid navbar_logo_img"
                src="images/md_logo.png"
                alt="Icon" />
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#ftco-nav"
            aria-controls="ftco-nav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">
                    <a href="about.php" class="nav-link">About Us</a>
                </li>



                <li class="nav-item dropdown <?= basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : '' ?>">
                    <a href="products.php" class="nav-link dropdown-toggle" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                        <div class="row">
                            <div class="col-6">
                                <li><a class="dropdown-item" href="steel_doors.php">Steel Doors</a></li>
                                <li><a class="dropdown-item" href="steel_windows.php">Steel Windows</a></li>
                                <li><a class="dropdown-item" href="upvcwindows.php">UPVC Windows</a></li>
                                <li><a class="dropdown-item" href="modularkitchens.php">Modular Kitchens</a></li>
                                <li><a class="dropdown-item" href="modular_wardrobes.php">Modular Wardrobes</a></li>
                                <li><a class="dropdown-item" href="modular_tv.php">Modular Tv Units</a></li>
                                <li><a class="dropdown-item" href="powder_coating.php">Powder Coating</a></li>
                            </div>
                            <div class="col-6">
                                <li><a class="dropdown-item" href="wpc_doors.php">WPC Doors</a></li>
                                <li><a class="dropdown-item" href="wpc_door_frames.php">WPC Doors Frames</a></li>
                                <li><a class="dropdown-item" href="laminate_doors.php">Laminate Doors</a></li>
                                <li><a class="dropdown-item" href="cnc_fiber_laser.php">  CNC Fiber Laser Cutting</a></li>
                                <li><a class="dropdown-item" href="cnc_metal_bending.php">CNC Metal Cutting </a></li>
                                <li><a class="dropdown-item" href="playwoods.php">Play Woods</a></li>
                                <li><a class="dropdown-item" href="laminater.php">  Laminater</a></li>
                            </div>
                        </div>
                    </ul>
                </li>




                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'blogs.php' ? 'active' : '' ?>">
                    <a href="blogs.php" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'dealers.php' ? 'active' : '' ?>">
                    <a href="dealers.php" class="nav-link"> Dealers </a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'portfolio.php' ? 'active' : '' ?>">
                    <a href="portfolio.php" class="nav-link"> Portfolio </a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">
                    <a href="contact.php" class="nav-link">Contact Us</a>
                </li>







                <li class="nav-item ">
                    <!-- From Uiverse.io by Tsiangana -->
                    <div class="tooltip-container">
                        <span class="text">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="22"
                                height="22"
                                class="bi bi-send-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"></path>
                            </svg>
                        </span>

                        <a href="https://www.facebook.com/fotondecors" target="_blank" class="icon_text_style">
                            <span class="tooltip1">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    class="bi bi-x-twitter"
                                    viewBox="0 0 24 24"
                                    fill="black"
                                    stroke="black"
                                    stroke-width="1">
                                    <path d="M12.878 10.292L22 0h-2.991L11.48 9.297 5.09 0H0l9.612 13.908L0 24h2.99l8.85-9.408L18.91 24H24l-11.122-13.708z" />
                                </svg>
                            </span>
                        </a>

                        <!-- <span class="tooltip2">
                          

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                class="bi bi-discord"
                                viewBox="0 0 16 16">
                                <path
                                    d="M13.545 2.907a13.2 13.2 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.2 12.2 0 0 0-3.658 0 8 8 0 0 0-.412-.833.05.05 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.04.04 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032q.003.022.021.037a13.3 13.3 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019q.463-.63.818-1.329a.05.05 0 0 0-.01-.059l-.018-.011a9 9 0 0 1-1.248-.595.05.05 0 0 1-.02-.066l.015-.019q.127-.095.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.05.05 0 0 1 .053.007q.121.1.248.195a.05.05 0 0 1-.004.085 8 8 0 0 1-1.249.594.05.05 0 0 0-.03.03.05.05 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.2 13.2 0 0 0 4.001-2.02.05.05 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.03.03 0 0 0-.02-.019m-8.198 7.307c-.789 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612"></path>
                            </svg>
                        </span> -->

                        <a href="https://www.facebook.com/fotondecors" target="_blank" class="icon_text_style">
                            <span class="tooltip3">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24">
                                    <defs>
                                        <linearGradient id="instagramGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" style="stop-color:#fdf497;stop-opacity:1" />
                                            <stop offset="50%" style="stop-color:#fd5949;stop-opacity:1" />
                                            <stop offset="100%" style="stop-color:#d6249f;stop-opacity:1" />
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#instagramGradient)" d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2zm0-2A7.5 7.5 0 0 0 0 7.5v9A7.5 7.5 0 0 0 7.5 24h9A7.5 7.5 0 0 0 24 16.5v-9A7.5 7.5 0 0 0 16.5 0h-9z" />
                                    <path fill="#d6249f" d="M12 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998z" />
                                    <circle fill="#d6249f" cx="18.406" cy="5.595" r="1.439" />
                                </svg>
                            </span>
                        </a>

                        <a href="https://www.facebook.com/fotondecors" target="_blank" class="icon_text_style">
                            <span class="tooltip4">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="22"
                                    height="22"
                                    class="bi bi-facebook"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"></path>
                                </svg>
                            </span>
                        </a>


                        <!-- <span class="tooltip5">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                class="bi bi-pinterest"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0"></path>
                            </svg>
                        </span>
                        <span class="tooltip6">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                viewBox="0 0 16 16">
                                <path
                                    fill-rule="evenodd"
                                    d="M8 0C3.584 0 0 3.584 0 8s3.584 8 8 8c4.408 0 8-3.584 8-8s-3.592-8-8-8m5.284 3.688a6.8 6.8 0 0 1 1.545 4.251c-.226-.043-2.482-.503-4.755-.217-.052-.112-.096-.234-.148-.355-.139-.33-.295-.668-.451-.99 2.516-1.023 3.662-2.498 3.81-2.69zM8 1.18c1.735 0 3.323.65 4.53 1.718-.122.174-1.155 1.553-3.584 2.464-1.12-2.056-2.36-3.74-2.551-4A7 7 0 0 1 8 1.18m-2.907.642A43 43 0 0 1 7.627 5.77c-3.193.85-6.013.833-6.317.833a6.87 6.87 0 0 1 3.783-4.78zM1.163 8.01V7.8c.295.01 3.61.053 7.02-.971.199.381.381.772.555 1.162l-.27.078c-3.522 1.137-5.396 4.243-5.553 4.504a6.82 6.82 0 0 1-1.752-4.564zM8 14.837a6.8 6.8 0 0 1-4.19-1.44c.12-.252 1.509-2.924 5.361-4.269.018-.009.026-.009.044-.017a28.3 28.3 0 0 1 1.457 5.18A6.7 6.7 0 0 1 8 14.837m3.81-1.171c-.07-.417-.435-2.412-1.328-4.868 2.143-.338 4.017.217 4.251.295a6.77 6.77 0 0 1-2.924 4.573z"></path>
                            </svg>
                        </span>
                        <span class="tooltip7">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                class="bi bi-github"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"></path>
                            </svg>
                        </span>
                        <span class="tooltip8">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                class="bi bi-reddit"
                                viewBox="0 0 16 16">
                                <path
                                    d="M6.167 8a.83.83 0 0 0-.83.83c0 .459.372.84.83.831a.831.831 0 0 0 0-1.661m1.843 3.647c.315 0 1.403-.038 1.976-.611a.23.23 0 0 0 0-.306.213.213 0 0 0-.306 0c-.353.363-1.126.487-1.67.487-.545 0-1.308-.124-1.671-.487a.213.213 0 0 0-.306 0 .213.213 0 0 0 0 .306c.564.563 1.652.61 1.977.61zm.992-2.807c0 .458.373.83.831.83s.83-.381.83-.83a.831.831 0 0 0-1.66 0z"></path>
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.828-1.165c-.315 0-.602.124-.812.325-.801-.573-1.9-.945-3.121-.993l.534-2.501 1.738.372a.83.83 0 1 0 .83-.869.83.83 0 0 0-.744.468l-1.938-.41a.2.2 0 0 0-.153.028.2.2 0 0 0-.086.134l-.592 2.788c-1.24.038-2.358.41-3.17.992-.21-.2-.496-.324-.81-.324a1.163 1.163 0 0 0-.478 2.224q-.03.17-.029.353c0 1.795 2.091 3.256 4.669 3.256s4.668-1.451 4.668-3.256c0-.114-.01-.238-.029-.353.401-.181.688-.592.688-1.069 0-.65-.525-1.165-1.165-1.165"></path>
                            </svg>
                        </span> -->
                        <span class="tooltip9"> </span>
                    </div>

                </li>


















            </ul>
        </div>
    </div>
</nav>