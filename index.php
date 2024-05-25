<?php require_once "includes/header.php" ?>

<body>
    <div class="outer-container">    

        <?php require_once 'includes/nav.php'; ?> 

        <div class="main-container" style="overflow-y: auto">
        
            <?php require_once 'includes/mobileNavIcon.php'; ?>  

            <header class="header">     
                <div class="text-container">
                    <div class="photo-container">
                        <img src="assets/images/mp_250524.jpg" 
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
                            <div class="front">
                                <h3>Lara Todos</h3>  
                                <h4>Full Stack Project</h4>                           
                                <p>Inertia App, Using Laravel for the Backend and Vue for the Front End functioality</p>
                                <div class="img-container" style="margin-top: 1rem">
                                    <img class="img" src="assets/images/projects/lara_todos.png" alt="No image">     
                                </div>
                                <button class="toggle-btn front-toggle">More Info</button>            
                            </div>
                            <div class="back">
                                <h3 class="">Lara Todos</h3>
                                <h4>Inertia App with Laravel and Vue</h4>
                                <section class="icon-group">                                  
                                    <img class="img-icon" src="assets/images/icons/laravel_4.svg" alt="laravel Icon">  
                                    <img class="img-icon" src="assets/images/icons/vue-js-icon.svg" alt="vue Icon"> 
                                    <img class="img-icon" src="assets/images/icons/inertia.png" alt="inertia icon">
                                    <img class="img-icon" src="assets/images/icons/pinia-seeklogo.svg" alt="pinia Icon"> 
                                    <img src="assets/images/icons/icons8-php-logo.svg" alt="PHP Icon">                                   
                                    <img class="img-icon" src="assets/images/icons/icons8-mysql-48.png" alt="mySQL Icon">                                                                   
                                    <img class="img-icon" src="assets/images/icons/javascript-icon.svg" alt="JavaScript Icon">                           
                                    <img class="img-icon" src="assets/images/icons/css-icon.svg" alt="CSS3 Icon">
                                    <img class="img-icon" src="assets/images/icons/html-icon.svg" alt="HTML5 Icon">                                   
                                </section>          
                                <section class="github">
                                    <h4 class="sub-heading">Github</h4>
                                    <div class="github-link-group">                                     
                                        <a href="https://github.com/marianneporter/lara_todos" target="_blank">View Repo</a>                                     
                                    </div>
                                </section>

                                <section class="apps">
                                    <h4 class="sub-heading">Applications</h4>
                                    <div class="apps-link-group">                                     
                                        <a href="https://lara-todos-bdad817dcf29.herokuapp.com/" target="_blank">View App</a>
                                    </div>   
                                    <h4 class="demo-user">Demo User Id and Password: john@test.com/Demo0801</h4>                         
                                </section>

                                <button class="toggle-btn back-toggle">Back to summary</button>                                 
    
                            </div>                                      
                        </div> 
                      
                        <div class="projects__card">                               
                            <div class="front">
                                <h3>Laravel and Vue Quiz Apps</h3>
                                <h4>Quiz Applications both using The Trivia API</h4>
                                <p class="two-projects-desc">Two contrasting ways of building the same Quiz app</p>
                                <div class="two-img-layout-card">
                                    <div class="sml-img-container">
                                       <img class="img" src="assets/images/projects/lara_quiz.png" alt="No image">                                   
                                    </div>
                                    <p>A server side Laravel App</p>   
                                </div>
                                <div class="two-img-layout-card">
                                    <p>A client side Vue App</p>   
                                    <div class="sml-img-container">
                                       <img class="img" src="assets/images/projects/vue_quiz.png" alt="No image">     
                                    </div>
                                                                 
                                </div>
                                <button class="toggle-btn front-toggle">More Info</button>                                      
                            </div>
                            <div class="back">
                                <div class="two-project-layout">
                                    <h3 class="">Laravel and Vue Quiz Apps</h3>
                                    <h4>Lara Quiz</h4>
                                    <div class="icon-group">
                                        <img src="assets/images/icons/icons8-php-logo.svg" alt="PHP Icon">
                                        <img class="img-icon" src="assets/images/icons/laravel_4.svg" alt="Laravel Icon">
                                        <img class="img-icon" src="assets/images/icons/tailwind-css-icon.svg" alt="Tailwind Icon">
                                        <img class="img-icon" src="assets/images/icons/css-icon.svg" alt="CSS3 Icon">
                                        <img class="img-icon" src="assets/images/icons/html-icon.svg" alt="HTML5 Icon">                                
                                    </div> 
                                    <div class="two-projects-links">
                                        <div class="github">                                    
                                            <div class="github-link-group">
                                                <a href="https://github.com/marianneporter/lara_quiz" target="_blank">View Repo</a>                               
                                            </div> 
                                        </div>

                                        <div class="apps">                                       
                                            <div class="apps-link-group">
                                                <a href="https://lara-quiz-1a71244db678.herokuapp.com/" target="_blank">View App</a>                                        
                                            </div>                                  
                                        </div>                                        
                                    </div>
                                    <h4>Vue Quiz</h4>
                                    <div class="icon-group">
                                        <img class="img-icon-lg" src="assets/images/icons/vue-js-icon.svg" alt="vue.js icon">
                                        <img class="img-icon-sm" src="assets/images/icons/pinia-seeklogo.svg" alt="pinia icon">
                                        <img class="img-icon" src="assets/images/icons/javascript-icon.svg" alt="vue.js icon">
                                        <img class="img-icon" src="assets/images/icons/css-icon.svg" alt="CSS3 Icon">
                                        <img class="img-icon" src="assets/images/icons/html-icon.svg" alt="HTML5 Icon">                                
                                    </div>     

                                    <div class="two-projects-links">
                                        <div class="github">                                  
                                            <div class="github-link-group">
                                                <a href="https://github.com/marianneporter/vue_quiz" target="_blank">View Repo</a>                               
                                            </div> 
                                        </div>

                                        <div class="apps">                          
                                            <div class="apps-link-group">
                                                <a href="https://vue-quiz-i5vh.onrender.com" target="_blank">View App</a>                                        
                                            </div>                                  
                                        </div>    
                                    </div>                                                    
                                </div>
                     
                                <button class="toggle-btn back-toggle">Back to summary</button>                      
                                
                            </div>                                      
                        </div>   
                        <div class="projects__card">                               
                            <div class="front">
                                <h3>Sunnyview Stables </h3>
                                <h4>Full Stack Project</h4>
                                <p>C#/ASP.Net API with alternative Vue and Angular Front Ends</p>
                                <div class="img-container">
                                    <img class="img" src="assets/images/projects/sunnystables.png" alt="No image">     
                                </div>   
                                <button class="toggle-btn front-toggle">More Info</button>                                      
                            </div>
                            <div class="back">
                                <h3 class="">Sunnyview Stables</h3>
                                <section class="icon-group">
                                    <img class="img-icon" src="assets/images/icons/vue-js-icon.svg" alt="">                                  
                                    <img class="img-icon" src="assets/images/icons/javascript-icon.svg" alt="">
                                    <img class="img-icon" src="assets/images/icons/typescript.png" alt=""> 
                                    <img class="img-icon" src="assets/images/icons/c-sharp.svg" alt="C# icon">
                                    <img class="img-icon" src="assets/images/icons/icons8-microsoft-sql-server.svg" alt="SQL Server Icon">      
                                    <img class="img-icon" src="assets/images/icons/icons8-angular.svg" alt="Angular Icon">    
                                    <img class="img-icon" src="assets/images/icons/css-icon.svg" alt="CSS3 Icon">
                                    <img class="img-icon" src="assets/images/icons/html-icon.svg" alt="HTML5 Icon">                   
                                    <img class="img-icon" src="assets/images/icons/sass-icon.svg" alt="SASS Icon">
                                </section> 
                                <section class="github">
                                    <h4 class="sub-heading">Github</h4>
                                    <div class="github-link-group">
                                        <a href="https://github.com/marianneporter/SunnysideStablesAPI" target="_blank">ASP.Net API</a>
                                        <a href="https://github.com/marianneporter/sunnysidestablesvue" target="_blank">Vue.js SPA</a>
                                        <a href="https://github.com/marianneporter/SunnyviewStablesSPA" target="_blank">Angular SPA</a>
                                    </div> 
                                </section>

                                <section class="apps">
                                    <h4 class="sub-heading">Applications</h4>
                                    <div class="apps-link-group">
                                        <a href="https://sunnystablesvueapp.z33.web.core.windows.net" target="_blank">Vue.js</a>
                                        <a href="https://sunnystables.azurewebsites.net" target="_blank">Angular</a>
                                    </div>
                                    <h4 class="demo-user">Demo User Id and Password: demo@sunnystables.com/Demo1234!*</h4>
                                </section>    
                                
                                <button class="toggle-btn back-toggle">Back to summary</button>                      
                                
                            </div>                                      
                        </div>   
                        <div class="projects__card">                               
                            <div class="front">
                                <h3>Cats CRUD Apps</h3>
 
                                <h4>Full Stack Projects</h4>
                                <p>Alternative approaches to a CRUD App in PHP,  first approach is with no framework, second uses Laravel</p>
                                <div class="img-container">
                                    <img class="img" src="assets/images/projects/cats_crud.png" alt="No image">     
                                </div>
                                <button class="toggle-btn front-toggle">More Info</button>            
                            </div>
                            <div class="back">
                                <h3 class="">Cats CRUD Apps</h3>
                                <section class="icon-group">
                                    <img src="assets/images/icons/icons8-php-logo.svg" alt="PHP Icon">
                                    <img class="img-icon" src="assets/images/icons/laravel_4.svg" alt="Laravel Icon">
                                    <img class="img-icon" src="assets/images/icons/icons8-mysql-48.png" alt="mySQL Icon">
                                    <img class="img-icon" src="assets/images/icons/tailwind-css-icon.svg" alt="tailwind Icon">
                                    <img class="img-icon" src="assets/images/icons/icons8-bootstrap.svg" alt="bootstrap Icon">                                  
                                    <img class="img-icon" src="assets/images/icons/javascript-icon.svg" alt="JavaScript Icon">                           
                                    <img class="img-icon" src="assets/images/icons/css-icon.svg" alt="">
                                    <img class="img-icon" src="assets/images/icons/html-icon.svg" alt="">                        
                                </section>          
                                <section class="github">
                                    <h4 class="sub-heading">Github</h4>
                                    <div class="github-link-group">
                                        <a href="https://github.com/marianneporter/cats-app-php" target="_blank">
                                            <span><span>PHP App</span><br><span class="link-detail">(No Framework)</span></span>
                                        </a>
                                        <a href="https://github.com/marianneporter/catsAppLara" target="_blank">Laravel App</a>                                     
                                    </div> 
                                </section>

                                <section class="apps">
                                    <h4 class="sub-heading">Applications</h4>
                                    <div class="apps-link-group">
                                        <a href="https://cats-app-php.herokuapp.com/login.php" target="_blank">
                                            <span><span>PHP App</span><br><span class="link-detail">(No Framework)</span></span></a>
                                        <a href="https://cats-app-laravel.herokuapp.com" target="_blank">
                                            Laravel App
                                        </a>
                                    </div>
                                    <h4 class="demo-user">Demo User Id and Password: demo@cats.com/Demo1234!*</h4>
                                </section>

                                <button class="toggle-btn back-toggle">Back to summary</button>                                 
    
                            </div>                                      
                        </div>   

                        <div class="projects__card">                               
                            <div class="front">
                                <h3>Netmatters Website Reflection</h3>   
                                <h4>Netmatters Skills Bootcamp Exercise</h4>                             
                                <p>Rebuild of the Netmatters Home and Contact Pages</p>
                                <div class="img-container">
                                    <img class="img" src="assets/images/projects/netmatters.png" alt="No image">     
                                </div>
                                <button class="toggle-btn front-toggle">More Info</button>            
                            </div>
                            <div class="back">
                                <h3 class="">Netmatters Website Reflection</h3>
                                <h4>Netmatters Skills Bootcamp Exercise</h4>   
                                <section class="icon-group">
                                    <img src="assets/images/icons/icons8-php-logo.svg" alt="PHP Icon">                                   
                                    <img class="img-icon" src="assets/images/icons/icons8-mysql-48.png" alt="mySQL Icon">                                                                   
                                    <img class="img-icon" src="assets/images/icons/javascript-icon.svg" alt="JavaScript Icon">                           
                                    <img class="img-icon" src="assets/images/icons/css-icon.svg" alt="CSS3 Icon">
                                    <img class="img-icon" src="assets/images/icons/html-icon.svg" alt="HTML5 Icon">                   
                                    <img class="img-icon" src="assets/images/icons/sass-icon.svg" alt="SASS Icon">
                                </section>          
                                <section class="github">
                                    <h4 class="sub-heading">Github</h4>
                                    <div class="github-link-group">                                     
                                        <a href="https://github.com/marianneporter/netmattershomepage" target="_blank">View Repo</a>                                     
                                    </div> 
                                </section>

                                <section class="apps">
                                    <h4 class="sub-heading">Application</h4>
                                    <div class="apps-link-group">                                     
                                        <a href="https://netmatters-reflection-05e587136ad3.herokuapp.com/" target="_blank">View App</a>
                                    </div>                            
                                </section>

                                <button class="toggle-btn back-toggle">Back to summary</button>                                 
    
                            </div>                                      
                        </div>   
                        <div class="projects__card">                               
                            <div class="front">
                                <h3>JavaScript Array Assessment</h3>  
                                <h4>Netmatters Skills Bootcamp Exercise</h4>                           
                                <p>Demonstration of JavaScript skills covered on Bootcamp</p>
                                <div class="img-container">
                                    <img class="img" src="assets/images/projects/js-array.png" alt="No image">     
                                </div>
                                <button class="toggle-btn front-toggle">More Info</button>            
                            </div>
                            <div class="back">
                                <h3 class="">JavaScript Array Assessment</h3>
                                <h4>Netmatters Skills Bootcamp Exercise</h4>
                                <section class="icon-group">
                                    <img src="assets/images/icons/icons8-php-logo.svg" alt="PHP Icon">                                   
                                    <img class="img-icon" src="assets/images/icons/icons8-mysql-48.png" alt="mySQL Icon">                                                                   
                                    <img class="img-icon" src="assets/images/icons/javascript-icon.svg" alt="JavaScript Icon">                           
                                    <img class="img-icon" src="assets/images/icons/css-icon.svg" alt="CSS3 Icon">
                                    <img class="img-icon" src="assets/images/icons/html-icon.svg" alt="HTML5 Icon">                   
                                    <img class="img-icon" src="assets/images/icons/sass-icon.svg" alt="SASS Icon">
                                </section>          
                                <section class="github">
                                    <h4 class="sub-heading">Github</h4>
                                    <div class="github-link-group">                                     
                                        <a href="https://github.com/marianneporter/javascript-photos-array" target="_blank">View Repo</a>                                     
                                    </div> 
                                </section>

                                <section class="apps">
                                    <h4 class="sub-heading">Applications</h4>
                                    <div class="apps-link-group">                                     
                                        <a href="https://jsarray.z35.web.core.windows.net" target="_blank">View App</a>
                                    </div>                            
                                </section>

                                <button class="toggle-btn back-toggle">Back to summary</button>                                 
    
                            </div>                                      
                        </div> 

                    </section> 
                </div> 
                <section id="contact" class="contact" >
                    <h2>Contact me...</h2>
                    <form action="" 
                          class="contact__form"
                          id="contact-form">
                        <div class="form-control name">
                            <input type="text" placeholder="Your Name*"
                                   class="name-input form-input"
                                   name="name">
                            <p class="error-message name-err-msg"></p>
                        </div>
                        <div class="form-control company-name">
                            <input type="text" placeholder="Company Name"
                                   class="company-name-input form-input"
                                   name="company-name">   
                            <p class="error-message company-name-err-msg"></p>      
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
                                      maxlength="500"
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
    <script src="js/home/typewriter.js"></script>
    <script src="js/home/events.js"></script>
    <script src="js/form.js"></script>
    <script src="js/nav.js"></script>
</body>
</html>