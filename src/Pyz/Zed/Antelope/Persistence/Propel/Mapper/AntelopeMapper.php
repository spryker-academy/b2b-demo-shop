<?php

namespace Pyz\Zed\Antelope\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\AntelopeTransfer;
use Orm\Zed\Antelope\Persistence\PyzAntelope;

class AntelopeMapper
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     * @param \Orm\Zed\Antelope\Persistence\PyzAntelope $antelopeEntity
     *
     * @return \Orm\Zed\Antelope\Persistence\PyzAntelope
     */
    public function mapAntelopeTransferToAntelopeEntity(
        AntelopeTransfer $antelopeTransfer,
        PyzAntelope $antelopeEntity,
    ): PyzAntelope {
        return $antelopeEntity->fromArray($antelopeTransfer->modifiedToArray());
    }

    /**
     * @param \Orm\Zed\Antelope\Persistence\PyzAntelope $antelopeEntity
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     */
    public function mapAntelopeEntityToAntelopeTransfer(
        PyzAntelope $antelopeEntity,
        AntelopeTransfer $antelopeTransfer,
    ): AntelopeTransfer {
        return $antelopeTransfer->fromArray($antelopeEntity->toArray(), true);
    }
}
