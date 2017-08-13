<?php
namespace Categories;

/**
 * The Item class is the base of all items added to the catalog.
 *
 * @author NoiKioN
 */
class Item implements \Interfaces\IElement{
    private $name;
    private $description;
    private $image;
    private $category;
    private $obtain;
    
    /**
     * Default Constructor of an Item added to the catalog.
     * 
     * @param type $name The name of the Item.
     * @param type $description The description of the Item.
     * @param type $image The image affiliated with the Item.
     * @param type $category The category of the Item.
     * @param type $obtain The way to obtain the Item.
     */
    public function __construct($name, $description, $image, $category, $obtain) {
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->category = $category;
        $this->obtain = $obtain;
    }

    /**
     * Returns the name of the Item.
     * 
     * @return string The name of the Item.
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Returns the description of the Item.
     * 
     * @return string The description of the Item.
     */
    public function getDescription() {
        return $this->description;
    }
    
    /**
     * Returns the image affiliated with the Item.
     * 
     * @return string The Image affiliated with the Item.
     */
    public function getImage() {
        return $this->image;
    }
    
    /**
     * Returns the category of the item.
     * 
     * @return string The category of the Item.
     */
    public function getCategory() {
        return $this->category;
    }
    
    /**
     * Returns the way to obtain the item.
     * 
     * @return string The way to obtain the item.
     */
    public function getObtain(){
        return $this->obtain;
    }
}
