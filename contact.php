<?php
include 'header.php';
?>
<body class="index-page" xmlns="http://www.w3.org/1999/html">
<!-- Navbar -->
<?php
include 'nav.php';
?>
<!-- End Navbar -->

<div class="wrapper">
    <div class="header header-filter">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="brand">
                        <h1 style="font-family: 'Dancing Script', cursive;"><br>Contact Lauren on</br> 027 700 2070</br> or complete the form below</strong></h1>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="main main-raised">

        <div class="section">

            <div class="contact-header">

            </div>
                <div id="page-wrapper">

                    <div  class="form-display">
                    <form id="ajax-contact" method="post" action="mailer.php">
                        <div>
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div>
                            <label for="phone">Phone:</label>
                            <input type="text" id="phone" name="phone" required>
                        </div>

                        <div>
                            <label for="date">Due Date:</label>
                            <input type="text" id="date" name="date" required>
                        </div>
                        <div class="field">
                            <label for="leavemessage">Can I leave a message?:</label></br></br>
                            <select id="leavemessage" name="leavemessage" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="field">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address" required>
                        </div>
                        <div class="field">
                            <label for="children">How many children have you given birth to:</label></br></br>
                            <select id="children" name="children" required>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="More than 10">More than 10</option>
                            </select>
                        </div>

                        <div>
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        <div id="form-messages"></div>
                        <div class="field">
                            <button type="submit"><strong>Send</strong></button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
                <script src="jquery-2.1.0.min.js"></script>
                <script src="app.js"></script>

            </div>
        </div>


    </div>
    <?php
    include "footer.php";
    ?>
