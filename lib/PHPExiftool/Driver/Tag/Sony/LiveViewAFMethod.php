<?php

namespace PHPExiftool\Driver\Tag\Sony;

class LiveViewAFMethod extends \PHPExiftool\Driver\Tag
{

    protected $Id = 54;

    protected $Name = 'LiveViewAFMethod';

    protected $FullName = 'Sony::CameraSettings3';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Live View AF Method';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'n/a',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Phase-detect AF',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Contrast AF',
        ),
    );

}
