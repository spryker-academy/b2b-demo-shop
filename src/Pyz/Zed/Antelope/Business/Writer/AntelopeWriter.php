<?php

namespace Pyz\Zed\Antelope\Business\Writer;

use Generated\Shared\Transfer\AntelopeTransfer;
use Pyz\Zed\Antelope\Persistence\AntelopeEntityManagerInterface;

class AntelopeWriter
{
    /**
     * @var \Pyz\Zed\Antelope\Persistence\AntelopeEntityManagerInterface
     */
    protected $antelopeEntityManager;

    /**
     * @param \Pyz\Zed\Antelope\Persistence\AntelopeEntityManagerInterface $antelopeEntityManager
     */
    public function __construct(AntelopeEntityManagerInterface $antelopeEntityManager)
    {
        $this->antelopeEntityManager = $antelopeEntityManager;
    }

    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     */
    public function create(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        return $this->antelopeEntityManager->createAntelope($antelopeTransfer);
    }
}
