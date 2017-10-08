<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Fleet controller.
 *
 * @author Lenic Zhang
 */
class Fleet extends Application
{
	
	/**
	 * Constructor.
	 */
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'fleet';
		
		// build the list of airplanes, to pass on to our view
		$source = $this->airplanes->all();

		// pass on the data to present, as the "vehicles" view parameter
		$this->data['vehicles'] = $source;	
		
		$this->render(); 
	}
	
	/**
	 * Shows just one airplane.
	 * 
	 * @param  int $key the key of an airplane
	 */
    public function show($key)
    {		
		// this is the view we want shown
		$this->data['pagebody'] = 'vehicle';

		// build the list of airplanes, to pass on to our view
		$source = $this->airplanes->get($key);

		// pass on the data to present, as the "vehicles" view parameter
		$this->data['vehicles'] = $source;
		
		// pass on the data to present, adding the author record's fields
		$this->data = array_merge($this->data, (array) $source);

		$this->render();
    }
}
