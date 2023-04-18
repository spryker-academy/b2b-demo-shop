<?php

namespace Pyz\Zed\AntelopeSearch\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\AntelopeSearchTransfer;
use Orm\Zed\AntelopeSearch\Persistence\PyzAntelopeSearch;

class AntelopeSearchMapper
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeSearchTransfer $antelopeSearchTransfer
     * @param \Orm\Zed\AntelopeSearch\Persistence\PyzAntelopeSearch $antelopeSearchEntity
     *
     * @return \Orm\Zed\AntelopeSearch\Persistence\PyzAntelopeSearch
     */
    public function mapAntelopeSearchTransferToAntelopeSearchEntity(
        AntelopeSearchTransfer $antelopeSearchTransfer,
        PyzAntelopeSearch $antelopeSearchEntity,
    ): PyzAntelopeSearch {
        return $antelopeSearchEntity->fromArray($antelopeSearchTransfer->modifiedToArray());
    }

    /**
     * @param \Orm\Zed\AntelopeSearch\Persistence\PyzAntelopeSearch $antelopeSearchEntity
     * @param \Generated\Shared\Transfer\AntelopeSearchTransfer $antelopeSearchTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeSearchTransfer
     */
    public function mapAntelopeSearchEntityToAntelopeSearchTransfer(
        PyzAntelopeSearch $antelopeSearchEntity,
        AntelopeSearchTransfer $antelopeSearchTransfer,
    ): AntelopeSearchTransfer {
        return $antelopeSearchTransfer->fromArray($antelopeSearchEntity->toArray(), true);
    }
}
