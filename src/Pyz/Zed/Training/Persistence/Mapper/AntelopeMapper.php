<?php

namespace Pyz\Zed\Training\Persistence\Mapper;

use Generated\Shared\Transfer\AntelopeTransfer;
use Generated\Shared\Transfer\CompanyRoleTransfer;
use Orm\Zed\Antelope\Persistence\PyzAntelope;
use Orm\Zed\CompanyRole\Persistence\SpyCompanyRole;

class AntelopeMapper
{
    /**
     * @param \Orm\Zed\Antelope\Persistence\PyzAntelope $antelopeEntity
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTransfer
     */
    public function mapEntityToAntelopeTransfer(
        PyzAntelope $antelopeEntity,
        AntelopeTransfer $antelopeTransfer
    ): AntelopeTransfer {
        return $antelopeTransfer->fromArray($antelopeEntity->toArray(), true);
    }

    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     * @param \Orm\Zed\Antelope\Persistence\PyzAntelope $antelopeEntity
     *
     * @return \Orm\Zed\Antelope\Persistence\PyzAntelope
     */
    public function mapAntelopeTransferToEntity(
        AntelopeTransfer $antelopeTransfer,
        PyzAntelope $antelopeEntity
    ): PyzAntelope {
        $antelopeEntity->fromArray($antelopeTransfer->modifiedToArray());
        $antelopeEntity->setNew($antelopeTransfer->getIdAntelope() === null);

        return $antelopeEntity;
    }
}
