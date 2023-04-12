<?php
/**
 * Recipe class file
 *
 * PHP Version 5.2
 *
 * @category Recipe
 * @package  Recipe
 * @author   Lorna Jane Mitchell <lorna@ibuildings.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/recipes
 */

/**
 * Validateur class
 *
 * The class holding the root Recipe class definition
 *
 * @category Validateur
 * @package  Validateur
 * @author   Lorna Jane Mitchell <lorna@ibuildings.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/recipes/recipe
 */

namespace app;

class Validateur
{
    /**
     * Get the ingredients
     *
     * This function calls a static fetching method against the Ingredient class
     * and returns everything matching this recipe ID
     *
     * @return array An array of Ingredient objects
     */
    public function check($input)
    {
        if (strlen($input) < 2) {
            return false;
        } else {
            return true;
        }
    }
}