<?php include('includes/nav.php'); ?>
<style>
* {
  box-sizing: border-box;
}


h2 {
    text-align: center;
    margin-bottom: 50px;
    color: #fff;
}



/* form starting stylings ------------------------------- */
.group {
    position: relative;
    margin-bottom: 35px;
}

input {
    font-size: 18px;
    padding: 5px 10px 10px 5px;
    display: block;
    width: 100%;
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
}

    input:focus {
        outline: none;
    }

/* LABEL ======================================= */
label {
    color: #fff;
    font-size: 18px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left: 5px;
    top: 10px;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
}

/* active state */
input:focus ~ label, input:valid ~ label {
    top: -20px;
    font-size: 14px;
    color: #fff;
}

/* BOTTOM BARS ================================= */
.bar {
    position: relative;
    display: block;
    width: 100%;
}

    .bar:before, .bar:after {
        content: '';
        height: 2px;
        width: 0;
        bottom: 1px;
        position: absolute;
        background: #fff;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }

    .bar:before {
        left: 50%;
    }

    .bar:after {
        right: 50%;
    }



/* active state */
input:focus ~ .bar:before, input:focus ~ .bar:after {
    width: 50%;
}

/* HIGHLIGHTER ================================== */
.highlight {
    position: absolute;
    height: 60%;
    width: 100px;
    top: 25%;
    left: 0;
    pointer-events: none;
    opacity: 0.5;
}

/* active state */
input:focus ~ .highlight {
    -webkit-animation: inputHighlighter 0.3s ease;
    -moz-animation: inputHighlighter 0.3s ease;
    animation: inputHighlighter 0.3s ease;
}

/* ANIMATIONS ================ */
@-webkit-keyframes inputHighlighter {
    from {
        background: #fff;
    }

    to {
        width: 0;
        background: transparent;
    }
}

@-moz-keyframes inputHighlighter {
    from {
        background: #fff;
    }

    to {
        width: 0;
        background: transparent;
    }
}

@keyframes inputHighlighter {
    from {
        background: #fff;
    }

    to {
        width: 0;
        background: transparent;
    }
}


#panel {
    border: 1px solid rgb(200, 200, 200);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
    background: -webkit-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%);
    background: red; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); /* For Firefox 3.6 to 15 */
    background: linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); /* Standard syntax (must be last) */
    
    
    border-radius: 4px;
    top: 50px;
}

</style>

<section class="why-us">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1><i class="fa fa-envelope"></i>Contact Us</h1>
      </div>
      <?php include 'open-accts.php'; ?>
    </div>
  </div>
</section>

<section class="reg-start contact-us">
  <!-- <div class="container">
    <h4 class="text-center">Leave Us A Message</h4>
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <form role="form" action="" method="post">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group addon">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" id="contactName" placeholder="Full Name" name="contactName">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <div class="input-group addon">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-o"></i></span>
                <input type="email" class="form-control" id="contactEmail" placeholder="Enter Email Address">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <div class="input-group addon">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-mobile-phone"></i></span>
                <input type="tel" class="form-control" id="contactPhone" placeholder="Enter Phone Number">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <div class="input-group addon">
                <textarea type="text" class="form-control" id="contactMsg" placeholder="Enter Message Here..."></textarea>
              </div>
            </div>
          </div>

          <div class="form-group">
            <input type="submit" name="depositBtn" value="Send Message &raquo;" class="btn btn-custom-demo btn-block">
          </div>


        </form>
      </div>
    </div>
  </div> -->


<div class="container">


    <div class="col-lg-offset-4 col-lg-4" id="panel" style="margin-bottom: 40px;">
        <h2>Get In Touch</h2>
		<div id="form-messages"></div>
        <form id="ajax-contact" method="post" action="mailer.php">

            <div class="group">
                <input type="text" name="contactName" id="name" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Name</label>
            </div>

            <div class="group">
                <input type="text" name="contactEmail" id="email" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Email</label>
            </div>

            <div class="group">
                <input type="tel" name="contactPhone" id="tel" placeholder="E.g +1-206-333-3334" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Mobile No</label>
            </div>

            <div class="group">
                <input type="text" name="contactMsg" id="msg" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Message</label>
            </div>
            <div class="group">
                <center> <button type="submit" class="btn btn-warning">Send Message<span class="glyphicon glyphicon-send"></span></button></center>
            </div>
        </form>

    </div>
</div>

</section>

<?php include('includes/footer.php'); ?>
<script src="js/app.js"></script>
