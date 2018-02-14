<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="assets/images/logonew2.png" /> 
    <link rel="stylesheet" href="assets/bootstrap4/bootstrap4.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <!--[if IE]>
      <link href="assets/css/bootstrap-ie9.min.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/bootstrap3.css">
      <script src="assets/js/html5shiv@3.7.3.js"></script>
    <![endif]-->

    
  
    <title>Mr. Bangladesh</title>
  </head>
  <body>

    <?php
      include 'connect.php';
    ?>
    <div class="container">
      <div class="row">
            <div class="col-md-12 order-md-1">
               <form action="success.php" class="needs-validation" accept-charset="utf-8" novalidate method="POST">
						

                   <div id="userInfoSection">
                         <div class="col-md-12 text-center">
                            <img class="d-block mx-auto mb-4 thumbnail-img" src="assets/images/Mr.Bangladesh game.jpg" alt="Mr Bangladesh"> 
                            <p class="lead">Mr. Bangladesh Quiz. <br />Get your prize by answering following questions !!! </p>
                          </div> <!-- End 12 -->

                          <div class="mb-3">
                            <label for="fullName">Your Full Name</label>
                            <input type="text" class="form-control" name="full_name" placeholder="Your Full Name" placeholder="Your Full Name ... " required>
                            <div class="invalid-feedback">
                              Valid name name is required.
                            </div>
                          </div> <!-- End mb -->

                          <div class="mb-3">
                            <label for="email">Your Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="you@gmail.com">
                            <div class="invalid-feedback">
                              Please enter a valid email address to get updates.
                            </div>
                          </div> <!-- End mb -->


                          <div class="mb-3">
                            <label for="address">Phone Number</label>
                            <input type="text" class="form-control" id="address" placeholder="017xxxxxxxx" required>
                            <div class="invalid-feedback">
                              Please enter your Phone Number.
                            </div>
                          </div> <!-- End mb -->


                          <div class="row">
                            <div class="col-md-12 mb-3">
                              <label for="district">District</label>
                              <select class="custom-select d-block w-100" id="district" required>
                                <option value="">Choose...</option>
                                <option>Dhaka</option>
                                <option>Chittagong</option>
                                <option>Sylhet</option>
                                <option></option>

                              </select>
                              <div class="invalid-feedback">
                                Please select a valid district.
                              </div>
                            </div>
                          </div> <!-- End row -->


                          <div class="row">
                            <div class="col-md-12">
                               <span class="btn btn-primary btn-lg btn-block" type="submit" onclick="startGame()">Start Game</span>
                            </div> <!-- End Col  -->
                          </div> <!-- End Row -->

                  </div> <!-- End userInfoSection -->


                    <div id="questionBlock">  

                           <div class="d-block question-block" id="question0">

                            <h2 class="question mb-3">
                                    ১) মিস্টার বাংলাদেশ’র নির্মাতা কে? 
                            </h2>  
                              <div class="custom-control custom-radio">
                                <input id="option_1" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                <label class="custom-control-label" for="option_1">তৌকির আহমেদ</label>
                              </div>
                              <div class="custom-control custom-radio">
                                <input id="option_2" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                <label class="custom-control-label" for="option_2">খিজির হায়াত খান</label>
                              </div>
                              <div class="custom-control custom-radio">
                                <input id="option_3" name="answerA" value="1" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                <label class="custom-control-label" for="option_3">আবু আক্তারুল ইমান</label>
                              </div>

                              <div class="custom-control custom-radio">
                                <input id="option_4" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                <label class="custom-control-label" for="option_4">নোমান রবিন</label>
                              </div>
                           </div>  <!-- End d-block my-3 -->
           

                          
                            <div class="d-block question-block" id="question1">

                              <h2 class="question mb-3">
                                      ২) মূল চরিত্রে খিজির হায়াত খানের এটি কত তম সিনেমা?
                              </h2>  
                                <div class="custom-control custom-radio">
                                  <input id="option_5" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_5">প্রথম</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input id="option_6" name="answerA" value="1" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_6">দ্বিতীয়</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input id="option_7" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_7">তৃতীয়</label>
                                </div>

                                <div class="custom-control custom-radio">
                                  <input id="option_8" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_8">চতুর্থ</label>
                                </div>
                            </div>  <!-- End d-block my-3 -->






                            <div class="d-block question-block" id="question2">

                              <h2 class="question mb-3">
                                      ১০) আপনি ‘মিস্টার বাংলাদেশ’ হলে দেশের কোন সমস্যার সমাধান করতেন? (এক বাক্যে বাংলা/ইংরেজিতে লিখুন)
                              </h2>  
                                <div class="">
                                  <input type="text" class="form-control" id="feedback" name="feedback" placeholder="Your feedback ... " required>

                                </div>

                               <div class="row">
                                  <div class="col-md-4 mt-30">
												  <input type="hidden" name="total_score" id="total_score">
                                      <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                                  </div>  <!-- End col -->
                               </div> <!-- End row -->

                            </div>  <!-- End d-block my-3 -->
                      
                    </div> <!-- End questionBlock -->

          </form>
        </div> <!-- End col 12 -->
      </div> <!-- End row -->
    </div>  <!-- End container -->
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/bootstrap4/popper.min.js"></script>
    <script src="assets/bootstrap4/bootstrap4.js"></script>
    <script src="assets/js/scripts.js"></script>

   <!--  <script src="assets/js/bootstrap3.min.js"></script> -->

  </body>
</html>
