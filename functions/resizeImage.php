<?php 
include 'WideImage/WideImage.php';
function resizeImage($image, $width, $height, $quality)
{
  $originalImage = WideImage::load($image);
  $newImage = $image->resize($width, $height);
  return $newImage->save($newImage, $quality);
 
}