<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ItemReminderStruct
{

    /**
     * @var int $reminderType
     */
    protected $reminderType = null;

    /**
     * @var int $reminderTime
     */
    protected $reminderTime = null;

    /**
     * @param int $reminderType
     * @param int $reminderTime
     */
    public function __construct($reminderType = null, $reminderTime = null)
    {
      $this->reminderType = $reminderType;
      $this->reminderTime = $reminderTime;
    }

    /**
     * @return int
     */
    public function getReminderType()
    {
      return $this->reminderType;
    }

    /**
     * @param int $reminderType
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemReminderStruct
     */
    public function setReminderType($reminderType)
    {
      $this->reminderType = $reminderType;
      return $this;
    }

    /**
     * @return int
     */
    public function getReminderTime()
    {
      return $this->reminderTime;
    }

    /**
     * @param int $reminderTime
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemReminderStruct
     */
    public function setReminderTime($reminderTime)
    {
      $this->reminderTime = $reminderTime;
      return $this;
    }

}
