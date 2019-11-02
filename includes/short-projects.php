<!-- overlay -->
<div class="container-fluid p-0 m-0 bg_overlay_colour py-md-3">
    <!-- Row 1 -->
    <div class="row px-3 text-center py-3 px-0 px-md-5">
       
        <?php
        
            $projects = new Projects();
            $projects -> generateThumbnailProject()
        
        ?>    

    </div> <!-- /.row -->

</div>
<!-- /.bg_overlay_colour -->