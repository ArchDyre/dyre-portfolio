<?php

class DbConfig{
    
    protected $hostname;
    protected $username;
    protected $password;
    protected $dbName;
    public $results;
    protected $query;
    public $link;
    
    function dbConnect(){
        
        // Initialise DB variables
        $this -> hostname = "127.0.0.1";
        $this -> username = "root";
        $this -> password = "";
        $this -> dbName = "portfolio";
        
        // Create DB connection
        $this -> link = mysqli_connect($this -> hostname, $this -> username, $this -> password, $this -> dbName);
        
        // Check for errors with the connection
        if ($this -> link === false){
            
            die ("Database Connection error: </br>" . mysqli_error($this -> link));
            
        }
        
    }
    /* ./ __dbConnect */
    
    
    function dbDisconnect(){
        
        $this -> hostname = NULL;
        $this -> username = NULL;
        $this -> password = NULL;
        $this -> dbName = NULL;
        $this -> results = NULL;
        $this -> query = NULL;
        $this -> link = NULL;
                
    }
    
}


?>