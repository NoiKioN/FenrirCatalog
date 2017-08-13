<?php
namespace Categories;

/**
 * The Crafter class is an extension of the NPC class with an addition of a 
 * crafter's traits and acts as a base of all crafter's added to the catalog.
 * 
 * @author NoiKioN
 */
class Crafter extends NPC{
    private $craftable;
    
    /**
     * The default constructor of a Crafter added to the catalog.
     * 
     * @param string $name          The name of the NPC.
     * @param string $description   The description of the NPC.
     * @param string $image         The image of the NPC.
     * @param string $category      The category of the NPC.
     * @param string $story         The story affiliated with the NPC.
     * @param string $craftable     The list of craftable items by the NPC.
     */
    function __construct($name, $description, $image, $category, $story, $craftable) {
        parent::__construct($name, $description, $image, $category, $story);
        $this->craftable = $craftable;
    }

    /**
     * Returns the list of the craftable items by this NPC.
     * 
     * @return string The list of craftable items.
     */
    public function getCraftable(){
        return $this->craftable;
    }
}
