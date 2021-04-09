<?php

declare(strict_types=1);

namespace PhpCfdi\CeUtils;

use CfdiUtils\Nodes\NodeInterface;
use PhpCfdi\CeUtils\Definitions\Balanza13Definition;
use PhpCfdi\CeUtils\Elements\Balanza13\Balanza;

class BalanzaCreator13 extends AbstractCreator
{
    private Balanza $balanza;

    /**
     * @param  array<string, string>  $attributes
     */
    public function __construct(array $attributes)
    {
        parent::__construct();
        $this->balanza = new Balanza($attributes);
    }

    public function balanza(): Balanza
    {
        return $this->balanza;
    }

    protected function getRootNode(): NodeInterface
    {
        return $this->balanza();
    }

    protected function getXsltLocation(): string
    {
        return Balanza13Definition::XSLT_LOCATION;
    }
}
