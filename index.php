<?php

use claviska\SimpleImage;

include './claviska-SimpleImage/SimpleImage.php';

class ThumbNailer extends SimpleImage{
    /**
     * Generates thumbnail for PNG,JPG,GIF,WEBP FORMATS
     * Returns true if thumbnail is created
     *
     * @param string $source - path to the source file  
     * @param string $destination - destination path along with file name
     * @param integer $width - width of the thumbnail image
     * @param integer $height - height of the thumbnail image
     * @return bool
     */
    public function generateThumbnail($source,$destination,$width=300,$height=300){
        try{
            $this->fromFile($source)
            ->thumbnail($width, $height, "center")
            ->toFile($destination); 
            return true; 
        }
        catch(Exception $e){
            return false;
        }
 
    }
}
// USAGE
$tn=new ThumbNailer();
echo $tn->generateThumbnail('./source-images/A-PNG-IMAGE.png','./thumbnail-images/png.png'); // true or false
echo $tn->generateThumbnail('./source-images/A-JPG-IMAGE.jpg','./thumbnail-images/jpg.jpg'); // true or false
echo $tn->generateThumbnail('./source-images/A-GIF-IMAGE.gif','./thumbnail-images/gif.gif'); // true or false



