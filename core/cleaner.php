<?
/**
 * Form cleaner object
 * @author  KT kari.eve.trace@gmail.com
 * @since  2013-06-24
 */
inclused_once('./core.php');

class cleaner extends core{

	// Object properties
	private $return_data;
	private $valid = false;



	/**
	 * __constructor for cleaner()
	 * @param array $paramater Form data via $_REQUEST
	 * @return  boolen Return if the $_REQUEST data is valid per sanitization
	 */
	private function __construct($paramater) {
		return $this->main($paramater);
	}
	
	/**
	 * Takes input, cleans it.
	 * @param void $paramater Form data passed in from $core->__construct()
	 * @return object $this->repsonse Validated and sanitized return data
	 */
	public function main($paramater) {

		// Put form data into a stdClass k=>v setup
		foreach ($paramater as $key => $value)
		{
			$this->return_data->$key = $value;
		}

		// Load some cleaning lib here and check form data




		// Return data based on S&V process	
		if ($this->return_data->bool) {

			$this->return_data->text = "$cleaner->main() is true";
			return $this->output($this->return_data);
		} else {

			return $this->output($this->return_data);
		}
	}
}