<?php
/**
 * CardHolderAccountApiTest
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
 * The version of the OpenAPI document: 6.0.4
 * Contact: support@citypay.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace CityPay\Model\Model\Api;

use CityPay\Model\Model\Configuration;
use CityPay\Model\Model\ApiException;
use CityPay\Model\Model\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * CardHolderAccountApiTest Class Doc Comment
 *
 * @category Class
 * @package  CityPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CardHolderAccountApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for accountCardDeleteRequest
     *
     * Card Deletion.
     *
     */
    public function testAccountCardDeleteRequest()
    {
    }

    /**
     * Test case for accountCardRegisterRequest
     *
     * Card Registration.
     *
     */
    public function testAccountCardRegisterRequest()
    {
    }

    /**
     * Test case for accountCardStatusRequest
     *
     * Card Status.
     *
     */
    public function testAccountCardStatusRequest()
    {
    }

    /**
     * Test case for accountChangeContactRequest
     *
     * Contact Details Update.
     *
     */
    public function testAccountChangeContactRequest()
    {
    }

    /**
     * Test case for accountCreate
     *
     * Account Create.
     *
     */
    public function testAccountCreate()
    {
    }

    /**
     * Test case for accountDeleteRequest
     *
     * Account Deletion.
     *
     */
    public function testAccountDeleteRequest()
    {
    }

    /**
     * Test case for accountRetrieveRequest
     *
     * Account Retrieval.
     *
     */
    public function testAccountRetrieveRequest()
    {
    }

    /**
     * Test case for accountStatusRequest
     *
     * Account Status.
     *
     */
    public function testAccountStatusRequest()
    {
    }

    /**
     * Test case for chargeRequest
     *
     * Charge.
     *
     */
    public function testChargeRequest()
    {
    }
}
