<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="favicon.ico" type="image/ico">  
    <title>Marianne | Portfolio</title>
</head>
<body>
    <div class="outer-container">    

        <aside class="aside">
            <h1><a href="index.php">MP</a><button class="close-nav-btn">X</button></h1>

            <nav class="nav">
                <a href="about.html">About Me</a>
                <a href="index.php#portfolio">My Portfolio</a>
                <a href="coding.html">Coding Examples</a>
                <a href="scs.html">SCS Scheme</a>
                <a href="index.php#contact">Contact Me</a>
            </nav>
        </aside>

        <nav class="mobile-nav-icon">
            <div class="icon">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>

        <div class="main-container">
            <header class="header">     
                <div class="text-container">
                    <div class="photo-container">
                        <img src="assets/images/mp_portfolio.jpg" 
                            alt="photo of marianne">           
                    </div>
                    <div class="h1-cont"><h1></h1></div>
                    <div class="h2-cont"><h2></h2></div>
                    <div class="h3-cont"><h3></h3></div>
                </div>
            </header>       
    
            <main class="main">
                <div class="portfolio" id="portfolio">
                    <h2>My Projects...</h2>
                    <section class="projects">
                        <div class="projects__card">
                            <div class="img-wrapper">                               
                                <img src="assets/images/netmatters.png" 
                                    alt="link to netmatters website reflection project">
                            </div>
                        
                            <h3>Netmatters Website Reflection</h3>
                            <p>With HTML and CSS (SASS) and JavaScript</p>
                           <div class="btn-area">
                                <a href="https://netmatters.marianne-porter.netmatters-scs.co.uk/" target="_blank">
                                    View Project
                                </a>    
                                <a href="https://github.com/marianneporter/netmattershomepage" target="_blank">
                                    Github Repo
                                </a>        
                           </div>
                               
                            
                        </div>   

                        <div class="projects__card">
                            <div class="img-wrapper">
                                <img src="assets/images/js-array.png" 
                                    alt="link to netmatters array coursework project">
                            </div>
                            <h3 style="padding-top: 0.5rem;"> JavaScript Array Assessment</h3>
                            <p>With HTML, CSS (SASS) and JavaScript</p>
                        
                            <div class="btn-area">
                                <a href="https://js-array.marianne-porter.netmatters-scs.co.uk/">View Project</a>   
                                <a href="https://github.com/marianneporter/javascript-photos-array">Github Repo</a>      
                           </div>                
                        </div>   
                        <div class="projects__card">
                            <div class="img-wrapper">
                                <img src="assets/images/placeholder-600x400.png" 
                                    alt="link to netmatters website reflection project">
                            </div>
                            <h3>Project 3</h3>
                            <p>TBA</p>
                            <div class="btn-area">
                                <a href="#" >View Project</a>  
                                <a href="#">Github Repo</a>       
                           </div>                
                        </div>                  
                        <div class="projects__card">
                            <div class="img-wrapper">
                                <img src="assets/images/placeholder-600x400.png" 
                                    alt="link to netmatters website reflection project">
                            </div>
                            <h3>Project 4</h3>
                            <p>TBA</p>
                            <div class="btn-area">
                                <a href="#">View Project</a>  
                                <a href="#">Github Repo</a>       
                           </div>                  
                        </div>                       
                        <div class="projects__card">
                            <div class="img-wrapper">
                                <img src="assets/images/placeholder-600x400.png" 
                                    alt="link to netmatters website reflection project">
                            </div>
                            <h3>Project 5</h3>
                            <p>TBA</p>
                            <div class="btn-area">
                                <a href="#">View Project</a>    
                                <a href="#">Github Repo</a>     
                           </div>                  
                        </div>           
                        <div class="projects__card">
                            <div class="img-wrapper">
                                <img src="assets/images/placeholder-600x400.png" 
                                    alt="link to netmatters website reflection project">
                            </div>
                            <h3>Project 6</h3>
                            <p>TBA</p>
                            <div class="btn-area">
                                <a href="#">View Project</a>  
                                <a href="#">Github Repo</a>       
                           </div>                
                        </div>         
                    </section> 
                </div> 
                <section id="contact" class="contact" >
                    <h2>Contact me...</h2>
                    <form action="" 
                          class="contact__form"
                          id="contact-form">
                        <div class="form-control first-name">
                            <input type="text" placeholder="First Name*"
                                   class="first-name-input form-input"
                                   name="first-name">
                            <p class="error-message first-name-err-msg"></p>
                        </div>
                        <div class="form-control last-name">
                            <input type="text" placeholder="Last Name*"
                                   class="last-name-input form-input"
                                   name="last-name">   
                            <p class="error-message last-name-err-msg"></p>      
                        </div>
                        <div class="form-control email">
                            <input type="text" placeholder="Email*"
                                    name="email" class="email-input form-input">  
                            <p class="error-message email-err-msg"></p>
                        </div>
                        <div class="form-control subject">
                            <input type="text"
                                   placeholder="Subject*"
                                   name="subject"
                                   class="subject-input form-input">    
                            <p class="error-message subject-err-msg"></p>        
                        </div>
                        <div class="form-control message">
                            <textarea class="message-input form-input" 
                                      name="message"
                                      placeholder="Your message*"></textarea>   
                            <p class="error-message message-err-msg"></p>                         
                        </div>                          
                        <button type="submit">Submit</button>                                                      
                    </form>
                    <div class="popup">                       
                        <div class="popup-text">
                            <h1></h1>
                            <h3></h3>   
                            <div class="close-btn">X</div>
                        </div> 
                    </div>
                </section>    
            </main>
        </div>
    </div>

    <div class="overlay"></div>
  
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/home.js"></script>
    <script src="js/form.js"></script>
    <script src="js/nav.js"></script>
</body>
</html>