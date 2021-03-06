<?php
/**
 * Created by PhpStorm.
 * User: ckogler
 * Date: 06.06.2017
 * Time: 11:58
 */

namespace Web2PrintBlackbit;

class Barcode extends \Zend_Barcode_Object_Ean13 {

  # protected $_barThinWidth = 1.4;
  # protected $_barThickWidth = 5;

    protected function _drawText()
    {
        $this->_drawEan13Text();
    }

    protected function _validateText($value, $options = array())
    {
        return true;
      #  parent::_validateText($value, $options); // TODO: Change the autogenerated stub
    }

    public static function getImageData($options = []){

        if(!$options['text']){
            return false;
        }

        $self = new self();
      #  p_r($options);
        $self->setOptions($options);

        $code = \Zend_Barcode::draw($self, 'image', [], []);

        $dir = \PIMCORE_WEBSITE_VAR.'/barcodes/';
        \Pimcore\File::mkdir($dir);
        $filename = $dir.'/'.time().rand().'_code.png';
        imagepng($code,$filename);
        $content = file_get_contents($filename);

        unlink($filename);
        return $content;
    }
}