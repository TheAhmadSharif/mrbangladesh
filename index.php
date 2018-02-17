<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta property="og:image" content="assets/images/mrBD.jpg" />
    <meta property="og:title" content="Mr. Bangladesh]" />
    <meta property="og:description" content="Mr. Bangladesh" />


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
               <form action="success.php" id="userInfo" accept-charset="utf-8" method="POST">
						

                   <div id="userInfoSection">
                         <div class="col-md-12 text-center">
                            <img rel="assets/images/mrBD.jpg" class="d-block mx-auto mb-4 thumbnail-img" src="assets/images/mrBD.jpg" alt="Mr Bangladesh"> 
                          </div> <!-- End 12 -->

                          <div class="mb-3">
                            <label for="fullName">Your Full Name</label>
                            <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Your Full Name" placeholder="Your Full Name ... " required>
                            
                          </div> <!-- End mb -->

                          <div class="mb-3">
                            <label for="email">Your Email Address</label> 
                            <input type="email" name="email" class="form-control" id="email" placeholder="you@gmail.com" required>
                          </div> <!-- End mb -->


                          <div class="mb-3">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="01xxxxxxxxx" maxlength="11" required>
                          </div> <!-- End mb -->


                          <div class="row">
                            <div class="col-md-12 mb-3">
                              <label for="district">District</label>
                              <select class="custom-select d-block w-100" id="district" name="district" title="Please select your district" required>
                                <option value="0">Choose...</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Faridpur">Faridpur</option>
                                <option value="Gazipur">Gazipur</option>
                                <option value="Gopalganj">Gopalganj</option>
                                <option value="Jamalpur">Jamalpur</option>
                                <option value="Kishoreganj">Kishoreganj</option>
                                <option value="Madaripur">Madaripur</option>
                                <option value="Manikganj">Manikganj</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Narayanganj">Narayanganj</option>
                                <option value="Narsingdi">Narsingdi</option>
                                <option value="Netrokona">Netrokona</option>
                                <option value="Rajbari">Rajbari</option>
                                <option value="Shariatpur">Shariatpur</option>
                                <option value="Sherpur">Sherpur</option>
                                <option value=""Tangail>Tangail</option>
                                <option value="Bogra">Bogra</option>
                                <option value="Joypurhat">Joypurhat</option>
                                <option value="Naogaon">Naogaon</option>
                                <option value="Natore">Natore</option>
                                <option value="Nawabganj">Nawabganj</option>
                                <option value="Pabna">Pabna</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Nawabganj">Nawabganj</option>
                                <option value="Sirajgonj">Sirajgonj</option>
                                <option value="Dinajpur">Dinajpur</option>
                                <option value="Gaibandha">Gaibandha</option>
                                <option value="Kurigram">Kurigram</option>
                                <option value="Lalmonirhat">Lalmonirhat</option>
                                <option value="Nilphamari">Nilphamari</option>
                                <option value="Panchagarh">Panchagarh</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Thakurgaon">Thakurgaon</option>
                                <option value="Barguna">Barguna</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Bhola">Bhola</option>
                                <option value="Jhalokati">Jhalokati</option>
                                <option value="Patuakhali">Patuakhali</option>
                                <option value="Pirojpur">Pirojpur</option>
                                <option value="Bandarban">Bandarban</option>
                                <option value="Brahmanbaria">Brahmanbaria</option>
                                <option value="Chandpur">Chandpur</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Comilla">Comilla</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Cox''s Bazar">Cox''s Bazar</option>
                                <option value="Feni">Feni</option>
                                <option value="Khagrachari">Khagrachari</option>
                                <option value="Lakshmipur">Lakshmipur</option>
                                <option value="Noakhali">Noakhali</option>
                                <option value="Rangamati">Rangamati</option>
                                <option value="Habiganj">Habiganj</option>
                                <option value="Maulvibazar">Maulvibazar</option>
                                <option value="Sunamganj">Sunamganj</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Bagerhat">Bagerhat</option>
                                <option value="Chuadanga">Chuadanga</option>
                                <option value="Jessore">Jessore</option>
                                <option value="Jhenaidah">Jhenaidah</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Kushtia">Kushtia</option>
                                <option value="Magura">Magura</option>
                                <option value="Meherpur">Meherpur</option>
                                <option value="Narail">Narail</option>
                                <option value="Satkhira">Satkhira</option>
                              </select>
                            </div>
                          </div> <!-- End row -->


                          <div class="row">
                            <div class="col-md-12">
                               <span class="btn btn-primary btn-lg btn-block" id="startGameBtn">Start Game</span>
                            </div> <!-- End Col  -->
                          </div> <!-- End Row -->

                  </div> <!-- End userInfoSection -->


                    <div id="questionBlock">  

                            <div class="question-block" id="question0">

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
           

                          
                            <div class="question-block" id="question1">

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


                            <div class="question-block" id="question2">

                              <h2 class="question mb-3">
                                      ৩) কোন সালে লাক্স সুপারস্টারে ভূষিত হন শানেরায় দেবী শানু?
                              </h2>  
                                <div class="custom-control custom-radio">
                                  <input id="option_9" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_9">২০০৪</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input id="option_10" name="answerA" value="1" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_10">২০০৫</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input id="option_11" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_11">২০০৬</label>
                                </div>

                                <div class="custom-control custom-radio">
                                  <input id="option_12" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_12">২০০৭</label>
                                </div>
                            </div>  <!-- End d-block my-3 -->




                             <div class="question-block" id="question3">

                              <h2 class="question mb-3">
                                      ৪) শামীম হাসান সরকার অভিনীত দেশের প্রথম ফেসবুকভিত্তিক নাটক কোনটি?
                              </h2>  
                                <div class="custom-control custom-radio">
                                  <input id="option_13" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_13">জার্নি বাই বাস</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input id="option_14" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_14">ত্রিকোণমিতি</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input id="option_15" name="answerA" value="1" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_15">রাস্তা</label>
                                </div>

                                <div class="custom-control custom-radio">
                                  <input id="option_16" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_16">নেটওয়ার্ক বিজি</label>
                                </div>
                            </div>  <!-- End d-block my-3 -->






                             <div class="question-block" id="question4">

                              <h2 class="question mb-3">
                                      ৫) সোলাইমান সুখনের প্রথম সিনেমা কোনটি?
                              </h2>  
                                <div class="custom-control custom-radio">
                                  <input id="option_17" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_17">নয়নের আলো</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input id="option_18" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_18">মাতৃভূমি</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input id="option_19" name="answerA" value="1" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_19">মিস্টার বাংলাদেশ</label>
                                </div>

                                <div class="custom-control custom-radio">
                                  <input id="option_20" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_20">স্বাধীনতা</label>
                                </div>
                            </div>  <!-- End d-block my-3 -->


                             <div class="question-block" id="question5">

                              <h2 class="question mb-3">
                                     ৬) মিস্টার বাংলাদেশ’র খল চরিত্রে অভিনয় করেছেন কে? 
                              </h2>  
                                <div class="custom-control custom-radio">
                                  <input id="option_21" name="answerA" value="1" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_21">টাইগার রবি</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input id="option_22" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_22">মিসা সওদাগর</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input id="option_23" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_23">শাহারীয়ার সজীব</label>
                                </div>

                                <div class="custom-control custom-radio">
                                  <input id="option_24" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_24">তাসকিন আহমেদ</label>
                                </div>
                            </div>  <!-- End d-block my-3 -->


                             <div class="question-block" id="question6">

                              <h2 class="question mb-3">
                                      ৭) মিস্টার বাংলাদেশ’র প্রথম পোস্টারে কোন কবির কবিতা দেখা যায়?
                              </h2>  
                                <div class="custom-control custom-radio">
                                  <input id="option_25" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_25">রবীন্দ্রনাথ ঠাকুর</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input id="option_26" name="answerA" value="1" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_26">কাজী নজরুল ইসলাম</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input id="option_27" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_27">শামসুর রাহমান</label>
                                </div>

                                <div class="custom-control custom-radio">
                                  <input id="option_28" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_28">বেগম রোকেয়া</label>
                                </div>
                            </div>  <!-- End d-block my-3 -->



                            <div class="question-block" id="question7">

                              <h2 class="question mb-3">
                                       ৮) বীরশ্রেষ্ঠ মতিউর রহমানকে নিয়ে নির্মিত প্রথম পূর্ণদৈর্ঘ্য চলচ্চিত্র কোনটি?
                              </h2>  
                                <div class="custom-control custom-radio">
                                  <input id="option_29" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_29">মতিউরের একাত্তর</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input id="option_30" name="answerA" value="1" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_30">অস্তিতে আমার দেশ</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input id="option_31" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_31">একাত্তরের রঙ পেন্সিল</label>
                                </div>

                                <div class="custom-control custom-radio">
                                  <input id="option_32" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_32">অগ্নিঝরা রাত</label>
                                </div>
                            </div>  <!-- End d-block my-3 -->




                            <div class="question-block" id="question8">

                              <h2 class="question mb-3">
                                       ৯) দেশের প্রথম খেলা ভিত্তিক সিনেমা কোনটি?
                              </h2>  
                                <div class="custom-control custom-radio">
                                  <input id="option_33" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_33">দৌ</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input id="option_34" name="answerA" value="1" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_34">জাগো</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input id="option_35" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_35">একাত্তরের রঙ পেন্সিল</label>
                                </div>

                                <div class="custom-control custom-radio">
                                  <input id="option_36" name="answerA" value="0" type="radio" class="custom-control-input" onchange="goToNextQuestion();" required>
                                  <label class="custom-control-label" for="option_36">অগ্নিঝরা রাত</label>
                                </div>
                            </div>  <!-- End d-block my-3 -->


                            <div class="question-block" id="question9">

                              <h2 class="question mb-3">
                                      ১০) আপনি ‘মিস্টার বাংলাদেশ’ হলে দেশের কোন সমস্যার সমাধান করতেন? (এক বাক্যে বাংলা/ইংরেজিতে লিখুন)
                              </h2>  
                                <div class="">
                                  <input type="text" class="form-control" name="feedback" id="feedback" 
                                 placeholder="Your feedback ... ">

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
    <script src="assets/js/jquery.validate.js"></script>
    <script src="assets/js/scripts.js"></script>

  </body>
</html>
