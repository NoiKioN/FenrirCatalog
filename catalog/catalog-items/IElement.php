<?php
namespace Interfaces;

/**
 * The Element interface is the base of all elements created in the catalog.
 * @author NoiKioN
 */
interface IElement {
    public function getName();
    public function getDescription();
    public function getImage();
    public function getCategory();
}
