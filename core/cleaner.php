<?
/**
 * Form cleaner object
 * @author  KT kari.eve.trace@gmail.com
 * @since  2013-06-24
 */
include_once('./output.php');

class cleaner {

	// Object properties
	private $return_data;



	/**
	 * __constructor for cleaner()
	 * @param array $parameter Form data via $_REQUEST
	 * @return  boolen Return if the $_REQUEST data is valid per sanitization
	 */
	public function __construct($parameter) {
		$this->return_data = new stdClass;

		return $this->main($parameter);
	}
	
	/**
	 * Takes input, cleans it.
	 * @param void $parameter Form data passed in from $core->__construct()
	 * @return object $this->repsonse Validated and sanitized return data
	 */
	private function main($parameter) {

		// Put form data into a stdClass k=>v setup
		foreach ($parameter as $key => $value)
		{
			$this->return_data->$key = $value;
		}
		output::main($this->return_data, false);
		
		// Load some cleaning lib here and check form data




		// Return data based on S&V process	
		if (isset($this->return_data->bool) && $this->return_data->bool) {
			$this->return_data->bool = true;
			return $this->return_data;
		} else {

			return output::main($this->return_data, true);
		}
	}
}