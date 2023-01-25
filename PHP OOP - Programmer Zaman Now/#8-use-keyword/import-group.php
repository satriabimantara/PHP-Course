<?php
require_once 'data/Conflict.php';
require_once 'data/Helper.php';

use Data\One\{Conflict as Conflict1, Sample, Dummy};
use function Helper\{helpMe as help};

var_dump(new Conflict1());
help();
