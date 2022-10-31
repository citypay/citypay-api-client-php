<?php
/**
 * AirlineSegment
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
 * This CityPay API is a HTTP RESTful payment API used for direct server to server transactional processing. It provides a number of payment mechanisms including: Internet, MOTO, Continuous Authority transaction processing, 3-D Secure decision handling using RFA Secure, Authorisation, Refunding, Pre-Authorisation, Cancellation/Voids and Completion processing. The API is also capable of tokinsed payments using Card Holder Accounts.  ## Compliance and Security Your application will need to adhere to PCI-DSS standards to operate safely and to meet requirements set out by  Visa and MasterCard and the PCI Security Standards Council. These include  * Data must be collected using TLS version 1.2 using [strong cryptography](#enabled-tls-ciphers). We will not accept calls to our API at   lower grade encryption levels. We regularly scan our TLS endpoints for vulnerabilities and perform TLS assessments   as part of our compliance program. * The application must not store sensitive card holder data (CHD) such as the card security code (CSC) or   primary access number (PAN) * The application must not display the full card number on receipts, it is recommended to mask the PAN   and show the last 4 digits. The API will return this for you for ease of receipt creation * If you are developing a website, you will be required to perform regular scans on the network where you host the   application to meet your compliance obligations * You will be required to be PCI Compliant and the application must adhere to the security standard. Further information   is available from [https://www.pcisecuritystandards.org/](https://www.pcisecuritystandards.org/) * The API verifies that the request is for a valid account and originates from a trusted source using the remote IP   address. Our application firewalls analyse data that may be an attempt to break a large number of security common   security vulnerabilities.
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
 * AirlineSegment Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AirlineSegment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AirlineSegment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'arrival_location_code' => 'string',
        'carrier_code' => 'string',
        'class_service_code' => 'string',
        'departure_date' => '\DateTime',
        'departure_location_code' => 'string',
        'flight_number' => 'string',
        'segment_fare' => 'int',
        'stop_over_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'arrival_location_code' => null,
        'carrier_code' => null,
        'class_service_code' => null,
        'departure_date' => 'date',
        'departure_location_code' => null,
        'flight_number' => null,
        'segment_fare' => 'int32',
        'stop_over_indicator' => null
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
        'arrival_location_code' => 'arrival_location_code',
        'carrier_code' => 'carrier_code',
        'class_service_code' => 'class_service_code',
        'departure_date' => 'departure_date',
        'departure_location_code' => 'departure_location_code',
        'flight_number' => 'flight_number',
        'segment_fare' => 'segment_fare',
        'stop_over_indicator' => 'stop_over_indicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arrival_location_code' => 'setArrivalLocationCode',
        'carrier_code' => 'setCarrierCode',
        'class_service_code' => 'setClassServiceCode',
        'departure_date' => 'setDepartureDate',
        'departure_location_code' => 'setDepartureLocationCode',
        'flight_number' => 'setFlightNumber',
        'segment_fare' => 'setSegmentFare',
        'stop_over_indicator' => 'setStopOverIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arrival_location_code' => 'getArrivalLocationCode',
        'carrier_code' => 'getCarrierCode',
        'class_service_code' => 'getClassServiceCode',
        'departure_date' => 'getDepartureDate',
        'departure_location_code' => 'getDepartureLocationCode',
        'flight_number' => 'getFlightNumber',
        'segment_fare' => 'getSegmentFare',
        'stop_over_indicator' => 'getStopOverIndicator'
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
        $this->container['arrival_location_code'] = $data['arrival_location_code'] ?? null;
        $this->container['carrier_code'] = $data['carrier_code'] ?? null;
        $this->container['class_service_code'] = $data['class_service_code'] ?? null;
        $this->container['departure_date'] = $data['departure_date'] ?? null;
        $this->container['departure_location_code'] = $data['departure_location_code'] ?? null;
        $this->container['flight_number'] = $data['flight_number'] ?? null;
        $this->container['segment_fare'] = $data['segment_fare'] ?? null;
        $this->container['stop_over_indicator'] = $data['stop_over_indicator'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['arrival_location_code'] === null) {
            $invalidProperties[] = "'arrival_location_code' can't be null";
        }
        if ((mb_strlen($this->container['arrival_location_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'arrival_location_code', the character length must be smaller than or equal to 3.";
        }

        if ($this->container['carrier_code'] === null) {
            $invalidProperties[] = "'carrier_code' can't be null";
        }
        if ((mb_strlen($this->container['carrier_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'carrier_code', the character length must be smaller than or equal to 2.";
        }

        if ($this->container['class_service_code'] === null) {
            $invalidProperties[] = "'class_service_code' can't be null";
        }
        if ((mb_strlen($this->container['class_service_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'class_service_code', the character length must be smaller than or equal to 2.";
        }

        if ($this->container['departure_date'] === null) {
            $invalidProperties[] = "'departure_date' can't be null";
        }
        if (!is_null($this->container['departure_location_code']) && (mb_strlen($this->container['departure_location_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'departure_location_code', the character length must be smaller than or equal to 3.";
        }

        if ($this->container['flight_number'] === null) {
            $invalidProperties[] = "'flight_number' can't be null";
        }
        if ((mb_strlen($this->container['flight_number']) > 4)) {
            $invalidProperties[] = "invalid value for 'flight_number', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['stop_over_indicator']) && (mb_strlen($this->container['stop_over_indicator']) > 1)) {
            $invalidProperties[] = "invalid value for 'stop_over_indicator', the character length must be smaller than or equal to 1.";
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
     * Gets arrival_location_code
     *
     * @return string
     */
    public function getArrivalLocationCode()
    {
        return $this->container['arrival_location_code'];
    }

    /**
     * Sets arrival_location_code
     *
     * @param string $arrival_location_code A standard airline routing code (airport code or location identifier) applicable to the arrival portion of this segment.
     *
     * @return self
     */
    public function setArrivalLocationCode($arrival_location_code)
    {
        if ((mb_strlen($arrival_location_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $arrival_location_code when calling AirlineSegment., must be smaller than or equal to 3.');
        }

        $this->container['arrival_location_code'] = $arrival_location_code;

        return $this;
    }

    /**
     * Gets carrier_code
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code
     *
     * @param string $carrier_code This field contains the two character airline designator code (air carrier code or airline code) that corresponds to the airline carrier applicable for up to four flight segments of this trip itinerary.
     *
     * @return self
     */
    public function setCarrierCode($carrier_code)
    {
        if ((mb_strlen($carrier_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $carrier_code when calling AirlineSegment., must be smaller than or equal to 2.');
        }

        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets class_service_code
     *
     * @return string
     */
    public function getClassServiceCode()
    {
        return $this->container['class_service_code'];
    }

    /**
     * Sets class_service_code
     *
     * @param string $class_service_code This field contains a code that corresponds to the fare class (A, B, C, D, Premium, Discounted, etc.) within the overall class of service (e.g., First Class, Business, Economy) applicable to this travel segment, as specified in the IATA Standard Code allocation table.
     *
     * @return self
     */
    public function setClassServiceCode($class_service_code)
    {
        if ((mb_strlen($class_service_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $class_service_code when calling AirlineSegment., must be smaller than or equal to 2.');
        }

        $this->container['class_service_code'] = $class_service_code;

        return $this;
    }

    /**
     * Gets departure_date
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->container['departure_date'];
    }

    /**
     * Sets departure_date
     *
     * @param \DateTime $departure_date The Departure Date for the travel segment in ISO Date Format (yyyy-MM-dd).
     *
     * @return self
     */
    public function setDepartureDate($departure_date)
    {
        $this->container['departure_date'] = $departure_date;

        return $this;
    }

    /**
     * Gets departure_location_code
     *
     * @return string|null
     */
    public function getDepartureLocationCode()
    {
        return $this->container['departure_location_code'];
    }

    /**
     * Sets departure_location_code
     *
     * @param string|null $departure_location_code A standard airline routing code (airport code or location identifier) applicable to the departure portion of this segment.
     *
     * @return self
     */
    public function setDepartureLocationCode($departure_location_code)
    {
        if (!is_null($departure_location_code) && (mb_strlen($departure_location_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $departure_location_code when calling AirlineSegment., must be smaller than or equal to 3.');
        }

        $this->container['departure_location_code'] = $departure_location_code;

        return $this;
    }

    /**
     * Gets flight_number
     *
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->container['flight_number'];
    }

    /**
     * Sets flight_number
     *
     * @param string $flight_number This field contains the carrier-assigned Flight Number for this travel segment.
     *
     * @return self
     */
    public function setFlightNumber($flight_number)
    {
        if ((mb_strlen($flight_number) > 4)) {
            throw new \InvalidArgumentException('invalid length for $flight_number when calling AirlineSegment., must be smaller than or equal to 4.');
        }

        $this->container['flight_number'] = $flight_number;

        return $this;
    }

    /**
     * Gets segment_fare
     *
     * @return int|null
     */
    public function getSegmentFare()
    {
        return $this->container['segment_fare'];
    }

    /**
     * Sets segment_fare
     *
     * @param int|null $segment_fare This field contains the total Fare for this travel segment.
     *
     * @return self
     */
    public function setSegmentFare($segment_fare)
    {
        $this->container['segment_fare'] = $segment_fare;

        return $this;
    }

    /**
     * Gets stop_over_indicator
     *
     * @return string|null
     */
    public function getStopOverIndicator()
    {
        return $this->container['stop_over_indicator'];
    }

    /**
     * Sets stop_over_indicator
     *
     * @param string|null $stop_over_indicator O = Stopover allowed, X = Stopover not allowed.
     *
     * @return self
     */
    public function setStopOverIndicator($stop_over_indicator)
    {
        if (!is_null($stop_over_indicator) && (mb_strlen($stop_over_indicator) > 1)) {
            throw new \InvalidArgumentException('invalid length for $stop_over_indicator when calling AirlineSegment., must be smaller than or equal to 1.');
        }

        $this->container['stop_over_indicator'] = $stop_over_indicator;

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


