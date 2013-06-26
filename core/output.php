<?php
/**
 * Output Class; any output goes via this class one way or another
 */

class output {
	/**
	 * Input processed data, output requested type
	 * @todo Integrat Monolog Library
	 * @param stdClass $parameter [required] Data to be returned to the client
	 * @return json || string
	 */
	public final function main(stdClass $parameter)
	{
		$parameter->return_type = (!isset($parameter->return_type) ? "json" : null);

		//return PHP data
		if (strtolower($parameter->return_type) == "json") {

			print_r(json_encode($parameter));
			exit;
		} else {
			echo '<PRE>';
			print_r($parmater);
			echo '</PRE>';
			exit;
		}

		// If all fails, call itself and dump data.
		echo 'output::main has failed';
		exit;
	}

	/**
	 * Debug method, interface for monolog
	 * @author kari.eve.trace@gmail.com
	 * @since 2013-06-26
	 * @param $parameter [required] PHP data to be dump printed.
	 * @return boolean
	 */
	public final function debugger($parameter)
	{
		echo'<PRE>';
		print_r($parameter);
		echo'</PRE>';
		exit;
	}
}
