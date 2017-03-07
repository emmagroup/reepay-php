<?php
/**
 * AdditionalCost
 *
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reepay API
 *
 * REST API to manage Reepay resources
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Reepay\Model;

use \ArrayAccess;

/**
 * AdditionalCost Class Doc Comment
 *
 * @category    Class
 * @package     Reepay
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AdditionalCost implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AdditionalCost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'invoice' => 'string',
        'state' => 'string',
        'subscription' => 'string',
        'handle' => 'string',
        'ordertext' => 'string',
        'quantity' => 'int',
        'amount' => 'int',
        'vat' => 'float',
        'created' => '\DateTime',
        'amount_incl_vat' => 'bool',
        'amount_vat' => 'int',
        'amount_ex_vat' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'invoice' => 'invoice',
        'state' => 'state',
        'subscription' => 'subscription',
        'handle' => 'handle',
        'ordertext' => 'ordertext',
        'quantity' => 'quantity',
        'amount' => 'amount',
        'vat' => 'vat',
        'created' => 'created',
        'amount_incl_vat' => 'amount_incl_vat',
        'amount_vat' => 'amount_vat',
        'amount_ex_vat' => 'amount_ex_vat'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'invoice' => 'setInvoice',
        'state' => 'setState',
        'subscription' => 'setSubscription',
        'handle' => 'setHandle',
        'ordertext' => 'setOrdertext',
        'quantity' => 'setQuantity',
        'amount' => 'setAmount',
        'vat' => 'setVat',
        'created' => 'setCreated',
        'amount_incl_vat' => 'setAmountInclVat',
        'amount_vat' => 'setAmountVat',
        'amount_ex_vat' => 'setAmountExVat'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'invoice' => 'getInvoice',
        'state' => 'getState',
        'subscription' => 'getSubscription',
        'handle' => 'getHandle',
        'ordertext' => 'getOrdertext',
        'quantity' => 'getQuantity',
        'amount' => 'getAmount',
        'vat' => 'getVat',
        'created' => 'getCreated',
        'amount_incl_vat' => 'getAmountInclVat',
        'amount_vat' => 'getAmountVat',
        'amount_ex_vat' => 'getAmountExVat'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const STATE_PENDING = 'pending';
    const STATE_TRANSFERRED = 'transferred';
    const STATE_CANCELLED = 'cancelled';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_TRANSFERRED,
            self::STATE_CANCELLED,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['ordertext'] = isset($data['ordertext']) ? $data['ordertext'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['amount_incl_vat'] = isset($data['amount_incl_vat']) ? $data['amount_incl_vat'] : null;
        $this->container['amount_vat'] = isset($data['amount_vat']) ? $data['amount_vat'] : null;
        $this->container['amount_ex_vat'] = isset($data['amount_ex_vat']) ? $data['amount_ex_vat'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = ["pending", "transferred", "cancelled"];
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of 'pending', 'transferred', 'cancelled'.";
        }

        if ($this->container['subscription'] === null) {
            $invalid_properties[] = "'subscription' can't be null";
        }
        if ($this->container['handle'] === null) {
            $invalid_properties[] = "'handle' can't be null";
        }
        if ($this->container['ordertext'] === null) {
            $invalid_properties[] = "'ordertext' can't be null";
        }
        if (!is_null($this->container['quantity']) && ($this->container['quantity'] < 1)) {
            $invalid_properties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
        }

        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] < 0)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['vat']) && ($this->container['vat'] > 1)) {
            $invalid_properties[] = "invalid value for 'vat', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['vat']) && ($this->container['vat'] < 0)) {
            $invalid_properties[] = "invalid value for 'vat', must be bigger than or equal to 0.";
        }

        if ($this->container['created'] === null) {
            $invalid_properties[] = "'created' can't be null";
        }
        if ($this->container['amount_incl_vat'] === null) {
            $invalid_properties[] = "'amount_incl_vat' can't be null";
        }
        if ($this->container['amount_vat'] === null) {
            $invalid_properties[] = "'amount_vat' can't be null";
        }
        if ($this->container['amount_ex_vat'] === null) {
            $invalid_properties[] = "'amount_ex_vat' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = ["pending", "transferred", "cancelled"];
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        if ($this->container['subscription'] === null) {
            return false;
        }
        if ($this->container['handle'] === null) {
            return false;
        }
        if ($this->container['ordertext'] === null) {
            return false;
        }
        if ($this->container['quantity'] < 1) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['amount'] < 0) {
            return false;
        }
        if ($this->container['vat'] > 1) {
            return false;
        }
        if ($this->container['vat'] < 0) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        if ($this->container['amount_incl_vat'] === null) {
            return false;
        }
        if ($this->container['amount_vat'] === null) {
            return false;
        }
        if ($this->container['amount_ex_vat'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets invoice
     * @return string
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     * @param string $invoice Invoice id for the invoice the additional cost has been assigned to
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state State of the additional cost, one of the following: `pending`, `transferred`, `cancelled`. A pending additonal cost has not yet been transferred to a invoice. Cancelled addtional costs have been cancelled manually.
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('pending', 'transferred', 'cancelled');
        if ((!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'pending', 'transferred', 'cancelled'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets subscription
     * @return string
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     * @param string $subscription Subscription handle
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets handle
     * @return string
     */
    public function getHandle()
    {
        return $this->container['handle'];
    }

    /**
     * Sets handle
     * @param string $handle Per account unique handle for the additional cost
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Gets ordertext
     * @return string
     */
    public function getOrdertext()
    {
        return $this->container['ordertext'];
    }

    /**
     * Sets ordertext
     * @param string $ordertext Order text for the additional cost. Will be on affected invoices.
     * @return $this
     */
    public function setOrdertext($ordertext)
    {
        $this->container['ordertext'] = $ordertext;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity Quantity for the additional cost. Default 1.
     * @return $this
     */
    public function setQuantity($quantity)
    {

        if (!is_null($quantity) && ($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling AdditionalCost., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount Additional cost total amount
     * @return $this
     */
    public function setAmount($amount)
    {

        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling AdditionalCost., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets vat
     * @return float
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     * @param float $vat Optional vat for additional cost. Account default is used if none given.
     * @return $this
     */
    public function setVat($vat)
    {

        if (!is_null($vat) && ($vat > 1)) {
            throw new \InvalidArgumentException('invalid value for $vat when calling AdditionalCost., must be smaller than or equal to 1.');
        }
        if (!is_null($vat) && ($vat < 0)) {
            throw new \InvalidArgumentException('invalid value for $vat when calling AdditionalCost., must be bigger than or equal to 0.');
        }

        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created Date when the additional cost was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets amount_incl_vat
     * @return bool
     */
    public function getAmountInclVat()
    {
        return $this->container['amount_incl_vat'];
    }

    /**
     * Sets amount_incl_vat
     * @param bool $amount_incl_vat Whether the amount is including VAT. Default true.
     * @return $this
     */
    public function setAmountInclVat($amount_incl_vat)
    {
        $this->container['amount_incl_vat'] = $amount_incl_vat;

        return $this;
    }

    /**
     * Gets amount_vat
     * @return int
     */
    public function getAmountVat()
    {
        return $this->container['amount_vat'];
    }

    /**
     * Sets amount_vat
     * @param int $amount_vat Additional cost vat amount
     * @return $this
     */
    public function setAmountVat($amount_vat)
    {
        $this->container['amount_vat'] = $amount_vat;

        return $this;
    }

    /**
     * Gets amount_ex_vat
     * @return int
     */
    public function getAmountExVat()
    {
        return $this->container['amount_ex_vat'];
    }

    /**
     * Sets amount_ex_vat
     * @param int $amount_ex_vat Additional cost amount without vat
     * @return $this
     */
    public function setAmountExVat($amount_ex_vat)
    {
        $this->container['amount_ex_vat'] = $amount_ex_vat;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Reepay\ObjectSerializer::sanitizeForSerialization($this));
    }
}


