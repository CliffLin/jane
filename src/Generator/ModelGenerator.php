<?php

namespace Joli\Jane\Generator;

use Joli\Jane\Generator\Context\Context;
use Joli\Jane\Generator\Model\ClassGenerator;
use Joli\Jane\Generator\Model\GetterSetterGenerator;
use Joli\Jane\Generator\Model\PropertyGenerator;
use Joli\Jane\Model\JsonSchema;

use Joli\Jane\Schema;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

class ModelGenerator implements GeneratorInterface
{
    use ClassGenerator;
    use GetterSetterGenerator;
    use PropertyGenerator;

    const FILE_TYPE_MODEL = 'model';

    /**
     * @var Naming Naming Service
     */
    protected $naming;

    /**
     * @param Naming $naming Naming Service
     */
    public function __construct(Naming $naming)
    {
        $this->naming = $naming;
    }

    /**
     * The naming service
     *
     * @return Naming
     */
    protected function getNaming()
    {
        return $this->naming;
    }

    /**
     * Generate a model given a schema
     *
     * @param Schema  $schema     Schema to generate from
     * @param string  $className  Class to generate
     * @param Context $context    Context for generation
     *
     * @return File[]
     */
    public function generate($schema, $className, Context $context)
    {
        $files = [];

        foreach ($schema->getClasses() as $class) {
            $properties = [];
            $methods    = [];

            foreach ($class->getProperties() as $property) {
                $properties[] = $this->createProperty($property->getName(), $property->getType(), $schema->getNamespace()."\\Model");
                $methods[]    = $this->createGetter($property->getName(), $property->getType(), $schema->getNamespace()."\\Model");
                $methods[]    = $this->createSetter($property->getName(), $property->getType(), $schema->getNamespace()."\\Model");
            }

            $model = $this->createModel(
                $class->getName(),
                $properties,
                $methods
            );

            $namespace = new Stmt\Namespace_(new Name($schema->getNamespace()."\\Model"), [$model]);

            $files[] = new File($schema->getDirectory().'/Model/'.$class->getName().'.php', $namespace, self::FILE_TYPE_MODEL);
        }

        return $files;
    }
}
