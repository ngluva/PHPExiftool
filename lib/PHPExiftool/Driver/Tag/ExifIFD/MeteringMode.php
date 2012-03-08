<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class MeteringMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 37383;

    protected $Name = 'MeteringMode';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Metering Mode';

    protected $local_g1 = 'ExifIFD';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unknown',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Average',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Center-weighted average',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Spot',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Multi-spot',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Multi-segment',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Partial',
        ),
        255 => array(
            'Id' => 255,
            'Label' => 'Other',
        ),
    );

}