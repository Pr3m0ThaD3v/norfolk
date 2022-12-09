<!doctype html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="styles.css" rel="stylesheet">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <title>PHP Contact Form</title>

    
</head>

<body>
    <main>
        <header class="h1-header">
            <h1>Norfolk County</h1>
            <p>New Hire Form</p>
        </header>

        <section class="contact">

            <div class="form-div">
                <form action="/usr_input.php" class="form form-flex" method="post">

                    <div class="uname-email-input">
                        <input id="name" name="name" placeholder=" Full Name" required>
                        <input id="email" name="email" placeholder=" Your Email" required>
                        <input id="subject" name="subject" placeholder=" Subject" required>
                    </div>

                    <br>
                    <!--Dropdown Starts-->
                    <div class="input-fields">
                        <div class="dropdown">

                            <span>Windows PC</span>
                            <div class="dropdown-content input-div">
                                <label for="windows-pc"><input id="windows-pc" name="windows-pc" type="checkbox"> PC</label>
                                <br>
                                <label for="laptop"> <input id="laptop" name="laptop" type="checkbox"> Laptop</label>
                                
                            </div>
                        </div>

                        <div class="dropdown">
                            <span>Domain Access</span>
                            <div class="dropdown-content input-div">
                                <label for="active-directory"> <input id="active-directory" name="active-directory" type="checkbox"> AD User Profile</label>
                                temp
                            </div>
                        </div>

                        <div class="dropdown">
                            <span>Office 365</span>
                            <div class=" dropdown-content input-div">
                                <label for="email"> <input id="email" name="email" type="checkbox"> Outlook Account</label>
                                
                            </div>
                        </div>

                        <div class="dropdown">
                            <span>Software</span>
                            <div class="dropdown-content input-div">
                                <label for="browntech"> <input id="browntech" name="browntech" type="checkbox"> BrownTech</label>
                                <br>
                                <label for="tylerbudget"><input id="tylerbudget" name="tylerbudget" type="checkbox"> Tyler BudgetSense</label>
                                
                            </div>
                        </div>



                        <div class="dropdown doorfob-div input-div">
                            <span>Building Access</span>
                            <div class="dropdown-content">
                                <label class="" for="doofob1"><input class="" id="doorfob1" name="doorfob1" type="checkbox"> 649 High Street</label>
                                <br>
                                <label class="df-nested" for="doorfob2"> <input class="df-nested" id="doorfob2" name="doorfob2" type="checkbox"> 614 High Street</label>
                                
                            </div>
                        </div>

                        <div class="dropdown">
                            <span>Phone</span>
                            <div class="dropdown-content input-div">
                                <label for="desk-phone"> <input id="desk-phone" name="desk-phone" type="checkbox"> Avaya Phone</label>
                                <br>
                                <label for="cellphone"> <input id="cellphone" name="cellphone" type="checkbox"> Cell Phone</label>
                                
                            </div>
                        </div>

                        <div class="dropdown">
                            <span>Employment Type</span>
                            <div class="dropdown-content input-div">
                                <label for="fulltime"> <input id="full-time" name="fulltime" type="checkbox"> Perm</label>
                                <br>
                                <label for="intern"> <input id="intern" name="intern" type="checkbox"> Intern</label>
                                <br>
                                <label for="temp"> <input id="temp" name="temp" type="checkbox"> Temp</label>
                                
                            </div>
                        </div>
                    </div>

                    <button class="submit-button" name="submit" type="submit" value="Save Data">Send Mail</button>

                </form>
            </div>
            <!--Dropdown Ends-->
        </section>

        <!--Start of Footer-->
        <section class="footer">
            <footer>
                <div></div>
            </footer>
        </section>
        <!--ENd of Footer-->
       
    </main>


</body>

</html>