<?php
/**
 * Card
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CityPay Payment API
 *
 * This CityPay API is a HTTP RESTful payment API used for direct server to server transactional processing. It provides a number of payment mechanisms including: Internet, MOTO, Continuous Authority transaction processing, 3-D Secure decision handling using RFA Secure, Authorisation, Refunding, Pre-Authorisation, Cancellation/Voids and Completion processing. The API is also capable of tokinsed payments using Card Holder Accounts.  ## Compliance and Security <aside class=\"notice\">   Before we begin a reminder that your application will need to adhere to PCI-DSS standards to operate safely   and to meet requirements set out by Visa and MasterCard and the PCI Security Standards Council including: </aside>  * Data must be collected using TLS version 1.2 using [strong cryptography](#enabled-tls-ciphers). We will not accept calls to our API at   lower grade encryption levels. We regularly scan our TLS endpoints for vulnerabilities and perform TLS assessments   as part of our compliance program. * The application must not store sensitive card holder data (CHD) such as the card security code (CSC) or   primary access number (PAN) * The application must not display the full card number on receipts, it is recommended to mask the PAN   and show the last 4 digits. The API will return this for you for ease of receipt creation * If you are developing a website, you will be required to perform regular scans on the network where you host the   application to meet your compliance obligations * You will be required to be PCI Compliant and the application must adhere to the security standard. Further information   is available from [https://www.pcisecuritystandards.org/](https://www.pcisecuritystandards.org/) * The API verifies that the request is for a valid account and originates from a trusted source using the remote IP   address. Our application firewalls analyse data that may be an attempt to break a large number of security common   security vulnerabilities.
 *
 * Contact: support@citypay.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CityPay\Model;

use \ArrayAccess;
use \CityPay\ObjectSerializer;

/**
 * Card Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Card implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bin_commercial' => 'bool',
        'bin_corporate' => 'bool',
        'bin_country_issued' => 'string',
        'bin_credit' => 'bool',
        'bin_currency' => 'string',
        'bin_debit' => 'bool',
        'bin_description' => 'string',
        'bin_eu' => 'bool',
        'card_id' => 'string',
        'card_status' => 'string',
        'date_created' => '\DateTime',
        'default' => 'bool',
        'expmonth' => 'int',
        'expyear' => 'int',
        'label' => 'string',
        'label2' => 'string',
        'last4digits' => 'string',
        'name_on_card' => 'string',
        'scheme' => 'string',
        'token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bin_commercial' => null,
        'bin_corporate' => null,
        'bin_country_issued' => null,
        'bin_credit' => null,
        'bin_currency' => null,
        'bin_debit' => null,
        'bin_description' => null,
        'bin_eu' => null,
        'card_id' => null,
        'card_status' => null,
        'date_created' => 'date-time',
        'default' => null,
        'expmonth' => 'int32',
        'expyear' => 'int32',
        'label' => null,
        'label2' => null,
        'last4digits' => null,
        'name_on_card' => null,
        'scheme' => null,
        'token' => 'base58'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bin_commercial' => 'bin_commercial',
        'bin_corporate' => 'bin_corporate',
        'bin_country_issued' => 'bin_country_issued',
        'bin_credit' => 'bin_credit',
        'bin_currency' => 'bin_currency',
        'bin_debit' => 'bin_debit',
        'bin_description' => 'bin_description',
        'bin_eu' => 'bin_eu',
        'card_id' => 'card_id',
        'card_status' => 'card_status',
        'date_created' => 'date_created',
        'default' => 'default',
        'expmonth' => 'expmonth',
        'expyear' => 'expyear',
        'label' => 'label',
        'label2' => 'label2',
        'last4digits' => 'last4digits',
        'name_on_card' => 'name_on_card',
        'scheme' => 'scheme',
        'token' => 'token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bin_commercial' => 'setBinCommercial',
        'bin_corporate' => 'setBinCorporate',
        'bin_country_issued' => 'setBinCountryIssued',
        'bin_credit' => 'setBinCredit',
        'bin_currency' => 'setBinCurrency',
        'bin_debit' => 'setBinDebit',
        'bin_description' => 'setBinDescription',
        'bin_eu' => 'setBinEu',
        'card_id' => 'setCardId',
        'card_status' => 'setCardStatus',
        'date_created' => 'setDateCreated',
        'default' => 'setDefault',
        'expmonth' => 'setExpmonth',
        'expyear' => 'setExpyear',
        'label' => 'setLabel',
        'label2' => 'setLabel2',
        'last4digits' => 'setLast4digits',
        'name_on_card' => 'setNameOnCard',
        'scheme' => 'setScheme',
        'token' => 'setToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bin_commercial' => 'getBinCommercial',
        'bin_corporate' => 'getBinCorporate',
        'bin_country_issued' => 'getBinCountryIssued',
        'bin_credit' => 'getBinCredit',
        'bin_currency' => 'getBinCurrency',
        'bin_debit' => 'getBinDebit',
        'bin_description' => 'getBinDescription',
        'bin_eu' => 'getBinEu',
        'card_id' => 'getCardId',
        'card_status' => 'getCardStatus',
        'date_created' => 'getDateCreated',
        'default' => 'getDefault',
        'expmonth' => 'getExpmonth',
        'expyear' => 'getExpyear',
        'label' => 'getLabel',
        'label2' => 'getLabel2',
        'last4digits' => 'getLast4digits',
        'name_on_card' => 'getNameOnCard',
        'scheme' => 'getScheme',
        'token' => 'getToken'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['bin_commercial'] = $data['bin_commercial'] ?? null;
        $this->container['bin_corporate'] = $data['bin_corporate'] ?? null;
        $this->container['bin_country_issued'] = $data['bin_country_issued'] ?? null;
        $this->container['bin_credit'] = $data['bin_credit'] ?? null;
        $this->container['bin_currency'] = $data['bin_currency'] ?? null;
        $this->container['bin_debit'] = $data['bin_debit'] ?? null;
        $this->container['bin_description'] = $data['bin_description'] ?? null;
        $this->container['bin_eu'] = $data['bin_eu'] ?? null;
        $this->container['card_id'] = $data['card_id'] ?? null;
        $this->container['card_status'] = $data['card_status'] ?? null;
        $this->container['date_created'] = $data['date_created'] ?? null;
        $this->container['default'] = $data['default'] ?? null;
        $this->container['expmonth'] = $data['expmonth'] ?? null;
        $this->container['expyear'] = $data['expyear'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['label2'] = $data['label2'] ?? null;
        $this->container['last4digits'] = $data['last4digits'] ?? null;
        $this->container['name_on_card'] = $data['name_on_card'] ?? null;
        $this->container['scheme'] = $data['scheme'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['expmonth']) && ($this->container['expmonth'] > 12)) {
            $invalidProperties[] = "invalid value for 'expmonth', must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['expmonth']) && ($this->container['expmonth'] < 1)) {
            $invalidProperties[] = "invalid value for 'expmonth', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['expyear']) && ($this->container['expyear'] > 2100)) {
            $invalidProperties[] = "invalid value for 'expyear', must be smaller than or equal to 2100.";
        }

        if (!is_null($this->container['expyear']) && ($this->container['expyear'] < 2000)) {
            $invalidProperties[] = "invalid value for 'expyear', must be bigger than or equal to 2000.";
        }

        if (!is_null($this->container['name_on_card']) && (mb_strlen($this->container['name_on_card']) > 45)) {
            $invalidProperties[] = "invalid value for 'name_on_card', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['name_on_card']) && (mb_strlen($this->container['name_on_card']) < 2)) {
            $invalidProperties[] = "invalid value for 'name_on_card', the character length must be bigger than or equal to 2.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets bin_commercial
     *
     * @return bool|null
     */
    public function getBinCommercial()
    {
        return $this->container['bin_commercial'];
    }

    /**
     * Sets bin_commercial
     *
     * @param bool|null $bin_commercial Defines whether the card is a commercial card.
     *
     * @return self
     */
    public function setBinCommercial($bin_commercial)
    {
        $this->container['bin_commercial'] = $bin_commercial;

        return $this;
    }

    /**
     * Gets bin_corporate
     *
     * @return bool|null
     */
    public function getBinCorporate()
    {
        return $this->container['bin_corporate'];
    }

    /**
     * Sets bin_corporate
     *
     * @param bool|null $bin_corporate Defines whether the card is a corporate business card.
     *
     * @return self
     */
    public function setBinCorporate($bin_corporate)
    {
        $this->container['bin_corporate'] = $bin_corporate;

        return $this;
    }

    /**
     * Gets bin_country_issued
     *
     * @return string|null
     */
    public function getBinCountryIssued()
    {
        return $this->container['bin_country_issued'];
    }

    /**
     * Sets bin_country_issued
     *
     * @param string|null $bin_country_issued The determined country where the card was issued.
     *
     * @return self
     */
    public function setBinCountryIssued($bin_country_issued)
    {
        $this->container['bin_country_issued'] = $bin_country_issued;

        return $this;
    }

    /**
     * Gets bin_credit
     *
     * @return bool|null
     */
    public function getBinCredit()
    {
        return $this->container['bin_credit'];
    }

    /**
     * Sets bin_credit
     *
     * @param bool|null $bin_credit Defines whether the card is a credit card.
     *
     * @return self
     */
    public function setBinCredit($bin_credit)
    {
        $this->container['bin_credit'] = $bin_credit;

        return $this;
    }

    /**
     * Gets bin_currency
     *
     * @return string|null
     */
    public function getBinCurrency()
    {
        return $this->container['bin_currency'];
    }

    /**
     * Sets bin_currency
     *
     * @param string|null $bin_currency The default currency determined for the card.
     *
     * @return self
     */
    public function setBinCurrency($bin_currency)
    {
        $this->container['bin_currency'] = $bin_currency;

        return $this;
    }

    /**
     * Gets bin_debit
     *
     * @return bool|null
     */
    public function getBinDebit()
    {
        return $this->container['bin_debit'];
    }

    /**
     * Sets bin_debit
     *
     * @param bool|null $bin_debit Defines whether the card is a debit card.
     *
     * @return self
     */
    public function setBinDebit($bin_debit)
    {
        $this->container['bin_debit'] = $bin_debit;

        return $this;
    }

    /**
     * Gets bin_description
     *
     * @return string|null
     */
    public function getBinDescription()
    {
        return $this->container['bin_description'];
    }

    /**
     * Sets bin_description
     *
     * @param string|null $bin_description A description of the bin on the card to identify what type of product the card is.
     *
     * @return self
     */
    public function setBinDescription($bin_description)
    {
        $this->container['bin_description'] = $bin_description;

        return $this;
    }

    /**
     * Gets bin_eu
     *
     * @return bool|null
     */
    public function getBinEu()
    {
        return $this->container['bin_eu'];
    }

    /**
     * Sets bin_eu
     *
     * @param bool|null $bin_eu Defines whether the card is regulated within the EU.
     *
     * @return self
     */
    public function setBinEu($bin_eu)
    {
        $this->container['bin_eu'] = $bin_eu;

        return $this;
    }

    /**
     * Gets card_id
     *
     * @return string|null
     */
    public function getCardId()
    {
        return $this->container['card_id'];
    }

    /**
     * Sets card_id
     *
     * @param string|null $card_id The id of the card that is returned. Should be used for referencing the card when perform any changes.
     *
     * @return self
     */
    public function setCardId($card_id)
    {
        $this->container['card_id'] = $card_id;

        return $this;
    }

    /**
     * Gets card_status
     *
     * @return string|null
     */
    public function getCardStatus()
    {
        return $this->container['card_status'];
    }

    /**
     * Sets card_status
     *
     * @param string|null $card_status The status of the card such, valid values are   - ACTIVE the card is active for processing   - INACTIVE the card is not active for processing   - EXPIRED for cards that have passed their expiry date.
     *
     * @return self
     */
    public function setCardStatus($card_status)
    {
        $this->container['card_status'] = $card_status;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return \DateTime|null
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime|null $date_created The date time of when the card was created.
     *
     * @return self
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets default
     *
     * @return bool|null
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param bool|null $default Determines if the card is the default card for the account and should be regarded as the first option to be used for processing.
     *
     * @return self
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets expmonth
     *
     * @return int|null
     */
    public function getExpmonth()
    {
        return $this->container['expmonth'];
    }

    /**
     * Sets expmonth
     *
     * @param int|null $expmonth The expiry month of the card.
     *
     * @return self
     */
    public function setExpmonth($expmonth)
    {

        if (!is_null($expmonth) && ($expmonth > 12)) {
            throw new \InvalidArgumentException('invalid value for $expmonth when calling Card., must be smaller than or equal to 12.');
        }
        if (!is_null($expmonth) && ($expmonth < 1)) {
            throw new \InvalidArgumentException('invalid value for $expmonth when calling Card., must be bigger than or equal to 1.');
        }

        $this->container['expmonth'] = $expmonth;

        return $this;
    }

    /**
     * Gets expyear
     *
     * @return int|null
     */
    public function getExpyear()
    {
        return $this->container['expyear'];
    }

    /**
     * Sets expyear
     *
     * @param int|null $expyear The expiry year of the card.
     *
     * @return self
     */
    public function setExpyear($expyear)
    {

        if (!is_null($expyear) && ($expyear > 2100)) {
            throw new \InvalidArgumentException('invalid value for $expyear when calling Card., must be smaller than or equal to 2100.');
        }
        if (!is_null($expyear) && ($expyear < 2000)) {
            throw new \InvalidArgumentException('invalid value for $expyear when calling Card., must be bigger than or equal to 2000.');
        }

        $this->container['expyear'] = $expyear;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label A label which identifies this card.
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets label2
     *
     * @return string|null
     */
    public function getLabel2()
    {
        return $this->container['label2'];
    }

    /**
     * Sets label2
     *
     * @param string|null $label2 A label which also provides the expiry date of the card.
     *
     * @return self
     */
    public function setLabel2($label2)
    {
        $this->container['label2'] = $label2;

        return $this;
    }

    /**
     * Gets last4digits
     *
     * @return string|null
     */
    public function getLast4digits()
    {
        return $this->container['last4digits'];
    }

    /**
     * Sets last4digits
     *
     * @param string|null $last4digits The last 4 digits of the card to aid in identification.
     *
     * @return self
     */
    public function setLast4digits($last4digits)
    {
        $this->container['last4digits'] = $last4digits;

        return $this;
    }

    /**
     * Gets name_on_card
     *
     * @return string|null
     */
    public function getNameOnCard()
    {
        return $this->container['name_on_card'];
    }

    /**
     * Sets name_on_card
     *
     * @param string|null $name_on_card The name on the card.
     *
     * @return self
     */
    public function setNameOnCard($name_on_card)
    {
        if (!is_null($name_on_card) && (mb_strlen($name_on_card) > 45)) {
            throw new \InvalidArgumentException('invalid length for $name_on_card when calling Card., must be smaller than or equal to 45.');
        }
        if (!is_null($name_on_card) && (mb_strlen($name_on_card) < 2)) {
            throw new \InvalidArgumentException('invalid length for $name_on_card when calling Card., must be bigger than or equal to 2.');
        }

        $this->container['name_on_card'] = $name_on_card;

        return $this;
    }

    /**
     * Gets scheme
     *
     * @return string|null
     */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
     * Sets scheme
     *
     * @param string|null $scheme The scheme that issued the card.
     *
     * @return self
     */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token A token that can be used to process against the card.
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


