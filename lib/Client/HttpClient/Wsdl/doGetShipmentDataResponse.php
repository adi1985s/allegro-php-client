<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetShipmentDataResponse
{

    /**
     * @var ArrayOfShipmentdatastruct $shipmentDataList
     */
    protected $shipmentDataList = null;

    /**
     * @var int $localVersion
     */
    protected $localVersion = null;

    /**
     * @param ArrayOfShipmentdatastruct $shipmentDataList
     * @param int $localVersion
     */
    public function __construct($shipmentDataList = null, $localVersion = null)
    {
      $this->shipmentDataList = $shipmentDataList;
      $this->localVersion = $localVersion;
    }

    /**
     * @return ArrayOfShipmentdatastruct
     */
    public function getShipmentDataList()
    {
      return $this->shipmentDataList;
    }

    /**
     * @param ArrayOfShipmentdatastruct $shipmentDataList
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetShipmentDataResponse
     */
    public function setShipmentDataList($shipmentDataList)
    {
      $this->shipmentDataList = $shipmentDataList;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocalVersion()
    {
      return $this->localVersion;
    }

    /**
     * @param int $localVersion
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetShipmentDataResponse
     */
    public function setLocalVersion($localVersion)
    {
      $this->localVersion = $localVersion;
      return $this;
    }

}
