<?php
/**
 * AirlineAdvice
 *
 * PHP version 7.1
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
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
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
 * AirlineAdvice Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AirlineAdvice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AirlineAdvice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'carrier_name' => 'string',
        'conjunction_ticket_indicator' => 'bool',
        'eticket_indicator' => 'bool',
        'no_air_segments' => 'int',
        'number_in_party' => 'int',
        'original_ticket_no' => 'string',
        'passenger_name' => 'string',
        'segment1' => '\CityPay\Model\AirlineSegment',
        'segment2' => '\CityPay\Model\AirlineSegment',
        'segment3' => '\CityPay\Model\AirlineSegment',
        'segment4' => '\CityPay\Model\AirlineSegment',
        'ticket_issue_city' => 'string',
        'ticket_issue_date' => '\DateTime',
        'ticket_issue_name' => 'string',
        'ticket_no' => 'string',
        'transaction_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'carrier_name' => null,
        'conjunction_ticket_indicator' => null,
        'eticket_indicator' => null,
        'no_air_segments' => 'int32',
        'number_in_party' => 'int32',
        'original_ticket_no' => null,
        'passenger_name' => null,
        'segment1' => null,
        'segment2' => null,
        'segment3' => null,
        'segment4' => null,
        'ticket_issue_city' => null,
        'ticket_issue_date' => 'date',
        'ticket_issue_name' => null,
        'ticket_no' => null,
        'transaction_type' => null
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
        'carrier_name' => 'carrier_name',
        'conjunction_ticket_indicator' => 'conjunction_ticket_indicator',
        'eticket_indicator' => 'eticket_indicator',
        'no_air_segments' => 'no_air_segments',
        'number_in_party' => 'number_in_party',
        'original_ticket_no' => 'original_ticket_no',
        'passenger_name' => 'passenger_name',
        'segment1' => 'segment1',
        'segment2' => 'segment2',
        'segment3' => 'segment3',
        'segment4' => 'segment4',
        'ticket_issue_city' => 'ticket_issue_city',
        'ticket_issue_date' => 'ticket_issue_date',
        'ticket_issue_name' => 'ticket_issue_name',
        'ticket_no' => 'ticket_no',
        'transaction_type' => 'transaction_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier_name' => 'setCarrierName',
        'conjunction_ticket_indicator' => 'setConjunctionTicketIndicator',
        'eticket_indicator' => 'setEticketIndicator',
        'no_air_segments' => 'setNoAirSegments',
        'number_in_party' => 'setNumberInParty',
        'original_ticket_no' => 'setOriginalTicketNo',
        'passenger_name' => 'setPassengerName',
        'segment1' => 'setSegment1',
        'segment2' => 'setSegment2',
        'segment3' => 'setSegment3',
        'segment4' => 'setSegment4',
        'ticket_issue_city' => 'setTicketIssueCity',
        'ticket_issue_date' => 'setTicketIssueDate',
        'ticket_issue_name' => 'setTicketIssueName',
        'ticket_no' => 'setTicketNo',
        'transaction_type' => 'setTransactionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier_name' => 'getCarrierName',
        'conjunction_ticket_indicator' => 'getConjunctionTicketIndicator',
        'eticket_indicator' => 'getEticketIndicator',
        'no_air_segments' => 'getNoAirSegments',
        'number_in_party' => 'getNumberInParty',
        'original_ticket_no' => 'getOriginalTicketNo',
        'passenger_name' => 'getPassengerName',
        'segment1' => 'getSegment1',
        'segment2' => 'getSegment2',
        'segment3' => 'getSegment3',
        'segment4' => 'getSegment4',
        'ticket_issue_city' => 'getTicketIssueCity',
        'ticket_issue_date' => 'getTicketIssueDate',
        'ticket_issue_name' => 'getTicketIssueName',
        'ticket_no' => 'getTicketNo',
        'transaction_type' => 'getTransactionType'
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
        $this->container['carrier_name'] = isset($data['carrier_name']) ? $data['carrier_name'] : null;
        $this->container['conjunction_ticket_indicator'] = isset($data['conjunction_ticket_indicator']) ? $data['conjunction_ticket_indicator'] : null;
        $this->container['eticket_indicator'] = isset($data['eticket_indicator']) ? $data['eticket_indicator'] : null;
        $this->container['no_air_segments'] = isset($data['no_air_segments']) ? $data['no_air_segments'] : null;
        $this->container['number_in_party'] = isset($data['number_in_party']) ? $data['number_in_party'] : null;
        $this->container['original_ticket_no'] = isset($data['original_ticket_no']) ? $data['original_ticket_no'] : null;
        $this->container['passenger_name'] = isset($data['passenger_name']) ? $data['passenger_name'] : null;
        $this->container['segment1'] = isset($data['segment1']) ? $data['segment1'] : null;
        $this->container['segment2'] = isset($data['segment2']) ? $data['segment2'] : null;
        $this->container['segment3'] = isset($data['segment3']) ? $data['segment3'] : null;
        $this->container['segment4'] = isset($data['segment4']) ? $data['segment4'] : null;
        $this->container['ticket_issue_city'] = isset($data['ticket_issue_city']) ? $data['ticket_issue_city'] : null;
        $this->container['ticket_issue_date'] = isset($data['ticket_issue_date']) ? $data['ticket_issue_date'] : null;
        $this->container['ticket_issue_name'] = isset($data['ticket_issue_name']) ? $data['ticket_issue_name'] : null;
        $this->container['ticket_no'] = isset($data['ticket_no']) ? $data['ticket_no'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['carrier_name'] === null) {
            $invalidProperties[] = "'carrier_name' can't be null";
        }
        if ((mb_strlen($this->container['carrier_name']) > 25)) {
            $invalidProperties[] = "invalid value for 'carrier_name', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['no_air_segments']) && ($this->container['no_air_segments'] > 4)) {
            $invalidProperties[] = "invalid value for 'no_air_segments', must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['no_air_segments']) && ($this->container['no_air_segments'] < 0)) {
            $invalidProperties[] = "invalid value for 'no_air_segments', must be bigger than or equal to 0.";
        }

        if ($this->container['number_in_party'] === null) {
            $invalidProperties[] = "'number_in_party' can't be null";
        }
        if (!is_null($this->container['original_ticket_no']) && (mb_strlen($this->container['original_ticket_no']) > 14)) {
            $invalidProperties[] = "invalid value for 'original_ticket_no', the character length must be smaller than or equal to 14.";
        }

        if (!is_null($this->container['passenger_name']) && (mb_strlen($this->container['passenger_name']) > 25)) {
            $invalidProperties[] = "invalid value for 'passenger_name', the character length must be smaller than or equal to 25.";
        }

        if ($this->container['segment1'] === null) {
            $invalidProperties[] = "'segment1' can't be null";
        }
        if ($this->container['ticket_issue_city'] === null) {
            $invalidProperties[] = "'ticket_issue_city' can't be null";
        }
        if ((mb_strlen($this->container['ticket_issue_city']) > 18)) {
            $invalidProperties[] = "invalid value for 'ticket_issue_city', the character length must be smaller than or equal to 18.";
        }

        if ($this->container['ticket_issue_date'] === null) {
            $invalidProperties[] = "'ticket_issue_date' can't be null";
        }
        if ($this->container['ticket_issue_name'] === null) {
            $invalidProperties[] = "'ticket_issue_name' can't be null";
        }
        if ((mb_strlen($this->container['ticket_issue_name']) > 26)) {
            $invalidProperties[] = "invalid value for 'ticket_issue_name', the character length must be smaller than or equal to 26.";
        }

        if ($this->container['ticket_no'] === null) {
            $invalidProperties[] = "'ticket_no' can't be null";
        }
        if ((mb_strlen($this->container['ticket_no']) > 14)) {
            $invalidProperties[] = "invalid value for 'ticket_no', the character length must be smaller than or equal to 14.";
        }

        if ($this->container['transaction_type'] === null) {
            $invalidProperties[] = "'transaction_type' can't be null";
        }
        if ((mb_strlen($this->container['transaction_type']) > 3)) {
            $invalidProperties[] = "invalid value for 'transaction_type', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['transaction_type']) < 3)) {
            $invalidProperties[] = "invalid value for 'transaction_type', the character length must be bigger than or equal to 3.";
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
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name The name of the airline carrier that generated the tickets for airline travel.
     *
     * @return $this
     */
    public function setCarrierName($carrier_name)
    {
        if ((mb_strlen($carrier_name) > 25)) {
            throw new \InvalidArgumentException('invalid length for $carrier_name when calling AirlineAdvice., must be smaller than or equal to 25.');
        }

        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets conjunction_ticket_indicator
     *
     * @return bool|null
     */
    public function getConjunctionTicketIndicator()
    {
        return $this->container['conjunction_ticket_indicator'];
    }

    /**
     * Sets conjunction_ticket_indicator
     *
     * @param bool|null $conjunction_ticket_indicator true if a conjunction ticket (with additional coupons) was issued for an itinerary with more than four segments. Defaults to false.
     *
     * @return $this
     */
    public function setConjunctionTicketIndicator($conjunction_ticket_indicator)
    {
        $this->container['conjunction_ticket_indicator'] = $conjunction_ticket_indicator;

        return $this;
    }

    /**
     * Gets eticket_indicator
     *
     * @return bool|null
     */
    public function getEticketIndicator()
    {
        return $this->container['eticket_indicator'];
    }

    /**
     * Sets eticket_indicator
     *
     * @param bool|null $eticket_indicator The Electronic Ticket Indicator, a code that indicates if an electronic ticket was issued.  Defaults to true.
     *
     * @return $this
     */
    public function setEticketIndicator($eticket_indicator)
    {
        $this->container['eticket_indicator'] = $eticket_indicator;

        return $this;
    }

    /**
     * Gets no_air_segments
     *
     * @return int|null
     */
    public function getNoAirSegments()
    {
        return $this->container['no_air_segments'];
    }

    /**
     * Sets no_air_segments
     *
     * @param int|null $no_air_segments A value that indicates the number of air travel segments included on this ticket. Valid entries include the numerals “0” through “4”. Required only if the transaction type is TKT or EXC.
     *
     * @return $this
     */
    public function setNoAirSegments($no_air_segments)
    {

        if (!is_null($no_air_segments) && ($no_air_segments > 4)) {
            throw new \InvalidArgumentException('invalid value for $no_air_segments when calling AirlineAdvice., must be smaller than or equal to 4.');
        }
        if (!is_null($no_air_segments) && ($no_air_segments < 0)) {
            throw new \InvalidArgumentException('invalid value for $no_air_segments when calling AirlineAdvice., must be bigger than or equal to 0.');
        }

        $this->container['no_air_segments'] = $no_air_segments;

        return $this;
    }

    /**
     * Gets number_in_party
     *
     * @return int
     */
    public function getNumberInParty()
    {
        return $this->container['number_in_party'];
    }

    /**
     * Sets number_in_party
     *
     * @param int $number_in_party The number of people in the party.
     *
     * @return $this
     */
    public function setNumberInParty($number_in_party)
    {
        $this->container['number_in_party'] = $number_in_party;

        return $this;
    }

    /**
     * Gets original_ticket_no
     *
     * @return string|null
     */
    public function getOriginalTicketNo()
    {
        return $this->container['original_ticket_no'];
    }

    /**
     * Sets original_ticket_no
     *
     * @param string|null $original_ticket_no Required if transaction type is EXC.
     *
     * @return $this
     */
    public function setOriginalTicketNo($original_ticket_no)
    {
        if (!is_null($original_ticket_no) && (mb_strlen($original_ticket_no) > 14)) {
            throw new \InvalidArgumentException('invalid length for $original_ticket_no when calling AirlineAdvice., must be smaller than or equal to 14.');
        }

        $this->container['original_ticket_no'] = $original_ticket_no;

        return $this;
    }

    /**
     * Gets passenger_name
     *
     * @return string|null
     */
    public function getPassengerName()
    {
        return $this->container['passenger_name'];
    }

    /**
     * Sets passenger_name
     *
     * @param string|null $passenger_name The name of the passenger when the traveller is not the card member that purchased the ticket. Required only if the transaction type is TKT or EXC.
     *
     * @return $this
     */
    public function setPassengerName($passenger_name)
    {
        if (!is_null($passenger_name) && (mb_strlen($passenger_name) > 25)) {
            throw new \InvalidArgumentException('invalid length for $passenger_name when calling AirlineAdvice., must be smaller than or equal to 25.');
        }

        $this->container['passenger_name'] = $passenger_name;

        return $this;
    }

    /**
     * Gets segment1
     *
     * @return \CityPay\Model\AirlineSegment
     */
    public function getSegment1()
    {
        return $this->container['segment1'];
    }

    /**
     * Sets segment1
     *
     * @param \CityPay\Model\AirlineSegment $segment1 segment1
     *
     * @return $this
     */
    public function setSegment1($segment1)
    {
        $this->container['segment1'] = $segment1;

        return $this;
    }

    /**
     * Gets segment2
     *
     * @return \CityPay\Model\AirlineSegment|null
     */
    public function getSegment2()
    {
        return $this->container['segment2'];
    }

    /**
     * Sets segment2
     *
     * @param \CityPay\Model\AirlineSegment|null $segment2 segment2
     *
     * @return $this
     */
    public function setSegment2($segment2)
    {
        $this->container['segment2'] = $segment2;

        return $this;
    }

    /**
     * Gets segment3
     *
     * @return \CityPay\Model\AirlineSegment|null
     */
    public function getSegment3()
    {
        return $this->container['segment3'];
    }

    /**
     * Sets segment3
     *
     * @param \CityPay\Model\AirlineSegment|null $segment3 segment3
     *
     * @return $this
     */
    public function setSegment3($segment3)
    {
        $this->container['segment3'] = $segment3;

        return $this;
    }

    /**
     * Gets segment4
     *
     * @return \CityPay\Model\AirlineSegment|null
     */
    public function getSegment4()
    {
        return $this->container['segment4'];
    }

    /**
     * Sets segment4
     *
     * @param \CityPay\Model\AirlineSegment|null $segment4 segment4
     *
     * @return $this
     */
    public function setSegment4($segment4)
    {
        $this->container['segment4'] = $segment4;

        return $this;
    }

    /**
     * Gets ticket_issue_city
     *
     * @return string
     */
    public function getTicketIssueCity()
    {
        return $this->container['ticket_issue_city'];
    }

    /**
     * Sets ticket_issue_city
     *
     * @param string $ticket_issue_city The name of the city town or village where the transaction took place.
     *
     * @return $this
     */
    public function setTicketIssueCity($ticket_issue_city)
    {
        if ((mb_strlen($ticket_issue_city) > 18)) {
            throw new \InvalidArgumentException('invalid length for $ticket_issue_city when calling AirlineAdvice., must be smaller than or equal to 18.');
        }

        $this->container['ticket_issue_city'] = $ticket_issue_city;

        return $this;
    }

    /**
     * Gets ticket_issue_date
     *
     * @return \DateTime
     */
    public function getTicketIssueDate()
    {
        return $this->container['ticket_issue_date'];
    }

    /**
     * Sets ticket_issue_date
     *
     * @param \DateTime $ticket_issue_date The date the ticket was issued in ISO Date format (yyyy-MM-dd).
     *
     * @return $this
     */
    public function setTicketIssueDate($ticket_issue_date)
    {
        $this->container['ticket_issue_date'] = $ticket_issue_date;

        return $this;
    }

    /**
     * Gets ticket_issue_name
     *
     * @return string
     */
    public function getTicketIssueName()
    {
        return $this->container['ticket_issue_name'];
    }

    /**
     * Sets ticket_issue_name
     *
     * @param string $ticket_issue_name The name of the agency generating the ticket.
     *
     * @return $this
     */
    public function setTicketIssueName($ticket_issue_name)
    {
        if ((mb_strlen($ticket_issue_name) > 26)) {
            throw new \InvalidArgumentException('invalid length for $ticket_issue_name when calling AirlineAdvice., must be smaller than or equal to 26.');
        }

        $this->container['ticket_issue_name'] = $ticket_issue_name;

        return $this;
    }

    /**
     * Gets ticket_no
     *
     * @return string
     */
    public function getTicketNo()
    {
        return $this->container['ticket_no'];
    }

    /**
     * Sets ticket_no
     *
     * @param string $ticket_no This must be a valid ticket number, i.e. numeric (the first 3 digits must represent the valid IATA plate carrier code). The final check digit should be validated prior to submission. On credit charges, this field should contain the number of the original ticket, and not of a replacement.
     *
     * @return $this
     */
    public function setTicketNo($ticket_no)
    {
        if ((mb_strlen($ticket_no) > 14)) {
            throw new \InvalidArgumentException('invalid length for $ticket_no when calling AirlineAdvice., must be smaller than or equal to 14.');
        }

        $this->container['ticket_no'] = $ticket_no;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string $transaction_type This field contains the Transaction Type code assigned to this transaction. Valid codes include:   - `TKT` = Ticket Purchase  - `REF` = Refund  - `EXC` = Exchange Ticket  - `MSC` = Miscellaneous (non-Ticket Purchase- and non-Exchange Ticket-related transactions only).
     *
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        if ((mb_strlen($transaction_type) > 3)) {
            throw new \InvalidArgumentException('invalid length for $transaction_type when calling AirlineAdvice., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($transaction_type) < 3)) {
            throw new \InvalidArgumentException('invalid length for $transaction_type when calling AirlineAdvice., must be bigger than or equal to 3.');
        }

        $this->container['transaction_type'] = $transaction_type;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


