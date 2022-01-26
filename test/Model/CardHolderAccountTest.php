<?php
/**
 * CardHolderAccountTest
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
 * Please update the test case below to test the model.
 */

namespace CityPay;

use PHPUnit\Framework\TestCase;
use DateTime;

/**
 * CardHolderAccountTest Class Doc Comment
 *
 * @category    Class
 * @description CardHolderAccount
 * @package     CityPay
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class CardHolderAccountTest extends TestCase
{
    /**
     * @var array|Model\ModelInterface|DateTime|object|\SplFileObject|null
     */
    private $instance;

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $data = '{
        "account_id": "abc123",
        "cards": [{
                      "bin_commercial": false,
                      "bin_corporate": false,
                      "bin_country_issued": "GBR",
                      "bin_currency": "GBP",
                      "bin_description": "Visa Classic",
                      "bin_eu": false,
                      "card_id": "2U1XV3PJSeUXFNzXidACn2TyCzAK",
                      "card_status": "ACTIVE",
                      "default": true,
                      "expmonth": 7,
                      "expyear": 2022,
                      "label": "TestVisa/0002",
                      "label2": "TestVisa/0002,Exp:7/2022",
                      "scheme": "TestVisa",
                      "token": "ctPCzxq4WxEwWbkG7whRPLRCG27vYFNzsEDNihYmDwqsBc5QEXnFRvq2j5oRyb56ErRVEQaBN7PFMEDtjQQXDQpfxKkp3AxbyeGo61RhKBjFTFegaP4LBZUxFZimsXW8Deae9VyhWSgS2o8AXzTJU9UP3bo8kRcpataxuH3fJj3JHDnyeZt"
                  }],
        "contact": {
            "address1": "7 Esplanade",
            "address2": "",
            "address3": "",
            "area": "St Helier",
            "company": "CityPay Ltd",
            "country": "JE",
            "email": "support@citypay.com",
            "firstname": "Joe",
            "lastname": "Wicks",
            "mobile_no": "077112123456",
            "postcode": "JE2 3QA",
            "telephone_no": "+4415341234567",
            "title": "Mr"},
        "date_created": "2020-08-01T09:15:24Z",
        "default_card_id": "2U1XV3PJSeUXFNzXidACn2TyCzAK",
        "default_card_index": 0,
        "status": "ACTIVE",
        "unique_id": "Ew3BKeWNdL3qKQU7XK7Sbt2eAL5WFW4AfoASDSA"
    }';

        $this->instance = ObjectSerializer::deserialize($data, '\CityPay\Model\CardHolderAccount');

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Test "CardHolderAccount"
     */
    public function testCardHolderAccount(): void
    {
        $date = DateTime::createFromFormat('Y-m-d\TH:i:s\Z', '2020-08-01T09:15:24Z');

        self::assertEquals("abc123", $this->instance['account_id']);
        self::assertFalse($this->instance['cards'][0]['bin_commercial']);
        self::assertFalse($this->instance['cards'][0]['bin_corporate']);
        self::assertEquals('GBR', $this->instance['cards'][0]['bin_country_issued']);
        self::assertEquals('GBP', $this->instance['cards'][0]['bin_currency']);
        self::assertEquals('Visa Classic', $this->instance['cards'][0]['bin_description']);
        self::assertFalse($this->instance['cards'][0]['bin_eu']);
        self::assertEquals('2U1XV3PJSeUXFNzXidACn2TyCzAK', $this->instance['cards'][0]['card_id']);
        self::assertEquals('ACTIVE', $this->instance['cards'][0]['card_status']);
        self::assertTrue($this->instance['cards'][0]['default']);
        self::assertEquals(7, $this->instance['cards'][0]['expmonth']);
        self::assertEquals(2022, $this->instance['cards'][0]['expyear']);
        self::assertEquals('TestVisa/0002', $this->instance['cards'][0]['label']);
        self::assertEquals('TestVisa/0002,Exp:7/2022', $this->instance['cards'][0]['label2']);
        self::assertEquals('TestVisa', $this->instance['cards'][0]['scheme']);
        self::assertEquals('ctPCzxq4WxEwWbkG7whRPLRCG27vYFNzsEDNihYmDwqsBc5QEXnFRvq2j5oRyb56ErRVEQaBN7PFMEDtjQQXDQpfxKkp3AxbyeGo61RhKBjFTFegaP4LBZUxFZimsXW8Deae9VyhWSgS2o8AXzTJU9UP3bo8kRcpataxuH3fJj3JHDnyeZt', $this->instance['cards'][0]['token']);
        self::assertEquals('7 Esplanade', $this->instance['contact']['address1']);
        self::assertEquals('', $this->instance['contact']['address2']);
        self::assertEquals('', $this->instance['contact']['address3']);
        self::assertEquals('St Helier', $this->instance['contact']['area']);
        self::assertEquals('CityPay Ltd', $this->instance['contact']['company']);
        self::assertEquals('JE', $this->instance['contact']['country']);
        self::assertEquals('support@citypay.com', $this->instance['contact']['email']);
        self::assertEquals('Joe', $this->instance['contact']['firstname']);
        self::assertEquals('Wicks', $this->instance['contact']['lastname']);
        self::assertEquals('077112123456', $this->instance['contact']['mobile_no']);
        self::assertEquals('JE2 3QA', $this->instance['contact']['postcode']);
        self::assertEquals('+4415341234567', $this->instance['contact']['telephone_no']);
        self::assertEquals('Mr', $this->instance['contact']['title']);
        self::assertEquals($date, $this->instance['date_created']);
        self::assertEquals('2U1XV3PJSeUXFNzXidACn2TyCzAK', $this->instance['default_card_id']);
        self::assertEquals(0, $this->instance['default_card_index']);
        self::assertEquals('ACTIVE', $this->instance['status']);
        self::assertEquals('Ew3BKeWNdL3qKQU7XK7Sbt2eAL5WFW4AfoASDSA', $this->instance['unique_id']);

    }
}
