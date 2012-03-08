<?php

namespace PHPExiftool\Driver\Tag\Photoshop;

class DisplayedUnitsY extends \PHPExiftool\Driver\Tag
{

    protected $Id = 6;

    protected $Name = 'DisplayedUnitsY';

    protected $FullName = 'Photoshop::Resolution';

    protected $GroupName = 'Photoshop';

    protected $g0 = 'Photoshop';

    protected $g1 = 'Photoshop';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Displayed Units Y';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'inches',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'cm',
        ),
    );

}