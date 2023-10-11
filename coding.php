<?php require_once 'includes/header.php'; ?>  

<body>

    <div class="outer-container">

        <?php require_once 'includes/nav.php'; ?>  

        <div class="coding">
            <h1>Coding Examples</h1>  

            <div class="coding-slides-wrapper">
                <div class="coding-slides"> <!-- slick container -->
                    <div class="coding-slide-wrapper">
                        <h2 >Example 1: Portfolio - JavaScript - Side Menu</h2>
                        <div class="description">
                            <p>Here is the code for the side menu of the application you are currently looking at.</p>
                            <p>The code below shows the initial setting up of the menu. It has event listeners that respond to user generated requests to open and close the menu as well as responding to screen resizing</p>
                            <p>I have also used an overlay to cover the main content part of the screen when the menu for smaller devices is in use</p>
                        </div>  
                        <div class="coding-image-wrapper">
                            <img src="assets/images/code_examples/nav.png" alt="">
                        </div>  
                        <div class="coding-btn-wrapper">
                            <a class="coding-button"
                               href="https://github.com/marianneporter/mp_portfolio"
                               target="_blank">View Full Code on Github</a>
                        </div>         
                                 
                    </div>
                    <div class="coding-slide-wrapper">
                        <h2>Example 2: Portfolio - CSS -  Custom Scroll Bars</h2>
                        <div class="description">
                            <p>Here is the code for the dark color scrollbars of the coding example window on this page.</p>
                            <p>Custom scrollbars are not a standard feature of css at present so browsers have to be targeted separately.</p>
                            <p>My first selector is for the Firefox browser. This is likely to become the future standard.</p>  
                            <p>The following selectors target the Webkit browser engines used by Chrome, Safari and Edge.</p>   
                        </div>                            
                        <div class="coding-image-wrapper">
                            <img src="assets/images/code_examples/scrollbars.png" alt="">
                        </div>   
                        <div class="coding-btn-wrapper">
                            <a class="coding-button"
                                href="https://github.com/marianneporter/mp_portfolio"
                                target="_blank">
                                View Full Code on Github
                            </a>
                        </div>                                    
                    </div>   
                    <div class="coding-slide-wrapper">
                        <h2>Example 3: Portfolio - PHP - Server side handling of contact form received via AJAX request</h2>
                        <div class="description">                         
                            <p>The processing of the form goes through four stages:</p>
                            <p>1. Sanitizing the data from the $_POST and storing it as a ContactForm object</p>  
                            <p>2. Validation of the ContactForm object </p>   
                            <p>3. Inserting the ContactForm data into the database via PDO</p>
                            <p>4. Returning an object in JSON format, containing a status message indicating OK, Validation_Errors of DB_Error
                                  plus a nested object which contains the error messages to be returned to AJAX.
                            </p>
                        </div>                            
                        <div class="coding-image-wrapper">
                            <img src="assets/images/code_examples/phpFormProcess.png" alt="">
                        </div>   
                        <div class="coding-btn-wrapper">
                            <a class="coding-button"
                                href="https://github.com/marianneporter/mp_portfolio"
                                target="_blank">
                                View Full Code on Github
                            </a>
                        </div>                                    
                    </div>                                   
                </div>  
            </div>    
        </div>
        <div class="overlay"></div>
    </div>

    <script src="js/common.js"></script>
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/coding.js"></script>
    <script src="js/nav.js"></script>
</body>
</html>