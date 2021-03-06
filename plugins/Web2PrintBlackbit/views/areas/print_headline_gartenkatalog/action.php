<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    EcommerceFramework
 * @copyright  Copyright (c) 2009-2016 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */


class Document_Tag_Area_Print_Headline_Gartenkatalog extends \Pimcore\Model\Document\Tag\Area\AbstractArea {

    public function getBrickHtmlTagOpen($brick){
        return '';
    }

    /**
     * optional
     */
    public function getBrickHtmlTagClose($brick){
        return '';
    }
}