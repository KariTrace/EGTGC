<?php
/**
 * Output Class; any output goes via this class one way or another
 */
class output {
	/**
	 * Input processed data, output requested type
	 * @todo Integrat Monolog Library
	 * @param void $paramater Data to be returned to the client
	 * @return  null || void Method response when returning data
	 */
	public final function main($paramater = null, $is_valid = true)
	{

		// Just a dump check for now
		// TODO Add in monolog processing for all output actions
		if ($is_valid) {
			echo "$is_valid is false";
			exit;
		}

		//return PHP data
		if (!$paramater->return_type || !$paramater->return_type == null) {
			return $paramater;

		// Return JSON object
		} elseif (strtolower($paramater->return_type) == "json") {
			return json_encode($paramater);

		// Return data dump
		} elseif (strtolower($paramater->return_type) == "dump") {
			echo '<PRE>';
			print_r($parmater);
			echo '</PRE>';
			exit;
		}

		// If all fails, call itself and dump data.
		$paramater->return_type = "dump";
		return $this->ouput($paramater);
	}

	/**
	 * Debug method, interface for monolog
	 * @author kari.eve.trace@gmail.com
	 * @since 2013-06-26
	 */
	public final function debugger($paramater)
	{
		echo'<PRE>';
		print_r($paramater);
		echo'</PRE>';
		return true;
	}
}
