<?php 
//Strategy pattern- defines a family of algorithmns, encapsulates each one and makes them interchangable

interface Logger {
    public function log($data);
}

class LogToFile implements Logger{
    public function log($data){
        echo "Data is Logged to file";
    }
}

class LogToDatabase implements Logger{
    public function log($data){
        echo "Data is Logged to database";
    }
}

class LogToXWebService implements Logger{
    public function log($data){
        echo "Data is Logged to Web Service";
    }
}


class App {
    public function log($data, Logger $logger = null){ //if nothing is set, add null here
        //HARDCODED TO LogToFile
        // $logger = new LogToFile;

        //if nothing is set use log to file
        $logger = $logger ? : new LogToFile;
         $logger->log($data);
    }
}

$app = new App;
//$app->log('add some information!!', new LogToDatabase);

//if nothing is set
$app->log('add some information!!');