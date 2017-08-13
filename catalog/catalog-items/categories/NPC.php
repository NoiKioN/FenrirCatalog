<?php
namespace Categories;

/**
 * The NPC class is the base of all NPCs added to the catalog.
 * 
 * @author NoiKioN
 */
abstract class NPC implements \Interfaces\IElement{
    private $name;
    private $description;
    private $image;
    private $category;
    private $story;
    
    /**
     * Default Constructor of an NPC added to the catalog.
     * 
     * @param string $name          The name of the NPC.
     * @param string $description   The description of the NPC.
     * @param string $image         The image of the NPC.
     * @param string $category      The category of the NPC.
     * @param string $story         The story affiliated with the NPC.
     */
    function __construct($name, $description, $image, $category, $story) {
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->category = $category;
        $this->story = $story;
    }

    /**
     * Returns the name of the NPC.
     * 
     * @return string The name of the NPC.
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Returns the description of the NPC.
     * 
     * @return string The description of the NPC.
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Returns the image affiliated with the NPC.
     * 
     * @return string The image of the NPC.
     */
    public function getImage() {
        return $this->image;
    }
    
    /**
     * Returns the category of the NPC.
     * 
     * @return string The category of the NPC.
     */
    public function getCategory() {
        return $this->category;
    }
    
    /**
     * Returns the story affiliated with the NPC.
     * 
     * @return string The story affiliated with the NPC.
     */
    public function getStory(){
        return $this->story;
    }
}