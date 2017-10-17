<?php

namespace App\Entity\DateTime;

use DateInterval;
use DatePeriod;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Periodo
 * @package App\Entity\DateTime
 */
class Periodo
{
    /**
     * @var DateTimeInterface
     */
    protected $inicio;

    /**
     * @var DateTimeInterface
     */
    protected $fim;

    /**
     * Periodo constructor.
     * @param DateTimeInterface $inicio
     * @param DateTimeInterface $fim
     */
    public function __construct(DateTimeInterface $inicio, DateTimeInterface $fim)
    {
        $this->inicio = $inicio;
        $this->fim = $fim;
    }


}