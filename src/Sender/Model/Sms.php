<?php

namespace Sender\Model;

class Sms extends AbstractModel
{
    /**
     * @var string
     */
    protected $_type = 'sms';

    /**
     * @var []
     */
    protected $_receivers = [];

    /**
     * @var string
     */
    protected $_content = null;

    /**
     * @var int
     */
    protected $_time = null;

    /**
     * @return array
     */
    public function getReceivers()
    {
        return $this->_receivers;
    }

    /**
     * @param mixed $receivers
     */
    public function setReceivers(array $receivers = [])
    {
        $this->_receivers = $receivers;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->_content;
    }

    /**
     * @param string $message
     */
    public function setContent($message)
    {
        $this->_content = urlencode($message);
    }

    /**
     * @return int
     */
    public function getTime()
    {
        return $this->_time;
    }

    /**
     * @param int $time
     */
    public function setTime($time)
    {
        $this->_time = $time;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->_type;
    }
}
