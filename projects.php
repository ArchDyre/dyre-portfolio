<?php

    // Includes:
    // EXAMPLE: ` include "file.php"; `

?>



    <!-- header => include -->
    <?php include "includes/header.php"; ?>
    
    <!-- nav-bar => include -->
    <?php include "includes/nav.php"; ?>
    

     <div class="container-fluid bg_image mx-0 px-0 py-5">
        
        <div class="row h-100">
            
            <div class="col-0 col-md-1 col-lg-2"></div> <!-- /.col -->
            
            
            <div class="col-12 col-md bg-light p-0 p-md-0 mb-md-0 rounded">
               
                   <?php
                            
                    if(isset($_GET['project'])){
                        
                        // Call method for long posts
                        
                        $projects = new Projects();
                        
                        $projects -> generateDetailedProject();

                    }elseif(isset($_GET['error'])){
                          
                        if($_GET['error'] == 'true'){

                            echo "<div class='alert alert-danger text-center h5 m-0 p-0 p-md-5'><strong class='h1'>An error has occured.</strong><br><br> This website portfolio is curently not available.. <br> Sorry for the inconvenience caused. <br> Contact me at <a href='mailto:rohan@rohandyre.co.za'>rohan@rohandyre.co.za </a>if you have any questions!</div>";

                        }

                    }else{

                        include_once('includes/short-projects.php');

                    }
                
                    // Error Checking
                    


                    ?>
                   
                   
                   
               

            </div> <!-- /.col -->
            
            
            <div class="col-0 col-md-1 col-lg-2"></div> <!-- /.col -->
            
        </div>
        
    </div>
    <!-- /.container-fluid -->   

    
    
    <!-- footer => include -->
    <?php include "includes/footer.php"; ?>