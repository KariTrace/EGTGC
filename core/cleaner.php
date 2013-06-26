<?
/**
 * Form cleaner object
 * @author  KT kari.eve.trace@gmail.com
 * @since  2013-06-24
 */
include_once('./output.php');

class cleaner {



	/**
	 * __constructor for cleaner()
	 * @param array $parameter [optional] Form data via $_REQUEST
	 * @return boolen Return if the $_REQUEST data is valid per sanitization
	 */
	public function __construct($parameter = null) {

		// Pass data to logic method
		if ($parameter != null) {
			return $this->main($parameter);
		}
	}
	
	/**
	 * Takes input, cleans it.
	 * @param void $parameter Form data passed in from $core->__construct()
	 * @return object $this->repsonse Validated and sanitized return data
	 */
	private function main($parameter) {

		$return_data = new stdClass;

		// Put form data into a stdClass k=>v setup
		foreach ($parameter as $key => $value)
		{
			$return_data->$key = $value;
		}

		// Load some cleaning lib here and check form data
		// TESTING
		$return_data->bool = true;



		// Return data based on S&V process	
		if ($return_data->bool) {
			return $return_data;
		} else {
			output::debugger($return_data);
		}
	}
}