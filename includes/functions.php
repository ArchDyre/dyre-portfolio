<?php

include_once("includes/db-config.php");

class DbQueries extends DbConfig{
    
    public $cleanedVar;
    
    public function selectAll($dbTable){
        
        // Call connection class
        $this -> dbConnect();

        $this -> query = "SELECT * FROM `{$dbTable}`";
        
        
        $this -> results = mysqli_query($this -> link,$this -> query);
        
        if( !$this -> results){
            
            die ("QUERY FAILURE </br> " . mysqli_error($this -> link));
        }
        
        
    }
    /* ./ selectAll() */
    
    
    public function selectAllWhere($dbTable,$searchId){
        
        // Call connection class
        $this -> dbConnect();
        
        //Clean Variables
        $cleanedDbTable = $this->varValidation($dbTable);
        $cleanedSearchId = $this->varValidation($searchId);
        
        // Create Query
        $this -> query = "SELECT * FROM `{$cleanedDbTable}` WHERE {$cleanedDbTable}_id = {$cleanedSearchId}";
        
        $this -> results = mysqli_query($this -> link,$this -> query);
        
        if( !$this -> results){
            
            die ("QUERY FAILURE </br> " . mysqli_error($this -> link));
        }

        
    }
    /* ./ selectWhere() */
    
    public function varValidation($dirty){
        
        // Call connection class
        $this -> dbConnect();
        
        $cleanedVariable =  mysqli_real_escape_string($this->link,$dirty);
        
        return $cleanedVariable;
        
        
        
    }
    /* ./ varValidation() */
    
}
/* ./Database */

class SkillBarsProduct{
    
    private $titleColour = "#663399";
    private $valueColour = "#9966cc";
    public $dbTableName = "skill-bars";
    
    public function generateSkillBars($titleColour,$valueColour){
        
        // Instantiate class
        $dbQueries = new DbQueries();
        
        $cleanedDbTable = $dbQueries -> varValidation($this -> dbTableName);
        
        // Call Query method
        $dbQueries -> selectAll($cleanedDbTable);
        
        if($titleColour != "" && !empty($titleColour)){
            
            $this -> titleColour = $titleColour; 
            
        }
        
        if($valueColour != "" && !empty($valueColour)){
            
            $this -> valueColour = $valueColour;
            
        }
        
        $result = $dbQueries -> results;

        // create progress bars for skills
        while($row = mysqli_fetch_assoc($result)){
            
            
            $widthValue = intval($row['skill_value']) - 15;
            
            echo "<div class='progress my-3' style='height: 35px;'>";
                    // Title
                    echo "<div class='progress-bar flex font-weight-bold' role='progressbar' style='width: 20%; background-color: {$this -> titleColour};' aria-valuenow='20%' aria-valuemin='20' aria-valuemax='100'>
                        {$row['skill_title']}
                    </div>";
                    
                    // Progress Bar
                    echo "<div class='progress-bar text-center text-light font-weight-bolder' role='progressbar' style='width: {$widthValue}%; background-color: {$this -> valueColour};' aria-valuenow='{$row['skill_value']}%' aria-valuemin='{$row['skill_value']}%' aria-valuemax='100%'> {$row['skill_value']}% </div>";
            echo "</div>";
            
        }
        
        $dbQueries -> dbDisconnect();

    }
    
    
}
/* ./ SkillBars */

class Projects{
    
    protected $projectsDbTableName = "projects";
    private $projectTitle;
    private $projectDescription;
    private $projectFunctions;
    private $projectLanguages;
    private $projectFutureUpdates;
    private $projectUrl;
    private $projectType;
    
    
    // Will be used at a later time
    function generateThumbnailProject(){
        /*
        // Instantiate class
        $dbQueries = new DbQueries();
        
        $cleanedDbTable = $dbQueries -> varValidation($this -> dbTableName);
        
        // Call Query method
        $dbQueries -> selectAll($cleanedDbTable);
        
        // Assign results to variable
        $results = $dbQueries -> results;
        
        while($row = mysqli_fetch_assoc($results)){
            
            
            
        }
        
        // Disconnect Database
        $dbQueries -> dbDisconnect();
        */
        
    }
    /* ./ generateThumbnailProject() */
    
    
    // This method generates a detailed page with all project spesifications
    public function generateDetailedProject(){
        
            if(isset($_GET['project'])){
                
                
                $projectId = $_GET['project'];
                
                
            }else{
                
                return "Sorry, This project is current being not available.. )";
                
            }
        
            // Instantiate class
            $dbQueries = new DbQueries();

            // Call Query method
            $dbQueries -> selectAllWhere($this -> projectsDbTableName,$projectId);

            // Assign results to variable
            $results = $dbQueries -> results;
        
        
            // Fetch array results from query
            $row = mysqli_fetch_assoc($results);
        
            if(!isset($row['project_title']) && !isset($row['project_description'])){
                
                $errorMessage = "<div alert alert-danger>YOU FAILED ME!!!!</div> <br> Failed";
                header ("Location: projects.php?error=true");
                
            }
            
            $this -> projectTitle = $row['project_title'];
            $this -> projectDescription = $row['project_description'];
            $this -> projectFunctions = $row['project_functions'];
            $this -> projectLanguages = $row['project_languages'];
            $this -> projectFutureUpdates = $row['project_future_updates'];
            $this -> projectUrl = $row['project_url'];
            $this -> projectType = $row['project_type'];
        
            echo "<!-- overlay -->
               <div class='container-fluid p-0 m-0 bg_overlay_colour py-md-3'>";    
        
            echo "<div class='row h-100'>";

            echo "<div class='col-0 col-md-3'></div>"; 
            /* /.col */

            echo "<div class='col-12 col-md my-auto'>";
                
            echo "<div class='card text-center'>";

            echo "<div class='card-header'>";

            echo "</div>";

            echo "<div class='card-body'>";

            echo "<h5 class='card-title font-weight-bold h3'>{$this -> projectTitle}</h5>";

            echo "<div class='text-body text-left'>";

            echo "<div class='card-title text-center'>What is it?</div>";

            echo "<p class='text-center'>{$this -> projectDescription}</p>";

            echo "<div class='card-title'>Functions</div>";

            echo "<ul>";

            echo $this -> projectFunctions;

            echo "</ul>";
            /* /.list */

            echo "<div class='card-title'>Languages used</div>";

            echo "<ul>";

            echo $this -> projectLanguages;

            echo "</ul>";
            /* /.list */

            echo "<div class='card-title'>Planned Updates/Improvements</div>";

            echo "<ul>";

            echo $this -> projectFutureUpdates;

            echo "</ul>";
            /* /.list */

            echo "</div>";

            echo "<a href='{$this -> projectUrl}' class='btn btn-primary'>Visit</a>";

            echo "</div>";

            echo "<div class='card-footer text-muted'>";
        
            echo $this -> projectType;
        
            echo "</div>";

            echo "</div>";
        
            echo "</div>"; 
            /* /.col */
        
            echo "<div class='col-0 col-md-3'></div>"; 
            /* /.col */
        
            echo "</div>"; 
            /* /.row */
        
            echo "</div>
               <!-- /.bg_overlay_colour -->";
        
    }
    
}
/* ./ class Projects() */

?>