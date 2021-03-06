<?php
/**
 * Copyright ©  All rights reserved.
 * See LICENSE for license details.
 */
declare(strict_types=1);

namespace Pay360\Payments\Model\Data;

use Pay360\Payments\Api\Data\SessionInterface;

class Session extends \Magento\Framework\Api\AbstractExtensibleObject implements SessionInterface
{

    /**
     * {@inheritdoc}
     */
    public function getSessionId()
    {
        return $this->_get(self::SESSION_ID);
    }

    /**
     * {@inheritdoc}
     */
    public function setSessionId($session_id)
    {
        return $this->setData(self::SESSION_ID, $session_id);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->_get(self::ID);
    }

    /**
     * {@inheritdoc}
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * {@inheritdoc}
     */
    public function getSessionDate()
    {
        return $this->_get(self::SESSION_DATE);
    }

    /**
     * {@inheritdoc}
     */
    public function setSessionDate($session_date)
    {
        return $this->setData(self::SESSION_DATE, $session_date);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderId()
    {
        return $this->_get(self::ORDER_ID);
    }

    /**
     * {@inheritdoc}
     */
    public function setOrderId($order_id)
    {
        return $this->setData(self::ORDER_ID, $order_id);
    }

    /**
     * {@inheritdoc}
     */
    public function getLastModified()
    {
        return $this->_get(self::LAST_MODIFIED);
    }

    /**
     * {@inheritdoc}
     */
    public function setLastModified($last_modified)
    {
        return $this->setData(self::LAST_MODIFIED, $last_modified);
    }

    /**
     * {@inheritdoc}
     */
    public function getStatus()
    {
        return $this->_get(self::STATUS);
    }

    /**
     * {@inheritdoc}
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function setExtensionAttributes(
        \Pay360\Payments\Api\Data\SessionExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
