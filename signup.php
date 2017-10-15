
<?php include("inc/header.php"); ?>

  <body>

    <?php include("inc/navigation.php"); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container center">
        <img class="homelogo" src="img/logo.png">
        <h1>Ment</h1>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <h1 class="center">Sign Up</h1>
                <form class="well form-horizontal" action=" " method="post"  id="contact_form">
                <fieldset>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label"></label>
                  <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
                    </div>
                  </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                  <label class="col-md-4 control-label"></label> 
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
                    </div>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label"></label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                        </div>
                  </div>
                </div>
                
                <!-- Password -->
                <div class="form-group">
                  <label class="col-md-4 control-label"></label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input name="email" placeholder="Password" class="form-control"  type="password">
                        </div>
                  </div>
                </div>
                    
                <!-- Confirm Password -->
                <div class="form-group">
                  <label class="col-md-4 control-label"></label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input name="email" placeholder="Confirm Password" class="form-control"  type="password">
                        </div>
                  </div>
                </div>


                <!-- Text input-->

                <div class="form-group">
                  <label class="col-md-4 control-label"></label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input name="phone" placeholder="Phone Number | Ex. (845) 555-1212" class="form-control" type="text">
                    </div>
                  </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                  <label class="col-md-4 control-label"></label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input name="address" placeholder="Address" class="form-control" type="text">
                    </div>
                  </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                  <label class="col-md-4 control-label"></label>  
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input name="city" placeholder="City" class="form-control"  type="text">
                    </div>
                  </div>
                </div>

                <!-- Select Basic -->

                <div class="form-group"> 
                  <label class="col-md-4 control-label"></label>
                    <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="state" class="form-control selectpicker" >
                      <option value=" " >Please Select Your State</option>
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option >Arizona</option>
                      <option >Arkansas</option>
                      <option >California</option>
                      <option >Colorado</option>
                      <option >Connecticut</option>
                      <option >Delaware</option>
                      <option >District of Columbia</option>
                      <option> Florida</option>
                      <option >Georgia</option>
                      <option >Hawaii</option>
                      <option >daho</option>
                      <option >Illinois</option>
                      <option >Indiana</option>
                      <option >Iowa</option>
                      <option> Kansas</option>
                      <option >Kentucky</option>
                      <option >Louisiana</option>
                      <option>Maine</option>
                      <option >Maryland</option>
                      <option> Mass</option>
                      <option >Michigan</option>
                      <option >Minnesota</option>
                      <option>Mississippi</option>
                      <option>Missouri</option>
                      <option>Montana</option>
                      <option>Nebraska</option>
                      <option>Nevada</option>
                      <option>New Hampshire</option>
                      <option>New Jersey</option>
                      <option>New Mexico</option>
                      <option>New York</option>
                      <option>North Carolina</option>
                      <option>North Dakota</option>
                      <option>Ohio</option>
                      <option>Oklahoma</option>
                      <option>Oregon</option>
                      <option>Pennsylvania</option>
                      <option>Rhode Island</option>
                      <option>South Carolina</option>
                      <option>South Dakota</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option> Uttah</option>
                      <option>Vermont</option>
                      <option>Virginia</option>
                      <option >Washington</option>
                      <option >West Virginia</option>
                      <option>Wisconsin</option>
                      <option >Wyoming</option>
                    </select>
                  </div>
                </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                  <label class="col-md-4 control-label"></label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
                        </div>
                    </div>
                </div>

                <!-- Success message -->
                <div class="alert alert-success center" role="alert" id="success_message">
                    Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.
                </div>

                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-5 control-label"></label>
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-primary" >Send <span class="glyphicon glyphicon-send"></span></button>
                  </div>
                </div>

                </fieldset>
                </form>
        </div>

      <hr>

			<?php include("inc/footer.php") ?>
      
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>