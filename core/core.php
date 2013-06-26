<?php
/**
 * @author kari.eve.trace@gmail.com
 * @since 2013-06-26
 * The basic core form processor for EGTGC.
 */
include_once('./output.php');
include_once('./cleaner.php');

class core {
	
	// Obejct properties
	public $response;

	/**
	 * Build the 'core' form handler
	 * @param array $_REQUEST Raw data from a submitted form
	 * @return void Return is dependant on $this->output()
	 */
	public function __construct($_REQUEST) {
		
		// Clean the form data
		$cleaner = new formCleaner($_REQUEST);
		
		// If form data is valid
		if ($cleaner->clean()) {

			// Dump responses
			$this->output(null, true);
		} else {
			// TODO clean this up if possible. maybe pass a flag into $this->output that will do this encapsilated within it
			$this->response->text = "Form not valid";
			$this->response->bool = false;
			$this->response->return_type = "json";
			$this->ouput($this->response);
		}
	}

	/**
	 * Input processed data, output requested type
	 * @todo Integrat Monolog Library
	 * @param void $paramater Data to be returned to the client
	 * @return  null || void Method response when returning data
	 */
	public function output($paramater = null, $is_valid = true) {

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
}
