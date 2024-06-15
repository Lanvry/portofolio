<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="images/facion.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Arjuna Personal | HOME</title>
</head>

<body>
    <div class="nav-popup" id="navbar">
        <button onclick="navbaroff()"><ion-icon name="close-outline"></ion-icon></button>
        <h2>MENU</h2>
        <li><a href="#about"><b>ABOUT</b></a></li>
        <li><a href="#skill"><b>SKILL</b></a></li>
        <li><a href=""><b>PORTOFOLIO</b></a></li>
        <li><a href=""><b>CONTACT</b></a></li>
        <li><a onclick="myFunction()" class="moon" id="moon"><ion-icon name="moon"></ion-icon></a>
            <a onclick="myFunction1()" style="display:none;" id="sunny"><ion-icon name="sunny"></ion-icon></a>
        </li>
    </div>
    <div id="top" class="top">
        <div>
            <h2 class="">
                <b>ARJUNA PERSONAL</b><text> .Site</text>
            </h2>
        </div>
        <div class="navbar">
            <a href="#about">ABOUT</a>
            <a href="#skill">SKILL</a>
            <a href="">PORTOFOLIO</a>
            <a href="">CONTACT</a>
            <a onclick="myFunction()" class="moon" id="moon"><ion-icon name="moon"></ion-icon></a>
            <a onclick="myFunction1()" style="display:none;" id="sunny"><ion-icon name="sunny"></ion-icon></a>
        </div>
        <div class="navbar-hp ">
            <button class="btn-navbar">
                <h1 onclick="navbar()"><ion-icon name="menu-outline"></ion-icon></h1>
            </button>
        </div>
    </div>
    <div id="display">
        <img src="images/me.png" class="display-img" alt="">
        <div class="display-text ">
            <h1>I'Am an Programer & Designer</h1>
            <a href="#readmore"><button>READ MORE</button></a>
        </div>
        <div class="social-media ">
            <a href=""><ion-icon name="logo-instagram"></ion-icon><text class="span-title">Instagram</text></a>
            <a href=""><ion-icon name="logo-tiktok"></ion-icon><text class="span-title">TikTok</text></a>
            <a href=""><ion-icon name="logo-facebook"></ion-icon><text class="span-title">Facebook</text></a>
            <span id="square"></span>
        </div>
        <div class="scroll ">
            <a href="">SCROLL</a>
            <span id="square"></span>
        </div>
    </div>
    <div id="readmore"></div>
    <!-- akhir display -->

    <!-- body -->
    <div id="EXP" class="experience scroll-element js-scroll slide-left">
        <div class="exp-item">
            <div class="exp-grid">
                <div class="exp-icon">
                    <h1><ion-icon name="medal-outline"></ion-icon></h1>
                </div>
                <div class="exp-text">
                    <h1>2+</h1>
                    <p><b>Years of Experience</b></p>
                </div>
            </div>
        </div>
        <div class="exp-item">
            <div class="exp-grid">
                <div class="exp-icon">
                    <h1><ion-icon name="checkmark-outline"></ion-icon></h1>
                </div>
                <div class="exp-text">
                    <h1>10+</h1>
                    <p><b>Complete Projects</b></p>
                </div>
            </div>
        </div>
        <div class="exp-item">
            <div class="exp-grid">
                <div class="exp-icon">
                    <h1><ion-icon name="people-outline"></ion-icon></h1>
                </div>
                <div class="exp-text">
                    <h1>10+</h1>
                    <p><b>Clients</b></p>
                </div>
            </div>
        </div>
    </div>


    <!-- about -->
    <div id="about" class="scroll-element js-scroll slide-right">
        <div>
            <img src="images/img.png" class="about-img" alt="">
        </div>
        <div class="about-me">
            <div class="aboutme-text">
                <div>
                    <p>About Me</p>
                </div>
                <span id="square" class="aboutme-square"></span>
            </div>
            <div class="aboutme-text1">
                <p>About Me</p>

            </div>
            <h3>Need a Creative <br> Product? I can Help You !</h3>
            <p>Hello I' am Arjuna, Iam FrontEnd Developer who has passion for building clean web with intuitive functionalities. I Enjoy the process of turning ideas Into Realy Using creative Solution. im always curious, about learning new skills, tools, and concept, In addiction to working on varicus solo full stack projects, I have worked with creative Teams</p>
            <div class="scroll-element js-scroll slide-right">
                <button class="btn-about1">HIRE ME</button>
                <button class="btn-about2">CONTACT</button>
            </div>
        </div>
    </div>

    <!-- Skills -->
    <div id="skill" class="scroll-element js-scroll fade-in-bottom">
        <div id="skill" class="skill">
            <div class="skills">
                <div class="skills-text">
                    <div>
                        <p>My Skills</p>
                    </div>
                    <span id="square" class="aboutme-square"></span>
                </div>
                <div class="skills-text1">
                    <p>My Skills</p>

                </div>
                <h3>Need a Creative <br> Product? I can Help You !</h3>
                <p>Hello I' am Arjuna, Iam FrontEnd Developer who has passion for building clean web with intuitive functionalities. I Enjoy the process of turning ideas Into Realy Using creative Solution. im always curious, about learning new skills, tools, and concept, In addiction to working on varicus solo full stack projects, I have worked with creative Teams</p>
                <div class="">
                    <label class="switch ">
                        <input type="checkbox" onclick="check()" id="check-skill">
                        <span class="slider round">
                        </span>
                        <div class="slider-grid">
                            <p>Skills</p>
                            <p>Tools</p>
                        </div>
                    </label>
                </div>
            </div>
            <div>
                <div class="container-skill">
                    <div id="skill-show">
                        <div class="skill-grid">
                            <div class="skill-item"><img src="images/HTML-logo.png" title="HTML" alt=""></div>
                            <div class="skill-item"><img src="images/CSS-logo.png" alt=""></div>
                            <div class="skill-item"><img src="images/JavaScript-logo.png" alt=""></div>
                            <div class="skill-item"><img src="images/PHP-logo.png" alt=""></div>
                        </div>
                        <div class="skill-grid">
                            <div class="skill-item"><img src="images/C-sharp-logo.png" alt=""></div>
                            <div class="skill-item"><img src="images/JAVA-logo.png" alt=""></div>
                            <div class="skill-item"><img src="images/Bootstap-logo.svg" alt=""></div>
                        </div>
                    </div>
                    <div id="tools-show">
                        <div class="skill-grid">
                            <div class="skill-item"><img src="images/Visual-Studio-Code-logo.png" alt=""></div>
                            <div class="skill-item"><img src="images/Visual-Studio-logo.png" alt=""></div>
                            <div class="skill-item"><img src="images/Git-logo.png" alt=""></div>
                            <div class="skill-item"><img src="images/Github-logo.png" alt=""></div>
                            <div class="skill-item"><img src="images/GitLab-logo.svg" alt=""></div>
                        </div>
                        <div class="skill-grid">
                            <div class="skill-item"><img src="images/GitBucket-logo.png" alt=""></div>
                            <div class="skill-item"><img src="images/npm-logo.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <!-- script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        const scrollElements = document.querySelectorAll(".js-scroll");

        const elementInView = (el, dividend = 1) => {
            const elementTop = el.getBoundingClientRect().top;

            return (
                elementTop <=
                (window.innerHeight || document.documentElement.clientHeight) / dividend
            );
        };

        const elementOutofView = (el) => {
            const elementTop = el.getBoundingClientRect().top;

            return (
                elementTop > (window.innerHeight || document.documentElement.clientHeight)
            );
        };

        const displayScrollElement = (element) => {
            element.classList.add("scrolled");
        };

        const hideScrollElement = (element) => {
            element.classList.remove("scrolled");
        };

        const handleScrollAnimation = () => {
            scrollElements.forEach((el) => {
                if (elementInView(el, 1.25)) {
                    displayScrollElement(el);
                } else if (elementOutofView(el)) {
                    hideScrollElement(el)
                }
            })
        }

        window.addEventListener("scroll", () => {
            handleScrollAnimation();
        });
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>