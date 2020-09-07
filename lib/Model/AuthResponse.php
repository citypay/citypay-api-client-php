<?php
/**
 * AuthResponse
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
 * AuthResponse Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuthResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuthResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'int',
        'atrn' => 'string',
        'atsd' => 'string',
        'authcode' => 'string',
        'authen_result' => 'string',
        'authorised' => 'bool',
        'avs_result' => 'string',
        'bin_commercial' => 'bool',
        'bin_debit' => 'bool',
        'bin_description' => 'string',
        'cavv' => 'string',
        'context' => 'string',
        'csc_result' => 'string',
        'currency' => 'string',
        'datetime' => '\DateTime',
        'eci' => 'string',
        'identifier' => 'string',
        'live' => 'bool',
        'maskedpan' => 'string',
        'merchantid' => 'int',
        'result' => 'int',
        'result_code' => 'string',
        'result_message' => 'string',
        'scheme' => 'string',
        'sha256' => 'string',
        'trans_status' => 'string',
        'transno' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'amount' => 'int32',
        'atrn' => null,
        'atsd' => null,
        'authcode' => null,
        'authen_result' => null,
        'authorised' => null,
        'avs_result' => null,
        'bin_commercial' => null,
        'bin_debit' => null,
        'bin_description' => null,
        'cavv' => null,
        'context' => null,
        'csc_result' => null,
        'currency' => null,
        'datetime' => 'date-time',
        'eci' => null,
        'identifier' => null,
        'live' => null,
        'maskedpan' => null,
        'merchantid' => 'int32',
        'result' => 'int32',
        'result_code' => null,
        'result_message' => null,
        'scheme' => null,
        'sha256' => null,
        'trans_status' => null,
        'transno' => 'int32'
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
        'amount' => 'amount',
        'atrn' => 'atrn',
        'atsd' => 'atsd',
        'authcode' => 'authcode',
        'authen_result' => 'authen_result',
        'authorised' => 'authorised',
        'avs_result' => 'avs_result',
        'bin_commercial' => 'bin_commercial',
        'bin_debit' => 'bin_debit',
        'bin_description' => 'bin_description',
        'cavv' => 'cavv',
        'context' => 'context',
        'csc_result' => 'csc_result',
        'currency' => 'currency',
        'datetime' => 'datetime',
        'eci' => 'eci',
        'identifier' => 'identifier',
        'live' => 'live',
        'maskedpan' => 'maskedpan',
        'merchantid' => 'merchantid',
        'result' => 'result',
        'result_code' => 'result_code',
        'result_message' => 'result_message',
        'scheme' => 'scheme',
        'sha256' => 'sha256',
        'trans_status' => 'trans_status',
        'transno' => 'transno'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'atrn' => 'setAtrn',
        'atsd' => 'setAtsd',
        'authcode' => 'setAuthcode',
        'authen_result' => 'setAuthenResult',
        'authorised' => 'setAuthorised',
        'avs_result' => 'setAvsResult',
        'bin_commercial' => 'setBinCommercial',
        'bin_debit' => 'setBinDebit',
        'bin_description' => 'setBinDescription',
        'cavv' => 'setCavv',
        'context' => 'setContext',
        'csc_result' => 'setCscResult',
        'currency' => 'setCurrency',
        'datetime' => 'setDatetime',
        'eci' => 'setEci',
        'identifier' => 'setIdentifier',
        'live' => 'setLive',
        'maskedpan' => 'setMaskedpan',
        'merchantid' => 'setMerchantid',
        'result' => 'setResult',
        'result_code' => 'setResultCode',
        'result_message' => 'setResultMessage',
        'scheme' => 'setScheme',
        'sha256' => 'setSha256',
        'trans_status' => 'setTransStatus',
        'transno' => 'setTransno'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'atrn' => 'getAtrn',
        'atsd' => 'getAtsd',
        'authcode' => 'getAuthcode',
        'authen_result' => 'getAuthenResult',
        'authorised' => 'getAuthorised',
        'avs_result' => 'getAvsResult',
        'bin_commercial' => 'getBinCommercial',
        'bin_debit' => 'getBinDebit',
        'bin_description' => 'getBinDescription',
        'cavv' => 'getCavv',
        'context' => 'getContext',
        'csc_result' => 'getCscResult',
        'currency' => 'getCurrency',
        'datetime' => 'getDatetime',
        'eci' => 'getEci',
        'identifier' => 'getIdentifier',
        'live' => 'getLive',
        'maskedpan' => 'getMaskedpan',
        'merchantid' => 'getMerchantid',
        'result' => 'getResult',
        'result_code' => 'getResultCode',
        'result_message' => 'getResultMessage',
        'scheme' => 'getScheme',
        'sha256' => 'getSha256',
        'trans_status' => 'getTransStatus',
        'transno' => 'getTransno'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['atrn'] = isset($data['atrn']) ? $data['atrn'] : null;
        $this->container['atsd'] = isset($data['atsd']) ? $data['atsd'] : null;
        $this->container['authcode'] = isset($data['authcode']) ? $data['authcode'] : null;
        $this->container['authen_result'] = isset($data['authen_result']) ? $data['authen_result'] : null;
        $this->container['authorised'] = isset($data['authorised']) ? $data['authorised'] : null;
        $this->container['avs_result'] = isset($data['avs_result']) ? $data['avs_result'] : null;
        $this->container['bin_commercial'] = isset($data['bin_commercial']) ? $data['bin_commercial'] : null;
        $this->container['bin_debit'] = isset($data['bin_debit']) ? $data['bin_debit'] : null;
        $this->container['bin_description'] = isset($data['bin_description']) ? $data['bin_description'] : null;
        $this->container['cavv'] = isset($data['cavv']) ? $data['cavv'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['csc_result'] = isset($data['csc_result']) ? $data['csc_result'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['datetime'] = isset($data['datetime']) ? $data['datetime'] : null;
        $this->container['eci'] = isset($data['eci']) ? $data['eci'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['live'] = isset($data['live']) ? $data['live'] : null;
        $this->container['maskedpan'] = isset($data['maskedpan']) ? $data['maskedpan'] : null;
        $this->container['merchantid'] = isset($data['merchantid']) ? $data['merchantid'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['result_code'] = isset($data['result_code']) ? $data['result_code'] : null;
        $this->container['result_message'] = isset($data['result_message']) ? $data['result_message'] : null;
        $this->container['scheme'] = isset($data['scheme']) ? $data['scheme'] : null;
        $this->container['sha256'] = isset($data['sha256']) ? $data['sha256'] : null;
        $this->container['trans_status'] = isset($data['trans_status']) ? $data['trans_status'] : null;
        $this->container['transno'] = isset($data['transno']) ? $data['transno'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['avs_result']) && (mb_strlen($this->container['avs_result']) > 1)) {
            $invalidProperties[] = "invalid value for 'avs_result', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['avs_result']) && (mb_strlen($this->container['avs_result']) < 1)) {
            $invalidProperties[] = "invalid value for 'avs_result', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['csc_result']) && (mb_strlen($this->container['csc_result']) > 1)) {
            $invalidProperties[] = "invalid value for 'csc_result', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['csc_result']) && (mb_strlen($this->container['csc_result']) < 1)) {
            $invalidProperties[] = "invalid value for 'csc_result', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['identifier']) && (mb_strlen($this->container['identifier']) > 50)) {
            $invalidProperties[] = "invalid value for 'identifier', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['identifier']) && (mb_strlen($this->container['identifier']) < 4)) {
            $invalidProperties[] = "invalid value for 'identifier', the character length must be bigger than or equal to 4.";
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
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount The amount of the transaction processed.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets atrn
     *
     * @return string|null
     */
    public function getAtrn()
    {
        return $this->container['atrn'];
    }

    /**
     * Sets atrn
     *
     * @param string|null $atrn A reference number provided by the acquirer for a transaction it can be used to cross reference transactions with an Acquirers reporting panel.
     *
     * @return $this
     */
    public function setAtrn($atrn)
    {
        $this->container['atrn'] = $atrn;

        return $this;
    }

    /**
     * Gets atsd
     *
     * @return string|null
     */
    public function getAtsd()
    {
        return $this->container['atsd'];
    }

    /**
     * Sets atsd
     *
     * @param string|null $atsd Additional Transaction Security Data used for ecommerce transactions to decipher security capabilities and attempts against a transaction.
     *
     * @return $this
     */
    public function setAtsd($atsd)
    {
        $this->container['atsd'] = $atsd;

        return $this;
    }

    /**
     * Gets authcode
     *
     * @return string|null
     */
    public function getAuthcode()
    {
        return $this->container['authcode'];
    }

    /**
     * Sets authcode
     *
     * @param string|null $authcode The authorisation code as returned by the card issuer or acquiring bank when a transaction has successfully   been authorised. Authorisation codes contain alphanumeric values. Whilst the code confirms authorisation it   should not be used to determine whether a transaction was successfully processed. For instance an auth code   may be returned when a transaction has been subsequently declined due to a CSC mismatch.
     *
     * @return $this
     */
    public function setAuthcode($authcode)
    {
        $this->container['authcode'] = $authcode;

        return $this;
    }

    /**
     * Gets authen_result
     *
     * @return string|null
     */
    public function getAuthenResult()
    {
        return $this->container['authen_result'];
    }

    /**
     * Sets authen_result
     *
     * @param string|null $authen_result The result of any authentication using 3d_secure authorisation against ecommerce transactions. Values are | Value | Description | |-------|-------------| | Y | Authentication Successful. The Cardholder's password was successfully validated. | | N | Authentication Failed. Customer failed or cancelled authentication, transaction denied. | | A | Attempts Processing Performed Authentication could not be completed but a proof of authentication attempt (CAVV) was generated | | U | Authentication Could Not Be Performed Authentication could not be completed, due to technical or other problem |
     *
     * @return $this
     */
    public function setAuthenResult($authen_result)
    {
        $this->container['authen_result'] = $authen_result;

        return $this;
    }

    /**
     * Gets authorised
     *
     * @return bool|null
     */
    public function getAuthorised()
    {
        return $this->container['authorised'];
    }

    /**
     * Sets authorised
     *
     * @param bool|null $authorised A boolean definition that indicates that the transaction was authorised. It will return false if the transaction  was declined, rejected or cancelled due to CSC matching failures. Attention should be referenced to the AuthResult and Response code for accurate determination of the result.
     *
     * @return $this
     */
    public function setAuthorised($authorised)
    {
        $this->container['authorised'] = $authorised;

        return $this;
    }

    /**
     * Gets avs_result
     *
     * @return string|null
     */
    public function getAvsResult()
    {
        return $this->container['avs_result'];
    }

    /**
     * Sets avs_result
     *
     * @param string|null $avs_result The AVS result codes determine the result of checking the AVS values within the Address Verification fraud system. If a transaction is declined due to the AVS code not matching, this value can help determine the reason for the decline.   | Code | Description |  |------|------------|  | Y | Address and 5 digit post code match |  | M | Street address and Postal codes match for international transaction |  | U | No AVS data available from issuer auth system |  | A | Addres matches, post code does not |  | I | Address information verified for international transaction |  | Z | 5 digit post code matches, Address does not |  | W | 9 digit post code matches, Address does not |  | X | Postcode and address match |  | B | Postal code not verified due to incompatible formats |  | P | Postal codes match. Street address not verified due to to incompatible formats |  | E | AVS Error |  | C | Street address and Postal code not verified due to incompatible formats |  | D | Street address and postal codes match |  |   | No information |  | N | Neither postcode nor address match |  | R | Retry, System unavailble or Timed Out |  | S | AVS Service not supported by issuer or processor |  | G | Issuer does not participate in AVS |
     *
     * @return $this
     */
    public function setAvsResult($avs_result)
    {
        if (!is_null($avs_result) && (mb_strlen($avs_result) > 1)) {
            throw new \InvalidArgumentException('invalid length for $avs_result when calling AuthResponse., must be smaller than or equal to 1.');
        }
        if (!is_null($avs_result) && (mb_strlen($avs_result) < 1)) {
            throw new \InvalidArgumentException('invalid length for $avs_result when calling AuthResponse., must be bigger than or equal to 1.');
        }

        $this->container['avs_result'] = $avs_result;

        return $this;
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
     * @param bool|null $bin_commercial Determines whether the bin range was found to be a commercial or business card.
     *
     * @return $this
     */
    public function setBinCommercial($bin_commercial)
    {
        $this->container['bin_commercial'] = $bin_commercial;

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
     * @param bool|null $bin_debit Determines whether the bin range was found to be a debit card. If false the card was considered as a credit card.
     *
     * @return $this
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
     * @param string|null $bin_description A description of the bin range found for the card.
     *
     * @return $this
     */
    public function setBinDescription($bin_description)
    {
        $this->container['bin_description'] = $bin_description;

        return $this;
    }

    /**
     * Gets cavv
     *
     * @return string|null
     */
    public function getCavv()
    {
        return $this->container['cavv'];
    }

    /**
     * Sets cavv
     *
     * @param string|null $cavv The cardholder authentication verification value which can be returned for verification purposes of the authenticated  transaction for dispute realisation.
     *
     * @return $this
     */
    public function setCavv($cavv)
    {
        $this->container['cavv'] = $cavv;

        return $this;
    }

    /**
     * Gets context
     *
     * @return string|null
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param string|null $context The context which processed the transaction, can be used for support purposes to trace transactions.
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets csc_result
     *
     * @return string|null
     */
    public function getCscResult()
    {
        return $this->container['csc_result'];
    }

    /**
     * Sets csc_result
     *
     * @param string|null $csc_result The CSC rseult codes determine the result of checking the provided CSC value within the Card Security Code fraud system. If a transaction is declined due to the CSC code not matching, this value can help determine the reason for the decline.   | Code | Description |  |------|------------|  |   | No information |  | M | Card verification data matches |  | N | Card verification data was checked but did not match |  | P | Card verification was not processed |  | S | The card verification data should be on the card but the merchant indicates that it is not |  | U | The card issuer is not certified |
     *
     * @return $this
     */
    public function setCscResult($csc_result)
    {
        if (!is_null($csc_result) && (mb_strlen($csc_result) > 1)) {
            throw new \InvalidArgumentException('invalid length for $csc_result when calling AuthResponse., must be smaller than or equal to 1.');
        }
        if (!is_null($csc_result) && (mb_strlen($csc_result) < 1)) {
            throw new \InvalidArgumentException('invalid length for $csc_result when calling AuthResponse., must be bigger than or equal to 1.');
        }

        $this->container['csc_result'] = $csc_result;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The currency the transaction was processed in. This is an `ISO4217` alpha currency value.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        if (!is_null($currency) && (mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling AuthResponse., must be smaller than or equal to 3.');
        }
        if (!is_null($currency) && (mb_strlen($currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling AuthResponse., must be bigger than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets datetime
     *
     * @return \DateTime|null
     */
    public function getDatetime()
    {
        return $this->container['datetime'];
    }

    /**
     * Sets datetime
     *
     * @param \DateTime|null $datetime The UTC date time of the transaction in ISO data time format.
     *
     * @return $this
     */
    public function setDatetime($datetime)
    {
        $this->container['datetime'] = $datetime;

        return $this;
    }

    /**
     * Gets eci
     *
     * @return string|null
     */
    public function getEci()
    {
        return $this->container['eci'];
    }

    /**
     * Sets eci
     *
     * @param string|null $eci An Electronic Commerce Indicator (ECI) used to identify the result of authentication using 3DSecure.
     *
     * @return $this
     */
    public function setEci($eci)
    {
        $this->container['eci'] = $eci;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string|null $identifier The identifier provided within the request.
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        if (!is_null($identifier) && (mb_strlen($identifier) > 50)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling AuthResponse., must be smaller than or equal to 50.');
        }
        if (!is_null($identifier) && (mb_strlen($identifier) < 4)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling AuthResponse., must be bigger than or equal to 4.');
        }

        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets live
     *
     * @return bool|null
     */
    public function getLive()
    {
        return $this->container['live'];
    }

    /**
     * Sets live
     *
     * @param bool|null $live Used to identify that a tranasction was processed on a live authorisation platform.
     *
     * @return $this
     */
    public function setLive($live)
    {
        $this->container['live'] = $live;

        return $this;
    }

    /**
     * Gets maskedpan
     *
     * @return string|null
     */
    public function getMaskedpan()
    {
        return $this->container['maskedpan'];
    }

    /**
     * Sets maskedpan
     *
     * @param string|null $maskedpan A masked value of the card number used for processing displaying limited values that can be used on a receipt.
     *
     * @return $this
     */
    public function setMaskedpan($maskedpan)
    {
        $this->container['maskedpan'] = $maskedpan;

        return $this;
    }

    /**
     * Gets merchantid
     *
     * @return int|null
     */
    public function getMerchantid()
    {
        return $this->container['merchantid'];
    }

    /**
     * Sets merchantid
     *
     * @param int|null $merchantid The merchant id that processed this transaction.
     *
     * @return $this
     */
    public function setMerchantid($merchantid)
    {
        $this->container['merchantid'] = $merchantid;

        return $this;
    }

    /**
     * Gets result
     *
     * @return int|null
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param int|null $result An integer result that indicates the outcome of the transaction. The Code value below maps to the result value   | Code | Abbrev | Description |  |------|-------|-------------|  | 0 | Declined | Declined |  | 1 | Accepted | Accepted |  | 2 | Rejected | Rejected |  | 3 | Not Attempted | Not Attempted |  | 4 | Referred | Referred |  | 5 | PinRetry | Perform PIN Retry |  | 6 | ForSigVer | Force Signature Verification |  | 7 | Hold | Hold |  | 8 | SecErr | Security Error |  | 9 | CallAcq | Call Acquirer |  | 10 | DNH | Do Not Honour |  | 11 | RtnCrd | Retain Card |  | 12 | ExprdCrd | Expired Card |  | 13 | InvldCrd | Invalid Card No |  | 14 | PinExcd | Pin Tries Exceeded |  | 15 | PinInvld | Pin Invalid |  | 16 | AuthReq | Authentication Required |  | 17 | AuthenFail | Authentication Failed |  | 18 | Verified | Card Verified |  | 19 | Cancelled | Cancelled |  | 20 | Un | Unknown |
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets result_code
     *
     * @return string|null
     */
    public function getResultCode()
    {
        return $this->container['result_code'];
    }

    /**
     * Sets result_code
     *
     * @param string|null $result_code The result code as defined in the Response Codes Reference for example 000 is an accepted live transaction whilst 001 is an accepted test transaction. Result codes identify the source of success and failure. Codes may start with an alpha character i.e. C001 indicating a type of error such as a card validation error.
     *
     * @return $this
     */
    public function setResultCode($result_code)
    {
        $this->container['result_code'] = $result_code;

        return $this;
    }

    /**
     * Gets result_message
     *
     * @return string|null
     */
    public function getResultMessage()
    {
        return $this->container['result_message'];
    }

    /**
     * Sets result_message
     *
     * @param string|null $result_message The message regarding the result which provides further narrative to the result code.
     *
     * @return $this
     */
    public function setResultMessage($result_message)
    {
        $this->container['result_message'] = $result_message;

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
     * @param string|null $scheme A name of the card scheme of the transaction that processed the transaction such as Visa or MasterCard.
     *
     * @return $this
     */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;

        return $this;
    }

    /**
     * Gets sha256
     *
     * @return string|null
     */
    public function getSha256()
    {
        return $this->container['sha256'];
    }

    /**
     * Sets sha256
     *
     * @param string|null $sha256 A SHA256 digest value of the transaction used to validate the response data The digest is calculated by concatenating  * authcode  * amount  * response_code  * merchant_id  * trans_no  * identifier  * licence_key - which is not provided in the response.
     *
     * @return $this
     */
    public function setSha256($sha256)
    {
        $this->container['sha256'] = $sha256;

        return $this;
    }

    /**
     * Gets trans_status
     *
     * @return string|null
     */
    public function getTransStatus()
    {
        return $this->container['trans_status'];
    }

    /**
     * Sets trans_status
     *
     * @param string|null $trans_status Used to identify the status of a transaction. The status is used to track a transaction through its life cycle.  | Id | Description | |----|-------------| | O | Transaction is open for settlement | | A | Transaction is assigned for settlement and can no longer be voided | | S | Transaction has been settled   | | D | Transaction has been declined | | R | Transaction has been rejected | | P | Transaction has been authorised only and awaiting a capture. Used in pre-auth situations | | C | Transaction has been cancelled | | E | Transaction has expired | | I | Transaction has been initialised but no action was able to be carried out | | H | Transaction is awaiting authorisation | | . | Transaction is on hold | | V | Transaction has been verified |
     *
     * @return $this
     */
    public function setTransStatus($trans_status)
    {
        $this->container['trans_status'] = $trans_status;

        return $this;
    }

    /**
     * Gets transno
     *
     * @return int|null
     */
    public function getTransno()
    {
        return $this->container['transno'];
    }

    /**
     * Sets transno
     *
     * @param int|null $transno The resulting transaction number, ordered incrementally from 1 for every merchant_id. The value will default to less than 1 for transactions that do not have a transaction number issued.
     *
     * @return $this
     */
    public function setTransno($transno)
    {
        $this->container['transno'] = $transno;

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


