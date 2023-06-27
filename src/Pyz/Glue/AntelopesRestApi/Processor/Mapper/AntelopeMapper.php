<?php

namespace Pyz\Glue\AntelopesRestApi\Processor\Mapper;

use Generated\Shared\Transfer\AntelopesRestAttributesTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;

class AntelopeMapper
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeTransfer $antelopeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopesRestAttributesTransfer
     */
    public function mapAntelopeTransferToAntelopeRestAttributesTransfer(AntelopeTransfer $antelopeTransfer): AntelopesRestAttributesTransfer
    {
        return (new AntelopesRestAttributesTransfer())->fromArray($antelopeTransfer->toArray(), true);
    }
}
