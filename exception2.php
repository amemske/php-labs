<?php

class Video {


}

class User {
     public function download (Video $video){
        if(! $this->subscribed){
            throw new Exception('You have to be subscribed to download a video');
        }

     }
     public function subscribed(){
        return false;
     }
}

class UserDownloadsController {
    public function show(){
        (new User)->download(new Video);
    }
}