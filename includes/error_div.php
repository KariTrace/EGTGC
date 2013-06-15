<?php

class errorDIV {

	/**
	 * Generate and Error div with a unique name but standard abilities
	 * @author kari trace
	 * @since 2013-06-15
	 * @param array $param [required]
	 * @return html || boolean
	 */
	public function errorDIV(array $param)
	{
		try {
			echo '<div class="errorDiv_'.$param['class'];
			foreach ($param as $key=>$value) {
				if ($key != "class") {
					echo $key.'="'.$value.'" ';
				}
			}
			echo ' >';

			

			echo'</div>';
		} catch (Exception $e) {
			echo 'Error while attempting to create errorDiv. CRITICAL. <br />'.$e;
			exit;
		}
	}
}