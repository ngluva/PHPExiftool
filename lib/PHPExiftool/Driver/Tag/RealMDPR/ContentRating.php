<?php

namespace PHPExiftool\Driver\Tag\RealMDPR;

class ContentRating extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Content Rating';

    protected $Name = 'ContentRating';

    protected $FullName = 'Real::FileInfo';

    protected $GroupName = 'Real-MDPR';

    protected $g0 = 'Real';

    protected $g1 = 'Real-MDPR';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Content Rating';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No Rating',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'All Ages',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Older Children',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Younger Teens',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Older Teens',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Adult Supervision Recommended',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Adults Only',
        ),
    );

}