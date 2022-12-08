<?php
/**
 * ChargeRequest
 *
 * PHP version 7.4
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
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * ChargeRequest Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ChargeRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChargeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'int',
        'avs_postcode_policy' => 'string',
        'cardholder_agreement' => 'string',
        'csc' => 'string',
        'csc_policy' => 'string',
        'currency' => 'string',
        'duplicate_policy' => 'string',
        'identifier' => 'string',
        'initiation' => 'string',
        'match_avsa' => 'string',
        'merchantid' => 'int',
        'threedsecure' => '\CityPay\Model\ThreeDSecure',
        'token' => 'string',
        'trans_info' => 'string',
        'trans_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => 'int32',
        'avs_postcode_policy' => null,
        'cardholder_agreement' => null,
        'csc' => null,
        'csc_policy' => null,
        'currency' => null,
        'duplicate_policy' => null,
        'identifier' => null,
        'initiation' => null,
        'match_avsa' => null,
        'merchantid' => 'int32',
        'threedsecure' => null,
        'token' => 'base58',
        'trans_info' => null,
        'trans_type' => null
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
        'avs_postcode_policy' => 'avs_postcode_policy',
        'cardholder_agreement' => 'cardholder_agreement',
        'csc' => 'csc',
        'csc_policy' => 'csc_policy',
        'currency' => 'currency',
        'duplicate_policy' => 'duplicate_policy',
        'identifier' => 'identifier',
        'initiation' => 'initiation',
        'match_avsa' => 'match_avsa',
        'merchantid' => 'merchantid',
        'threedsecure' => 'threedsecure',
        'token' => 'token',
        'trans_info' => 'trans_info',
        'trans_type' => 'trans_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'avs_postcode_policy' => 'setAvsPostcodePolicy',
        'cardholder_agreement' => 'setCardholderAgreement',
        'csc' => 'setCsc',
        'csc_policy' => 'setCscPolicy',
        'currency' => 'setCurrency',
        'duplicate_policy' => 'setDuplicatePolicy',
        'identifier' => 'setIdentifier',
        'initiation' => 'setInitiation',
        'match_avsa' => 'setMatchAvsa',
        'merchantid' => 'setMerchantid',
        'threedsecure' => 'setThreedsecure',
        'token' => 'setToken',
        'trans_info' => 'setTransInfo',
        'trans_type' => 'setTransType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'avs_postcode_policy' => 'getAvsPostcodePolicy',
        'cardholder_agreement' => 'getCardholderAgreement',
        'csc' => 'getCsc',
        'csc_policy' => 'getCscPolicy',
        'currency' => 'getCurrency',
        'duplicate_policy' => 'getDuplicatePolicy',
        'identifier' => 'getIdentifier',
        'initiation' => 'getInitiation',
        'match_avsa' => 'getMatchAvsa',
        'merchantid' => 'getMerchantid',
        'threedsecure' => 'getThreedsecure',
        'token' => 'getToken',
        'trans_info' => 'getTransInfo',
        'trans_type' => 'getTransType'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['avs_postcode_policy'] = $data['avs_postcode_policy'] ?? null;
        $this->container['cardholder_agreement'] = $data['cardholder_agreement'] ?? null;
        $this->container['csc'] = $data['csc'] ?? null;
        $this->container['csc_policy'] = $data['csc_policy'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['duplicate_policy'] = $data['duplicate_policy'] ?? null;
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['initiation'] = $data['initiation'] ?? null;
        $this->container['match_avsa'] = $data['match_avsa'] ?? null;
        $this->container['merchantid'] = $data['merchantid'] ?? null;
        $this->container['threedsecure'] = $data['threedsecure'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['trans_info'] = $data['trans_info'] ?? null;
        $this->container['trans_type'] = $data['trans_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (!is_null($this->container['cardholder_agreement']) && (mb_strlen($this->container['cardholder_agreement']) > 1)) {
            $invalidProperties[] = "invalid value for 'cardholder_agreement', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['csc']) && (mb_strlen($this->container['csc']) > 4)) {
            $invalidProperties[] = "invalid value for 'csc', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['csc']) && (mb_strlen($this->container['csc']) < 3)) {
            $invalidProperties[] = "invalid value for 'csc', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if ((mb_strlen($this->container['identifier']) > 50)) {
            $invalidProperties[] = "invalid value for 'identifier', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['identifier']) < 4)) {
            $invalidProperties[] = "invalid value for 'identifier', the character length must be bigger than or equal to 4.";
        }

        if (!is_null($this->container['initiation']) && (mb_strlen($this->container['initiation']) > 1)) {
            $invalidProperties[] = "invalid value for 'initiation', the character length must be smaller than or equal to 1.";
        }

        if ($this->container['merchantid'] === null) {
            $invalidProperties[] = "'merchantid' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if (!is_null($this->container['trans_info']) && (mb_strlen($this->container['trans_info']) > 50)) {
            $invalidProperties[] = "invalid value for 'trans_info', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['trans_type']) && (mb_strlen($this->container['trans_type']) > 1)) {
            $invalidProperties[] = "invalid value for 'trans_type', the character length must be smaller than or equal to 1.";
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
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount The amount to authorise in the lowest unit of currency with a variable length to a maximum of 12 digits.  No decimal points are to be included and no divisional characters such as 1,024.  The amount should be the total amount required for the transaction.  For example with GBP £1,021.95 the amount value is 102195.
     *
     * @return self
     */
    public function setAmount($amount)
    {


        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets avs_postcode_policy
     *
     * @return string|null
     */
    public function getAvsPostcodePolicy()
    {
        return $this->container['avs_postcode_policy'];
    }

    /**
     * Sets avs_postcode_policy
     *
     * @param string|null $avs_postcode_policy A policy value which determines whether an AVS postcode policy is enforced or bypassed.  Values are  `0` for the default policy (default value if not supplied). Your default values are determined by your account manager on setup of the account.   `1` for an enforced policy. Transactions that are enforced will be rejected if the AVS postcode numeric value does not match.   `2` to bypass. Transactions that are bypassed will be allowed through even if the postcode did not match.   `3` to ignore. Transactions that are ignored will bypass the result and not send postcode details for authorisation.
     *
     * @return self
     */
    public function setAvsPostcodePolicy($avs_postcode_policy)
    {
        $this->container['avs_postcode_policy'] = $avs_postcode_policy;

        return $this;
    }

    /**
     * Gets cardholder_agreement
     *
     * @return string|null
     */
    public function getCardholderAgreement()
    {
        return $this->container['cardholder_agreement'];
    }

    /**
     * Sets cardholder_agreement
     *
     * @param string|null $cardholder_agreement Merchant-initiated transactions (MITs) are payments you trigger, where the cardholder has previously consented to you carrying out such payments. These may be scheduled (such as recurring payments and installments) or unscheduled (like account top-ups triggered by balance thresholds and no-show charges).  Scheduled --- These are regular payments using stored card details, like installments or a monthly subscription fee.  - `I` Instalment - A single purchase of goods or services billed to a cardholder in multiple transactions, over a period of time agreed by the cardholder and you.  - `R` Recurring - Transactions processed at fixed, regular intervals not to exceed one year between transactions, representing an agreement between a cardholder and you to purchase goods or services provided over a period of time.  Unscheduled --- These are payments using stored card details that do not occur on a regular schedule, like top-ups for a digital wallet triggered by the balance falling below a certain threshold.  - `A` Reauthorisation - a purchase made after the original purchase. A common scenario is delayed/split shipments.  - `C` Unscheduled Payment - A transaction using a stored credential for a fixed or variable amount that does not occur on a scheduled or regularly occurring transaction date. This includes account top-ups triggered by balance thresholds.  - `D` Delayed Charge - A delayed charge is typically used in hotel, cruise lines and vehicle rental environments to perform a supplemental account charge after original services are rendered.  - `L` Incremental - An incremental authorisation is typically found in hotel and car rental environments, where the cardholder has agreed to pay for any service incurred during the duration of the contract. An incremental authorisation is where you need to seek authorisation of further funds in addition to what you have originally requested. A common scenario is additional services charged to the contract, such as extending a stay in a hotel.  - `S` Resubmission - When the original purchase occurred, but you were not able to get authorisation at the time the goods or services were provided. It should be only used where the goods or services have already been provided, but the authorisation request is declined for insufficient funds.  - `X` No-show - A no-show is a transaction where you are enabled to charge for services which the cardholder entered into an agreement to purchase, but the cardholder did not meet the terms of the agreement.
     *
     * @return self
     */
    public function setCardholderAgreement($cardholder_agreement)
    {
        if (!is_null($cardholder_agreement) && (mb_strlen($cardholder_agreement) > 1)) {
            throw new \InvalidArgumentException('invalid length for $cardholder_agreement when calling ChargeRequest., must be smaller than or equal to 1.');
        }

        $this->container['cardholder_agreement'] = $cardholder_agreement;

        return $this;
    }

    /**
     * Gets csc
     *
     * @return string|null
     */
    public function getCsc()
    {
        return $this->container['csc'];
    }

    /**
     * Sets csc
     *
     * @param string|null $csc The Card Security Code (CSC) (also known as CV2/CVV2) is normally found on the back of the card (American Express has it on the front). The value helps to identify posession of the card as it is not available within the chip or magnetic swipe.  When forwarding the CSC, please ensure the value is a string as some values start with 0 and this will be stripped out by any integer parsing.  The CSC number aids fraud prevention in Mail Order and Internet payments.  Business rules are available on your account to identify whether to accept or decline transactions based on mismatched results of the CSC.  The Payment Card Industry (PCI) requires that at no stage of a transaction should the CSC be stored.  This applies to all entities handling card data.  It should also not be used in any hashing process.  CityPay do not store the value and have no method of retrieving the value once the transaction has been processed. For this reason, duplicate checking is unable to determine the CSC in its duplication check algorithm.
     *
     * @return self
     */
    public function setCsc($csc)
    {
        if (!is_null($csc) && (mb_strlen($csc) > 4)) {
            throw new \InvalidArgumentException('invalid length for $csc when calling ChargeRequest., must be smaller than or equal to 4.');
        }
        if (!is_null($csc) && (mb_strlen($csc) < 3)) {
            throw new \InvalidArgumentException('invalid length for $csc when calling ChargeRequest., must be bigger than or equal to 3.');
        }

        $this->container['csc'] = $csc;

        return $this;
    }

    /**
     * Gets csc_policy
     *
     * @return string|null
     */
    public function getCscPolicy()
    {
        return $this->container['csc_policy'];
    }

    /**
     * Sets csc_policy
     *
     * @param string|null $csc_policy A policy value which determines whether a CSC policy is enforced or bypassed.  Values are  `0` for the default policy (default value if not supplied). Your default values are determined by your account manager on setup of the account.   `1` for an enforced policy. Transactions that are enforced will be rejected if the CSC value does not match.   `2` to bypass. Transactions that are bypassed will be allowed through even if the CSC did not match.   `3` to ignore. Transactions that are ignored will bypass the result and not send the CSC details for authorisation.
     *
     * @return self
     */
    public function setCscPolicy($csc_policy)
    {
        $this->container['csc_policy'] = $csc_policy;

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
     * @param string|null $currency The processing currency for the transaction. Will default to the merchant account currency.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (!is_null($currency) && (mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling ChargeRequest., must be smaller than or equal to 3.');
        }
        if (!is_null($currency) && (mb_strlen($currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling ChargeRequest., must be bigger than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets duplicate_policy
     *
     * @return string|null
     */
    public function getDuplicatePolicy()
    {
        return $this->container['duplicate_policy'];
    }

    /**
     * Sets duplicate_policy
     *
     * @param string|null $duplicate_policy A policy value which determines whether a duplication policy is enforced or bypassed. A duplication check has a window of time set against your account within which it can action. If a previous transaction with matching values occurred within the window, any subsequent transaction will result in a T001 result.  Values are  `0` for the default policy (default value if not supplied). Your default values are determined by your account manager on setup of the account.   `1` for an enforced policy. Transactions that are enforced will be checked for duplication within the duplication window.   `2` to bypass. Transactions that are bypassed will not be checked for duplication within the duplication window.   `3` to ignore. Transactions that are ignored will have the same affect as bypass.
     *
     * @return self
     */
    public function setDuplicatePolicy($duplicate_policy)
    {
        $this->container['duplicate_policy'] = $duplicate_policy;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier The identifier of the transaction to process. The value should be a valid reference and may be used to perform  post processing actions and to aid in reconciliation of transactions.  The value should be a valid printable string with ASCII character ranges from 0x32 to 0x127.  The identifier is recommended to be distinct for each transaction such as a [random unique identifier](https://en.wikipedia.org/wiki/Universally_unique_identifier) this will aid in ensuring each transaction is identifiable.  When transactions are processed they are also checked for duplicate requests. Changing the identifier on a subsequent request will ensure that a transaction is considered as different.
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        if ((mb_strlen($identifier) > 50)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling ChargeRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($identifier) < 4)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling ChargeRequest., must be bigger than or equal to 4.');
        }

        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets initiation
     *
     * @return string|null
     */
    public function getInitiation()
    {
        return $this->container['initiation'];
    }

    /**
     * Sets initiation
     *
     * @param string|null $initiation Transactions charged using the API are defined as:  **Cardholder Initiated**: A _cardholder initiated transaction_ (CIT) is where the cardholder selects the card for use for a purchase using previously stored details. An example would be a customer buying an item from your website after being present with their saved card details at checkout.  **Merchant Intiated**: A _merchant initiated transaction_ (MIT) is an authorisation initiated where you as the  merchant submit a cardholders previously stored details without the cardholder's participation. An example would  be a subscription to a membership scheme to debit their card monthly.  MITs have different reasons such as reauthorisation, delayed, unscheduled, incremental, recurring, instalment, no-show or resubmission.  The following values apply   - `M` - specifies that the transaction is initiated by the merchant   - `C` - specifies that the transaction is initiated by the cardholder  Where transactions are merchant initiated, a valid cardholder agreement must be defined.
     *
     * @return self
     */
    public function setInitiation($initiation)
    {
        if (!is_null($initiation) && (mb_strlen($initiation) > 1)) {
            throw new \InvalidArgumentException('invalid length for $initiation when calling ChargeRequest., must be smaller than or equal to 1.');
        }

        $this->container['initiation'] = $initiation;

        return $this;
    }

    /**
     * Gets match_avsa
     *
     * @return string|null
     */
    public function getMatchAvsa()
    {
        return $this->container['match_avsa'];
    }

    /**
     * Sets match_avsa
     *
     * @param string|null $match_avsa A policy value which determines whether an AVS address policy is enforced, bypassed or ignored.  Values are  `0` for the default policy (default value if not supplied). Your default values are determined by your account manager on setup of the account.   `1` for an enforced policy. Transactions that are enforced will be rejected if the AVS address numeric value does not match.   `2` to bypass. Transactions that are bypassed will be allowed through even if the address did not match.   `3` to ignore. Transactions that are ignored will bypass the result and not send address numeric details for authorisation.
     *
     * @return self
     */
    public function setMatchAvsa($match_avsa)
    {
        $this->container['match_avsa'] = $match_avsa;

        return $this;
    }

    /**
     * Gets merchantid
     *
     * @return int
     */
    public function getMerchantid()
    {
        return $this->container['merchantid'];
    }

    /**
     * Sets merchantid
     *
     * @param int $merchantid Identifies the merchant account to perform processing for.
     *
     * @return self
     */
    public function setMerchantid($merchantid)
    {
        $this->container['merchantid'] = $merchantid;

        return $this;
    }

    /**
     * Gets threedsecure
     *
     * @return \CityPay\Model\ThreeDSecure|null
     */
    public function getThreedsecure()
    {
        return $this->container['threedsecure'];
    }

    /**
     * Sets threedsecure
     *
     * @param \CityPay\Model\ThreeDSecure|null $threedsecure threedsecure
     *
     * @return self
     */
    public function setThreedsecure($threedsecure)
    {
        $this->container['threedsecure'] = $threedsecure;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token A tokenised form of a card that belongs to a card holder's account and that has been previously registered. The token is time based and will only be active for a short duration. The value is therefore designed not to be stored remotely for future use.   Tokens will start with ct and are resiliently tamper proof using HMacSHA-256. No sensitive card data is stored internally within the token.   Each card will contain a different token and the value may be different on any retrieval call.   The value can be presented for payment as a selection value to an end user in a web application.
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets trans_info
     *
     * @return string|null
     */
    public function getTransInfo()
    {
        return $this->container['trans_info'];
    }

    /**
     * Sets trans_info
     *
     * @param string|null $trans_info Further information that can be added to the transaction will display in reporting. Can be used for flexible values such as operator id.
     *
     * @return self
     */
    public function setTransInfo($trans_info)
    {
        if (!is_null($trans_info) && (mb_strlen($trans_info) > 50)) {
            throw new \InvalidArgumentException('invalid length for $trans_info when calling ChargeRequest., must be smaller than or equal to 50.');
        }

        $this->container['trans_info'] = $trans_info;

        return $this;
    }

    /**
     * Gets trans_type
     *
     * @return string|null
     */
    public function getTransType()
    {
        return $this->container['trans_type'];
    }

    /**
     * Sets trans_type
     *
     * @param string|null $trans_type The type of transaction being submitted. Normally this value is not required and your account manager may request that you set this field.
     *
     * @return self
     */
    public function setTransType($trans_type)
    {
        if (!is_null($trans_type) && (mb_strlen($trans_type) > 1)) {
            throw new \InvalidArgumentException('invalid length for $trans_type when calling ChargeRequest., must be smaller than or equal to 1.');
        }

        $this->container['trans_type'] = $trans_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


