<?php

    // Includes:
    // EXAMPLE: ` include "file.php"; `

?>



    <!-- header => include -->
    <?php include "includes/header.php"; ?>
    
    <!-- nav-bar => include -->
    <?php include "includes/nav.php"; ?>
    

    <div class="container-fluid bg_image mx-0 px-0 py-5 h-100">
        
        <div class="row h-100">
            
            <div class="col-0 col-md-2"></div> <!-- /.col -->
            
            
            <div class="col-12 col-md bg-light p-0 p-md-0 rounded">
               
               <!-- overlay -->
               <div class="container-fluid p-0 m-0 bg_overlay_colour">
                   
                   <div class="row h-100">

                        <div class="col-0 col-md-1 col-lg-2"></div> <!-- /.col -->

                        <div class="col-12 col-md my-auto py-3">
                            
                            <div class="row text-center">
                                
                                <!-- Profile Picture -->
                                <div class="col-12 my-md-auto">
                                <a href="index.php"><img class="sm_profile_img rounded-circle" src="images/rohan-profile.png"></a>
                                </div> <!-- /.col -->
                                                        
                            </div>
                            <!-- /.row -->
                            
                            <div class="row text-center py-2 py-md-4 my-2">
                                
                                <!-- Name + Occupation Details -->
                                <div class="col-12 my-auto">
                                   
                                   
                                    <div class="h1 font-weight-bold">Rohan Bezuidenhout</div>
                                    <div class="h4 text-monospace text_violet">Website Developer</div>
                                    
                                    <!-- Social icons -->
                                    <div class="col-12 py-1 py-md-3">
                                        <a href="https://github.com/ArchDyre"><img class="icons" src="images/icons/iconmonstr-github-1-64.png"></a>
                                        <a href="https://www.facebook.com/rohandyre/timeline"><img class="icons" src="images/icons/iconmonstr-facebook-4-64.png"></a>
                                        <a href="https://www.linkedin.com/in/rohan-bezuidenhout-a47a92151/"><img class="icons" src="images/icons/iconmonstr-linkedin-4-64.png"></a>
                                        <a href="mailto:rohan@rohandyre.co.za"><img class="icons" src="images/icons/iconmonstr-email-10-64.png"></a>
                                    </div>
                                    <!-- /.container -->
                                    
                                </div> <!-- /.col -->
                                
                            </div>
                            <!-- /.row -->
                            

                                <div class="container text-center">

                                    <p class="h5">A customer centric and solution-driven website developer focused on finding solutions to challenges and maintaining high customer satisfaction.</p>

                                </div>
                                <!-- /.container -->

                        </div> <!-- /.col -->

                        <div class="col-0 col-md-1 col-lg-2"></div> <!-- /.col -->


                    </div> <!-- /.row -->
                   
               </div>
               <!-- /.bg_overlay_colour -->

            </div> <!-- /.col -->
            
            
            <div class="col-0 col-md-2"></div> <!-- /.col -->
            
        </div>
        
    </div>
    <!-- /.container-fluid --> 

    
    
    <!-- footer => include -->
    <?php include "includes/footer.php"; ?>