<?php

namespace ImagePhp\Entity;

use ImagePhp\Entity;
use \Exception;

class PictureConfiguration 
{


    private $width;
    private $height;
    private $thumb;
    private $thumb_width;
    private $thumb_height;
    private $water_mark;
    private $transparency;
    private $square;
    private $square_width;
    private $square_height;
    private $automatic_resize;
    private $url;
    private $dir;
    private $dir_image_default;
    private $url_image_default;
    private $has_sub_folder;


    /**
     * Construct
     */
    public function __construct($conf_picture){

   
        $this->setWidth($conf_picture['width']);      
        $this->setHeight($conf_picture['height']);      
        $this->setThumb($conf_picture['thumb']);      
        $this->setThumbWidth($conf_picture['thumb_width']);      
        $this->setThumbHeight($conf_picture['thumb_height']);      
        $this->setWaterMark($conf_picture['water_mark']);      
        $this->setTransparency($conf_picture['transparency']);      
        $this->setSquare($conf_picture['square']);      
        $this->setSquareWidth($conf_picture['square_width']);      
        $this->setSquareHeight($conf_picture['square_height']); 
        $this->setUrl($conf_picture['url']);  
        $this->setDir($conf_picture['dir']); 
        $this->setDirImageDefault($conf_picture['dir_image_default']); 
        $this->setUrlImageDefault($conf_picture['url_image_default']); 
        $this->setAutomaticResize($conf_picture['automatic_resize']);
        $this->setHasSubFolder(isset($conf_picture['has_sub_folder']) ? $conf_picture['has_sub_folder'] : false);  
    }

    
    /**
     * Set width configuration
     */
    public function setWidth($width){
        $this->width = $width;
    }
    
    /**
     * Set height configuration
     */
    public function setHeight($height){
        $this->height = $height;
    }
    
    /**
     * Set thumb configuration
     */
    public function setThumb($thumb){
        $this->thumb = $thumb;
    }
    
    /**
     * Set automatic_resize configuration
     */
    public function setAutomaticResize($automatic_resize){
        $this->automatic_resize = $automatic_resize;
    }
    
    /**
     * Set thumb_width configuration
     */
    public function setThumbWidth($thumb_width){
        $this->thumb_width = $thumb_width;
    }
    
    /**
     * Set thumb_height configuration
     */
    public function setThumbHeight($thumb_height){
        $this->thumb_height = $thumb_height;
    }
    
    /**
     * Set water_mark configuration
     */
    public function setWaterMark($water_mark){
        $this->water_mark = $water_mark;
    }
    
    /**
     * Set transparency configuration
     */
    public function setTransparency($transparency){
        $this->transparency = $transparency;
    }
    
    /**
     * Set square configuration
     */
    public function setSquare($square){
        $this->square = $square;
    }
    
    /**
     * Set square_width configuration
     */
    public function setSquareWidth($square_width){
        $this->square_width = $square_width;
    }
    
    /**
     * Set square_height configuration
     */
    public function setSquareHeight($square_height){
        $this->square_height = $square_height;
    }
    
    /**
     * Set url configuration
     */
    public function setUrl($url){
        $this->url = $url;
    }
    
    /**
     * Set dir configuration
     */
    public function setDir($dir){
        $this->dir = $dir;
    }

    /**
     * Set dir_image_default configuration
     */
    public function setDirImageDefault($dir_image_default){
        $this->dir_image_default = $dir_image_default;
    }
    /**
     * Set url_image_default configuration
     */
    public function setUrlImageDefault($url_image_default){
        $this->url_image_default = $url_image_default;
    }

    /**
     * Set has_sub_folder configuration
     */
    public function setHasSubFolder($has_sub_folder){
        $this->has_sub_folder = $has_sub_folder;
    }

    /**
     * Get width configuration
     */
    public function getWidth(){
        return $this->width;
    }
    
    /**
     * Get height configuration
     */
    public function getHeight(){
        return $this->height;
    }
    
    /**
     * Get thumb configuration
     */
    public function getThumb(){
        return $this->thumb;
    }
    
    /**
     * Get automatic_resize configuration
     */
    public function getAutomaticResize(){
        return $this->automatic_resize;
    }
    
    /**
     * Get thumb_width configuration
     */
    public function getThumbWidth(){
        return $this->thumb_width;
    }
    
    /**
     * Get thumb_height configuration
     */
    public function getThumbHeight(){
        return $this->thumb_height;
    }
    
    /**
     * Get water_mark configuration
     */
    public function getWaterMark(){
        return $this->water_mark;
    }
    
    /**
     * Get transparency configuration
     */
    public function getTransparency(){
        return $this->transparency;
    }
    
    /**
     * Get square configuration
     */
    public function getSquare(){
        return $this->square;
    }
    
    /**
     * Get square_width configuration
     */
    public function getSquareWidth(){
        return $this->square_width;
    }
    
    /**
     * Get square_height configuration
     */
    public function getSquareHeight(){
        return $this->square_height;
    }
    
    /**
     * Get url configuration
     */
    public function getUrl(){
        return $this->url;
    }
    
    /**
     * Get urlImageDefault configuration
     */
    public function getUrlImageDefault(){
        return $this->url_image_default;
    }
    
    /**
     * Get url configuration
     */
    public function getDir(){
        return $this->dir;
    }

    /**
     * Set dir_image_default configuration
     */
    public function getDirImageDefault(){
        return $this->dir_image_default;
    }

    /**
     * Get has_sub_folder configuration
     */
    public function getHasSubFolder(){
        return $this->has_sub_folder;
    }
}