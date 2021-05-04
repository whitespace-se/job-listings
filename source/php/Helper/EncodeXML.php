<?php


namespace JobListings\Helper;

/**
 * Class Encoode
 * @package JobListings\Helper
 */
class EncodeXML
{

  public $encodedData;

  public function __construct($data, $assoc = true)
  {
    
    $this->encodedData = (object) $this->encodeData($data, $assoc);

  }

  /**
   * Decode xml to object
   * @return array containg xml data
   */
  private function encodeData($data, $assoc) {

    $xml = simplexml_load_string($data);
            
    $json = json_encode($xml);

    $encodedData = json_decode($json, $assoc );
    return $encodedData;

  }
}