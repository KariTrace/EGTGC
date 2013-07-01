<?php
/**
 * @author kari.eve.trace@gmail.com
 * @since 2013-06-26
 * The basic core form processor for EGTGC.
 */
// Vendor autoload
include_once('../../vendor/autoloader.php');

// Application includes
include_once('./output.php');
include_once('./cleaner.php');

class core {
	
	// Obejct properties
	public $response;

	/**
	 * Build the 'core' form handler
	 * @author kari.eve.trace@gmail.com
	 * @since 2013-06-26
	 * @param array $parameter [required] Raw data from a submitted form
	 * @return void Return is dependant on $this->output()
	 */
	public function __construct($parameter)
	{

		// Clean the form data
		$cleaner = new cleaner();
		$data = $cleaner->__construct($parameter);



		// If form data is valid
		if ($data->bool) {

			// What do we do with valid form data? Set it to session var
			if ( $data->form_name = "process")
			$this->loadSession($data);
			return true;

		} else {
			// TODO clean this up if possible. maybe pass a flag into $this->output that will do this encapsilated within it
			output::debugger($data);
		}
	}

	/**
	 * Get all data from session container. Process data as a complete form
	 * @author kari.eve.trace@gmail.com
	 * @since 2013-06-26
	 * @param object $paramatar [required] Object of completed form(s) data
	 * @return boolean
	 */
	public function loadSession(object $parameter)
	{
		$retun_data = false;

		try {
			// Load dat into SESSION
			foreach ($data as $key => $value) {
				$_SESSION[$key] = $value;
			}

			// Clearn $_POST
			unset($_POST);
		} catch (exception $e) {
			output::debugger($e);
		}

		return $return_data;
	}
}

$core = new core($_POST);