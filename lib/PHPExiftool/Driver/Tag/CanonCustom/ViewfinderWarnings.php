<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class ViewfinderWarnings extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1034;

    protected $Name = 'ViewfinderWarnings';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Viewfinder Warnings';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Monochrome',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'WB corrected',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'One-touch image quality',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'ISO expansion',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Spot metering',
        ),
    );

}
