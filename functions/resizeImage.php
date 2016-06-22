<?php 
include 'WideImage/WideImage.php';
//function resizes according to the width and height as specified
//it also changes the quality of the image
function doresize($image, $width, $height, $quality)
{
  //loads the image
  $originalImage = WideImage::load($image);
  //resizes the image
  $newImage = $image->resize($width, $height);
  //changes the quality and returns the file
  return $newImage->save($newImage, $quality);
 
}