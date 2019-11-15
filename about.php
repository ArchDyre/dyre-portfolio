<?php

    // Includes:
    // EXAMPLE: ` include "file.php"; `

?>



    <!-- header => include -->
    <?php include "includes/header.php"; ?>
    
    <!-- nav-bar => include -->
    <?php include "includes/nav.php"; ?>
    

     <div class="container-fluid bg_image py-5 py-md-5">
        
        <div class="row">
            
            <div class="col-0 col-md-0 col-lg-2"></div> <!-- /.col -->
            
            
            <div class="col-12 col-md bg-light p-0 rounded">
               
               <!-- overlay -->
               <div class="m-0 p-0 bg_overlay_colour py-2">
                   
                   <div class="container-fluid py-3 px-0 pt-md-5"> 
           
                        <div class="row pt-5 pb-4">

                            <div class="col text-center">

                                <div class="h1">ABOUT</div>

                                <!-- START: border bottom title -->
                                <div class="container-fluid text-center w-25 pb-3">
                                   <div class="border-bottom border-dark thick_bottom_bar"></div>
                                </div>    
                                <!-- /.container-fluid :: border-bottom-->

                            </div> 
                            <!-- /.col -->

                        </div> <!-- /.row -->
                        <!-- /. ABOUT - Title -->


                        <div class="row">

                           <div class="col-0 col-md-1 col-lg-2"></div> <!-- /.col -->

                            <div class="col-12 col-md">

                                <p class="text-center text-md-left text-lg-left">

                                    Through vigorous studying of website development courses on Udemy, he can successfully hold his own in both front end and his favoured back end development. Committed to continuously improve his knowledge of Best Practices, Object Oriented Programing, Cyber Security and Advanced Solutions.
                                </p>
                                <!-- /.p -->
                                
                                <p class="text-center text-md-left text-lg-left">
                                    
                                    With proven experience in developing custom consumer-focused web sites using HTML, CSS, JavaScript,  JQuery, MySQL and PHP7, he is up to any challenge.
                                    
                                </p>
                                <!-- /.p -->

                            </div> 
                            <!-- /.col -->

                            <div class="col-0 col-md-1 col-lg-2"></div> <!-- /.col -->

                        </div><!-- /.row -->
                        <!-- /. ABOUT - Content -->

                </div>
                <!-- /.container-fluid ABOUT -->


                <div class="container-fluid px-0 pt-md-2">
                    <div class="row pt-3 pb-4">

                        <div class="col text-center">

                            <div class="h1">SKILLS</div>

                            <!-- START: border bottom title -->
                            <div class="container-fluid text-center w-25 pb-3">
                               <div class="border-bottom border-dark thick_bottom_bar"></div>
                            </div>    
                            <!-- /.container-fluid :: border-bottom-->

                        </div> 
                        <!-- /.col -->

                    </div> <!-- /.row -->
                    <!-- /. SKILLS - Title -->



                    <div class="row">

                        <div class="col-0 col-md-1 col-lg-3"></div> <!-- /.col -->

                        <div class="col-12 col-md-12 col-lg mb-4">

                            <?php
                            
                            // You can enter custom colours.
                            // Format -> "#235487"
                            // $titleColour == Html, Css, JQuery => Titles area
                            // $valueColour == Progress Bar showing percentage area
                            $titleColour = "";
                            $valueColour = "";

                            // Instantiates  the `SkillBarsProduct() class
                            $skillsBarProduct = new SkillBarsProduct();

                            // Calls the method to generate the `progress bars` based on input colours and `database entries`
                            $skillsBarProduct -> generateSkillBars($titleColour,$valueColour);

                            ?>

                        </div> <!-- /.col -->

                        <div class="col-0 col-md-1 col-lg-3"></div> <!-- /.col -->

                    </div><!-- /.row -->
                    <!-- /. SKILLS - Content -->
                 </div>
                 <!-- ./ SKILLS -->



                <div class="container-fluid px-0 mx-0">
                    <div class="row my-3 py-4">

                        <div class="col-0 col-md-1 col-lg-2"></div> <!-- /.col -->

                        <div class="col-12 col-md py-4 my-0">

                            <div class="jumbotron my-auto">

                                <h1 class="display-4">

                                    <div class="col text-center">

                                        <div class="h1">OTHER</div>

                                        <hr class="mb-4">

                                    </div> 
                                    <!-- /.col -->

                                </h1>

                                <div class="row">

                                    <div class="col-12 col-md py-3">

                                        <div class="lead text-center">

                                            <img src="images/icons/ps_64x64.png">
                                            <p>Photoshop</p>

                                        </div>

                                    </div> <!-- /.col -->

                                    <div class="col-12 col-md py-3">

                                        <div class="lead text-center">

                                            <img src="images/icons/wordpress-logo-64x64.png">
                                            <p>Wordpress</p>

                                        </div>

                                    </div> <!-- /.col -->

                                    <div class="col-12 col-md py-3">

                                        <div class="lead text-center">

                                            <img src="images/icons/iconmonstr-github-1-64.png">
                                            <p>Git</p>

                                        </div>

                                    </div> <!-- /.col -->

                                    <div class="col-12 col-md py-3">

                                        <div class="lead text-center">

                                            <img src="images/icons/bootstrap-logo-64x64.png">
                                            <p>Bootstrap</p>

                                        </div>

                                    </div> <!-- /.col -->

                                    <div class="col-12 col-md py-3">

                                        <div class="lead text-center">

                                            <img src="images/icons/Vagrant-64x72.png">
                                            <p>Vagrant</p>

                                        </div>

                                    </div> <!-- /.col -->


                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.jumbotron -->

                        </div> <!-- /.col -->

                        <div class="col-0 col-md-1 col-lg-2"></div> <!-- /.col -->

                    </div><!-- /.row -->
                    <!-- /.jumbotron - `other skills` -->
                </div>
                <!-- /. OTHER -->
                   
               </div>
               <!-- /. bg overlay -->

            </div> <!-- /.col -->
            
            
            <div class="col-0 col-md-0 col-lg-2"></div> <!-- /.col -->
            
        </div>
        <!-- /.bg_overlay_colour -->
        
    </div>
    <!-- /.container-fluid -->   

    
    
    <!-- footer => include -->
    <?php include "includes/footer.php"; ?>