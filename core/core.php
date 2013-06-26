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
	 * Get all data from session container. Process data as a complete form
	 * @author kari.eve.trace@gmail.com
	 * @since 2013-06-26
	 * @param object $paramatar [required] Object of completed form(s) data
	 * @return boolean
	 */
	public function processData(object $paramater)
	{
		// Always fail be default
		$return = false;

		return $return;
	}
}

$core = new core($_POST);