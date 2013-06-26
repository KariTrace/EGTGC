<?php
/**
 * Output Class; any output goes via this class one way or another
 */

class output {
	/**
	 * Input processed data, output requested type
	 * @todo Integrat Monolog Library
	 * @param stdClass $parameter [required] Data to be returned to the client
	 * @return null || void Method response when returning data
	 */
	public final function main(stdClass $parameter, $is_valid = true)
	{
		$parameter->return_type = (!isset($parameter->return_type) ? "json" : null);

		//return PHP data
		if (!$parameter->return_type || !$parameter->return_type == null) {
			return $parameter;

		// Return JSON object
		} elseif (strtolower($parameter->return_type) == "json") {
			return json_encode($parameter);

		// Return data dump
		} elseif (strtolower($parameter->return_type) == "dump") {
			echo '<PRE>';
			print_r($parmater);
			echo '</PRE>';
			exit;
		}

		// If all fails, call itself and dump data.
		$parameter->return_type = "dump";
		return $this->ouput($parameter);
	}

	/**
	 * Debug method, interface for monolog
	 * @author kari.eve.trace@gmail.com
	 * @since 2013-06-26
	 * @param stdClass $parameter [required] Object to be dump printed.
	 * @return boolean
	 */
	public final function debugger(stdClass $parameter)
	{
		echo'<PRE>';
		print_r($parameter);
		echo'</PRE>';
		return true;
	}
}
