<?php 
//fixes installation issue 
class xyx {

    public function boot()
    {
        Schema::defaultStringLength(191);
    }

}    
