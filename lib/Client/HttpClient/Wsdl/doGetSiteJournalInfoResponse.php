<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetSiteJournalInfoResponse
{

    /**
     * @var SiteJournalInfo $siteJournalInfo
     */
    protected $siteJournalInfo = null;

    /**
     * @param SiteJournalInfo $siteJournalInfo
     */
    public function __construct($siteJournalInfo = null)
    {
      $this->siteJournalInfo = $siteJournalInfo;
    }

    /**
     * @return SiteJournalInfo
     */
    public function getSiteJournalInfo()
    {
      return $this->siteJournalInfo;
    }

    /**
     * @param SiteJournalInfo $siteJournalInfo
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetSiteJournalInfoResponse
     */
    public function setSiteJournalInfo($siteJournalInfo)
    {
      $this->siteJournalInfo = $siteJournalInfo;
      return $this;
    }

}
