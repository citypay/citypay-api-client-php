<?php
/**
 * AuthResponseTest
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
 * AuthResponseTest Class Doc Comment
 *
 * @category    Class
 * @description AuthResponse
 * @package     CityPay
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class AuthResponseTest extends TestCase
{
    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $data = (object)array(
            'amount' => 5500,
            'atrn' => 'atrn1',
            'atsd' => 'a',
            'authcode' => '12345',
            'authen_result' => 'R',
            'authorised' => true,
            'avs_result' => 'G',
            'bin_commercial' => false,
            'bin_debit' => false,
            'bin_description' => 'bin_desc',
            'cavv' => 'cavvvvvvvvvvvvv',
            'context' => '20200812075906AAAGV4',
            'csc_result' => 'C',
            'currency' => 'GBP',
            'datetime' => '2020-08-12T07:59:11Z',
            'eci' => '0',
            'identifier' => 'ident1',
            'live' => true,
            'maskedpan' => '400000******0002',
            'merchantid' => 12345,
            'result' => 1,
            'result_code' => '000',
            'result_message' => 'System: Accepted Transaction',
            'scheme' => 'VISA_BUSINESS',
            'sha256' => 'abcdefg',
            'trans_status' => 'P',
            'transno' => 74875,
        );

        $dataNoIdent = (object)array(
            'amount' => 0,
            'atrn' => '',
            'atsd' => '',
            'authcode' => '',
            'authen_result' => ' ',
            'authorised' => false,
            'avs_result' => ' ',
            'bin_commercial' => false,
            'bin_debit' => false,
            'bin_description' => '',
            'cavv' => '',
            'context' => 'PC.0.A5298ef695b',
            'csc_result' => ' ',
            'currency' => '__',
            'datetime' => '2020-08-12T07:59:11Z',
            'eci' => '0',
            'identifier' => '',
            'live' => true,
            'maskedpan' => 'N/A',
            'merchantid' => 0,
            'result' => 3,
            'result_code' => 'P030',
            'result_message' => 'Request Error: Authorisation invalid (203: Data element not in the required format or value is invalid as defined in Table A.1. threeDSSessionData)',
            'scheme' => '',
            'sha256' => '',
            'trans_status' => '_',
            'transno' => -1,
        );

        $this->instance = ObjectSerializer::deserialize($data, '\CityPay\Model\AuthResponse');
        $this->instanceNoIdent = ObjectSerializer::deserialize($dataNoIdent, '\CityPay\Model\AuthResponse');

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Test "AuthResponse"
     */
    public function testAuthResponse(): void
    {
        $date = DateTime::createFromFormat('Y-m-d\TH:i:s\Z', '2020-08-12T07:59:11Z');

        self::assertEquals(5500, $this->instance['amount']);
        self::assertEquals('atrn1', $this->instance['atrn']);
        self::assertEquals('a', $this->instance['atsd']);
        self::assertEquals('12345', $this->instance['authcode']);
        self::assertEquals('R', $this->instance['authen_result']);
        self::assertTrue($this->instance['authorised']);
        self::assertEquals('G', $this->instance['avs_result']);
        self::assertFalse($this->instance['bin_commercial']);
        self::assertFalse($this->instance['bin_debit']);
        self::assertEquals('bin_desc', $this->instance['bin_description']);
        self::assertEquals('cavvvvvvvvvvvvv', $this->instance['cavv']);
        self::assertEquals('20200812075906AAAGV4', $this->instance['context']);
        self::assertEquals('C', $this->instance['csc_result']);
        self::assertEquals('GBP', $this->instance['currency']);
        self::assertEquals($date, $this->instance['datetime']);
        self::assertEquals('0', $this->instance['eci']);
        self::assertEquals('ident1', $this->instance['identifier']);
        self::assertTrue($this->instance['live']);
        self::assertEquals('400000******0002', $this->instance['maskedpan']);
        self::assertEquals(12345, $this->instance['merchantid']);
        self::assertEquals(1, $this->instance['result']);
        self::assertEquals('000', $this->instance['result_code']);
        self::assertEquals('System: Accepted Transaction', $this->instance['result_message']);
        self::assertEquals('VISA_BUSINESS', $this->instance['scheme']);
        self::assertEquals('abcdefg', $this->instance['sha256']);
        self::assertEquals('P', $this->instance['trans_status']);
        self::assertEquals(74875, $this->instance['transno']);
        self::assertEquals('P030', $this->instanceNoIdent['result_code']);
        self::assertEquals(3, $this->instanceNoIdent['result']);
    }
}
