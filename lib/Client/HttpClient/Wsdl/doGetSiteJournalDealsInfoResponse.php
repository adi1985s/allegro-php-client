<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetSiteJournalDealsInfoResponse
{

    /**
     * @var SiteJournalDealsInfoStruct $siteJournalDealsInfo
     */
    protected $siteJournalDealsInfo = null;

    /**
     * @param SiteJournalDealsInfoStruct $siteJournalDealsInfo
     */
    public function __construct($siteJournalDealsInfo = null)
    {
      $this->siteJournalDealsInfo = $siteJournalDealsInfo;
    }

    /**
     * @return SiteJournalDealsInfoStruct
     */
    public function getSiteJournalDealsInfo()
    {
      return $this->siteJournalDealsInfo;
    }

    /**
     * @param SiteJournalDealsInfoStruct $siteJournalDealsInfo
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetSiteJournalDealsInfoResponse
     */
    public function setSiteJournalDealsInfo($siteJournalDealsInfo)
    {
      $this->siteJournalDealsInfo = $siteJournalDealsInfo;
      return $this;
    }

}
