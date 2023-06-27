<?php

namespace Pyz\Glue\AntelopesApi\Processor\Mapper;

use Generated\Shared\Transfer\AntelopesApiAttributesTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;

class AntelopeMapper
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopesApiAttributesTransfer
     */
    public function mapAntelopeTransferToAntelopesApiAttributesTransfer(AntelopeTransfer $antelopeTransfer): AntelopesApiAttributesTransfer
    {
        return (new AntelopesApiAttributesTransfer())->fromArray($antelopeTransfer->toArray(), true);
    }
}
