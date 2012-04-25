<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4; */

/**
 * Row class for facets.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at http://www.apache.org/licenses/LICENSE-2.0 Unless required by
 * applicable law or agreed to in writing, software distributed under the
 * License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS
 * OF ANY KIND, either express or implied. See the License for the specific
 * language governing permissions and limitations under the License.
 *
 * @package omeka
 * @subpackage SolrSearch
 * @author Scholars' Lab
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache 2.0
 * @copyright 2010 The Board and Visitors of the University of Virginia
 * @link https://github.com/scholarslab/SolrSearch/
 *
 * PHP version 5
 */

class SolrSearchFacet extends Omeka_Record
{


    /**
     * The id of the parent element [integer].
     */
    public $element_id;

    /**
     * The name of the element [string].
     */
    public $name;

    /**
     * The id of the parent element set [integer].
     */
    public $element_set_id;

    /**
     * Facet status [boolean/tinyint].
     */
    public $is_facet;

    /**
     * Displayed status [boolean/tinyint].
     */
    public $is_displayed;

    /**
     * Sortable status [boolean/tinyint].
     */
    public $is_sortable;


    /**
     * Get the name of the parent element set.
     *
     * @return string $name The name of the element set.
     */
    public function getElementSetName()
    {
        $_elementSetTable = $this->getTable('ElementSet');
        return $_elementSetTable->find($this->element_set_id)->name;
    }

}
