<?php
namespace Joli\Jane\Model;

class JsonSchema
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $dollarSchema;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var mixed
     */
    protected $default;

    /**
     * @var float
     */
    protected $multipleOf;

    /**
     * @var float
     */
    protected $maximum;

    /**
     * @var bool
     */
    protected $exclusiveMaximum;

    /**
     * @var float
     */
    protected $minimum;

    /**
     * @var bool
     */
    protected $exclusiveMinimum;

    /**
     * @var int
     */
    protected $maxLength;

    /**
     * @var int|mixed
     */
    protected $minLength;

    /**
     * @var string
     */
    protected $pattern;

    /**
     * @var bool|\Joli\Jane\Model\JsonSchema
     */
    protected $additionalItems;

    /**
     * @var \Joli\Jane\Model\JsonSchema|\Joli\Jane\Model\JsonSchema[]
     */
    protected $items;

    /**
     * @var int
     */
    protected $maxItems;

    /**
     * @var int|mixed
     */
    protected $minItems;

    /**
     * @var bool
     */
    protected $uniqueItems;

    /**
     * @var int
     */
    protected $maxProperties;

    /**
     * @var int|mixed
     */
    protected $minProperties;

    /**
     * @var string[]
     */
    protected $required;

    /**
     * @var bool|\Joli\Jane\Model\JsonSchema
     */
    protected $additionalProperties;

    /**
     * @var \Joli\Jane\Model\JsonSchema[]
     */
    protected $definitions;

    /**
     * @var \Joli\Jane\Model\JsonSchema[]
     */
    protected $properties;

    /**
     * @var \Joli\Jane\Model\JsonSchema[]
     */
    protected $patternProperties;

    /**
     * @var \Joli\Jane\Model\JsonSchema[]|string[][]
     */
    protected $dependencies;

    /**
     * @var array
     */
    protected $enum;

    /**
     * @var mixed|mixed[]
     */
    protected $type;

    /**
     * @var string
     */
    protected $format;

    /**
     * @var \Joli\Jane\Model\JsonSchema[]
     */
    protected $allOf;

    /**
     * @var \Joli\Jane\Model\JsonSchema[]
     */
    protected $anyOf;

    /**
     * @var \Joli\Jane\Model\JsonSchema[]
     */
    protected $oneOf;

    /**
     * @var \Joli\Jane\Model\JsonSchema
     */
    protected $not;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDollarSchema()
    {
        return $this->dollarSchema;
    }

    /**
     * @param string $dollarSchema
     */
    public function setDollarSchema($dollarSchema)
    {
        $this->dollarSchema = $dollarSchema;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param mixed $default
     */
    public function setDefault($default)
    {
        $this->default = $default;
    }

    /**
     * @return float
     */
    public function getMultipleOf()
    {
        return $this->multipleOf;
    }

    /**
     * @param float $multipleOf
     */
    public function setMultipleOf($multipleOf)
    {
        $this->multipleOf = $multipleOf;
    }

    /**
     * @return float
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * @param float $maximum
     */
    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;
    }

    /**
     * @return bool
     */
    public function getExclusiveMaximum()
    {
        return $this->exclusiveMaximum;
    }

    /**
     * @param bool $exclusiveMaximum
     */
    public function setExclusiveMaximum($exclusiveMaximum)
    {
        $this->exclusiveMaximum = $exclusiveMaximum;
    }

    /**
     * @return float
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * @param float $minimum
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;
    }

    /**
     * @return bool
     */
    public function getExclusiveMinimum()
    {
        return $this->exclusiveMinimum;
    }

    /**
     * @param bool $exclusiveMinimum
     */
    public function setExclusiveMinimum($exclusiveMinimum)
    {
        $this->exclusiveMinimum = $exclusiveMinimum;
    }

    /**
     * @return int
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * @param int $maxLength
     */
    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;
    }

    /**
     * @return int|mixed
     */
    public function getMinLength()
    {
        return $this->minLength;
    }

    /**
     * @param int|mixed $minLength
     */
    public function setMinLength($minLength)
    {
        $this->minLength = $minLength;
    }

    /**
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param string $pattern
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
    }

    /**
     * @return bool|\Joli\Jane\Model\JsonSchema
     */
    public function getAdditionalItems()
    {
        return $this->additionalItems;
    }

    /**
     * @param JsonSchema $additionalItems
     */
    public function setAdditionalItems($additionalItems)
    {
        $this->additionalItems = $additionalItems;
    }

    /**
     * @return \Joli\Jane\Model\JsonSchema|\Joli\Jane\Model\JsonSchema[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param JsonSchema[] $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return int
     */
    public function getMaxItems()
    {
        return $this->maxItems;
    }

    /**
     * @param int $maxItems
     */
    public function setMaxItems($maxItems)
    {
        $this->maxItems = $maxItems;
    }

    /**
     * @return int|mixed
     */
    public function getMinItems()
    {
        return $this->minItems;
    }

    /**
     * @param int|mixed $minItems
     */
    public function setMinItems($minItems)
    {
        $this->minItems = $minItems;
    }

    /**
     * @return bool
     */
    public function getUniqueItems()
    {
        return $this->uniqueItems;
    }

    /**
     * @param bool $uniqueItems
     */
    public function setUniqueItems($uniqueItems)
    {
        $this->uniqueItems = $uniqueItems;
    }

    /**
     * @return int
     */
    public function getMaxProperties()
    {
        return $this->maxProperties;
    }

    /**
     * @param int $maxProperties
     */
    public function setMaxProperties($maxProperties)
    {
        $this->maxProperties = $maxProperties;
    }

    /**
     * @return int|mixed
     */
    public function getMinProperties()
    {
        return $this->minProperties;
    }

    /**
     * @param int|mixed $minProperties
     */
    public function setMinProperties($minProperties)
    {
        $this->minProperties = $minProperties;
    }

    /**
     * @return string[]
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param string[] $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * @return bool|\Joli\Jane\Model\JsonSchema
     */
    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }

    /**
     * @param JsonSchema $additionalProperties
     */
    public function setAdditionalProperties($additionalProperties)
    {
        $this->additionalProperties = $additionalProperties;
    }

    /**
     * @return \Joli\Jane\Model\JsonSchema[]
     */
    public function getDefinitions()
    {
        return $this->definitions;
    }

    /**
     * @param JsonSchema[] $definitions
     */
    public function setDefinitions($definitions)
    {
        $this->definitions = $definitions;
    }

    /**
     * @return \Joli\Jane\Model\JsonSchema[]
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param JsonSchema[] $properties
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
    }

    /**
     * @return \Joli\Jane\Model\JsonSchema[]
     */
    public function getPatternProperties()
    {
        return $this->patternProperties;
    }

    /**
     * @param JsonSchema[] $patternProperties
     */
    public function setPatternProperties($patternProperties)
    {
        $this->patternProperties = $patternProperties;
    }

    /**
     * @return \Joli\Jane\Model\JsonSchema[]|string[][]
     */
    public function getDependencies()
    {
        return $this->dependencies;
    }

    /**
     * @param Schema[]|string[][] $dependencies
     */
    public function setDependencies($dependencies)
    {
        $this->dependencies = $dependencies;
    }

    /**
     * @return array
     */
    public function getEnum()
    {
        return $this->enum;
    }

    /**
     * @param array $enum
     */
    public function setEnum(array $enum)
    {
        $this->enum = $enum;
    }

    /**
     * @return mixed|mixed[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed|mixed[] $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return \Joli\Jane\Model\JsonSchema[]
     */
    public function getAllOf()
    {
        return $this->allOf;
    }

    /**
     * @param JsonSchema[] $allOf
     */
    public function setAllOf($allOf)
    {
        $this->allOf = $allOf;
    }

    /**
     * @return \Joli\Jane\Model\JsonSchema[]
     */
    public function getAnyOf()
    {
        return $this->anyOf;
    }

    /**
     * @param JsonSchema[] $anyOf
     */
    public function setAnyOf($anyOf)
    {
        $this->anyOf = $anyOf;
    }

    /**
     * @return \Joli\Jane\Model\JsonSchema[]
     */
    public function getOneOf()
    {
        return $this->oneOf;
    }

    /**
     * @param JsonSchema[] $oneOf
     */
    public function setOneOf($oneOf)
    {
        $this->oneOf = $oneOf;
    }

    /**
     * @return \Joli\Jane\Model\JsonSchema
     */
    public function getNot()
    {
        return $this->not;
    }

    /**
     * @param JsonSchema $not
     */
    public function setNot(JsonSchema $not)
    {
        $this->not = $not;
    }
}
