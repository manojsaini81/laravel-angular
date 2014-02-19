<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	/**
	*/
	public function download($type) {
		/*Excel::create('ExcelName')
        ->sheet('SheetName')
            ->with(array('data1', 'data2'))
        ->export('xls');
		
		$pdf = App::make('dompdf');
		$pdf->loadHTML('<h1>Test</h1>');
		return $pdf->stream();
		*/
		$data = array("first_name" => "manoj", "last_name" => "saini");
		$pdf = PDF::loadView('base.pdf', $data);
		return $pdf->download('invoice.pdf');		        
	}
}