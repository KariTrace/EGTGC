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
	 * @author kari.eve.trace@gmail.com
	 * @since 2013-06-26
	 * @param array $paramater [required] Raw data from a submitted form
	 * @return void Return is dependant on $this->output()
	 */
	public function __construct($paramater)
	{

		// Clean the form data
		$clean_data = new cleaner($paramater);
		
		// If form data is valid
		if ($clean_data->bool) {
			
			// Dump responses
			output::main($clean_data, true);

			// What do we do with valid form data? Set it to session var

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
