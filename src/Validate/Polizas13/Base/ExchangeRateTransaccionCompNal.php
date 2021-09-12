<?php

declare(strict_types=1);

namespace PhpCfdi\CeUtils\Validate\Polizas13\Base;

use PhpCfdi\CeUtils\Validate\Common\BaseExchangeRate;

/**
 * Valida el atributo TipCamb en Polizas/Poliza/Transaccion/CompNal
 *
 * PLZ13COMNALEXR - El tipo de cambio se establece únicamente cuando el registro no es en moneda nacional
 * PLZ13COMNALEXR-NNN - El tipo de cambio debe tener un valor en caso de que la moneda sea diferente a moneda nacional
 */
final class ExchangeRateTransaccionCompNal extends BaseExchangeRate
{
    public static function create(): self
    {
        return new self('PLZ13COMNALEXR', 'PLZ:Poliza', 'PLZ:Transaccion', 'PLZ:CompNal');
    }
}
