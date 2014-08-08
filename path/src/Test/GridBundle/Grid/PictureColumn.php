<?php

namespace Test\GridBundle\Grid;

use APY\DataGridBundle\Grid\Column\Column as Column;

class PictureColumn extends Column{

	function getType(){
		return 'picture';
	}

}


?>
