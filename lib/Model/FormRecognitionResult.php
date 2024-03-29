<?php
/**
 * FormRecognitionResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ocrapi
 *
 * The powerful Optical Character Recognition (OCR) APIs let you convert scanned images of pages into recognized text.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * FormRecognitionResult Class Doc Comment
 *
 * @category Class
 * @description The result of extracting form field values
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FormRecognitionResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FormRecognitionResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'successful' => 'bool',
        'field_value_extraction_result' => '\Swagger\Client\Model\FieldResult[]',
        'table_value_extraction_results' => '\Swagger\Client\Model\TableResult[]',
        'diagnostics' => 'string[]',
        'best_match_form_setting_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'successful' => null,
        'field_value_extraction_result' => null,
        'table_value_extraction_results' => null,
        'diagnostics' => null,
        'best_match_form_setting_name' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'successful' => 'Successful',
        'field_value_extraction_result' => 'FieldValueExtractionResult',
        'table_value_extraction_results' => 'TableValueExtractionResults',
        'diagnostics' => 'Diagnostics',
        'best_match_form_setting_name' => 'BestMatchFormSettingName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'successful' => 'setSuccessful',
        'field_value_extraction_result' => 'setFieldValueExtractionResult',
        'table_value_extraction_results' => 'setTableValueExtractionResults',
        'diagnostics' => 'setDiagnostics',
        'best_match_form_setting_name' => 'setBestMatchFormSettingName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'successful' => 'getSuccessful',
        'field_value_extraction_result' => 'getFieldValueExtractionResult',
        'table_value_extraction_results' => 'getTableValueExtractionResults',
        'diagnostics' => 'getDiagnostics',
        'best_match_form_setting_name' => 'getBestMatchFormSettingName'
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
        return self::$swaggerModelName;
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
        $this->container['successful'] = isset($data['successful']) ? $data['successful'] : null;
        $this->container['field_value_extraction_result'] = isset($data['field_value_extraction_result']) ? $data['field_value_extraction_result'] : null;
        $this->container['table_value_extraction_results'] = isset($data['table_value_extraction_results']) ? $data['table_value_extraction_results'] : null;
        $this->container['diagnostics'] = isset($data['diagnostics']) ? $data['diagnostics'] : null;
        $this->container['best_match_form_setting_name'] = isset($data['best_match_form_setting_name']) ? $data['best_match_form_setting_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets successful
     *
     * @return bool
     */
    public function getSuccessful()
    {
        return $this->container['successful'];
    }

    /**
     * Sets successful
     *
     * @param bool $successful True if the operation was successful, false otherwise
     *
     * @return $this
     */
    public function setSuccessful($successful)
    {
        $this->container['successful'] = $successful;

        return $this;
    }

    /**
     * Gets field_value_extraction_result
     *
     * @return \Swagger\Client\Model\FieldResult[]
     */
    public function getFieldValueExtractionResult()
    {
        return $this->container['field_value_extraction_result'];
    }

    /**
     * Sets field_value_extraction_result
     *
     * @param \Swagger\Client\Model\FieldResult[] $field_value_extraction_result Result of form field OCR data extraction
     *
     * @return $this
     */
    public function setFieldValueExtractionResult($field_value_extraction_result)
    {
        $this->container['field_value_extraction_result'] = $field_value_extraction_result;

        return $this;
    }

    /**
     * Gets table_value_extraction_results
     *
     * @return \Swagger\Client\Model\TableResult[]
     */
    public function getTableValueExtractionResults()
    {
        return $this->container['table_value_extraction_results'];
    }

    /**
     * Sets table_value_extraction_results
     *
     * @param \Swagger\Client\Model\TableResult[] $table_value_extraction_results Result of form table OCR data extraction
     *
     * @return $this
     */
    public function setTableValueExtractionResults($table_value_extraction_results)
    {
        $this->container['table_value_extraction_results'] = $table_value_extraction_results;

        return $this;
    }

    /**
     * Gets diagnostics
     *
     * @return string[]
     */
    public function getDiagnostics()
    {
        return $this->container['diagnostics'];
    }

    /**
     * Sets diagnostics
     *
     * @param string[] $diagnostics Diagnostic images - default is null, enable diagnostics=true to populate this parameter with one image per field
     *
     * @return $this
     */
    public function setDiagnostics($diagnostics)
    {
        $this->container['diagnostics'] = $diagnostics;

        return $this;
    }

    /**
     * Gets best_match_form_setting_name
     *
     * @return string
     */
    public function getBestMatchFormSettingName()
    {
        return $this->container['best_match_form_setting_name'];
    }

    /**
     * Sets best_match_form_setting_name
     *
     * @param string $best_match_form_setting_name Optional; populated when using photo/recognize/form/advanced with the Setting Name of the best-matching highest-relevance form
     *
     * @return $this
     */
    public function setBestMatchFormSettingName($best_match_form_setting_name)
    {
        $this->container['best_match_form_setting_name'] = $best_match_form_setting_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


