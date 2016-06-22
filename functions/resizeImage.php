<?php 
include 'WideImage/WideImage.php';
//function resizes according to the width and height as specified
//it also changes the quality of the image
function doresize($image, $width, $height, $quality)
{
  $originalImage = WideImage::load($image);
  $newImage = $image->resize($width, $height);
  return $newImage->save($newImage, $quality);
 
}