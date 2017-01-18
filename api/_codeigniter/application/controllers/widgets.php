<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Widgets extends CI_Controller {


	public function index($day=null,$month=null,$year=null)
	{
		$data['gregorian'] = $this->Kin_model->get_greg($day,$month,$year);
		$data['moon'] = $this->Kin_model->get_moon($data['gregorian']);		
		$data['kin'] = $this->Kin_model->get_kin($data['gregorian']);				
		$data['oracle'] = $this->Kin_model->get_oracle($data['kin']);						
		$data['code_spell'] = $this->Kin_model->get_code_spell($data['kin']);		
		$this->load->view('welcome_message', $data);
		$this->load->view('footer');				
	}
	
	public function demo($day=null,$month=null,$year=null)
	{
		$data['gregorian'] = $this->Kin_model->get_greg($day,$month,$year);
		$data['moon'] = $this->Kin_model->get_moon($data['gregorian']);		
		$data['kin'] = $this->Kin_model->get_kin($data['gregorian']);				
		$data['oracle'] = $this->Kin_model->get_oracle($data['kin']);						
		$data['code_spell'] = $this->Kin_model->get_code_spell($data['kin']);		
		$this->load->view('demo', $data);
		$this->load->view('footer');				
	}
	
	public function oracle_mobile($day=null,$month=null,$year=null)
	{
		if($day != 'kin') {
			$data['gregorian'] = $this->Kin_model->get_greg($day,$month,$year);
			$data['kin'] = $this->Kin_model->get_kin($data['gregorian']);							
		}else {
			$data['kin'] = $this->Kin_model->get_kin_info($month);				
		}		

		$data['oracle'] = $this->Kin_model->get_oracle($data['kin']);						
		$this->load->view('oracle_m', $data);
	}

	public function oracle($day=null,$month=null,$year=null)
	{
		if($day != 'kin') {
			$data['gregorian'] = $this->Kin_model->get_greg($day,$month,$year);
			$data['kin'] = $this->Kin_model->get_kin($data['gregorian']);							
		}else {
			$data['kin'] = $this->Kin_model->get_kin_info($month);				
		}		

		$data['oracle'] = $this->Kin_model->get_oracle($data['kin']);						
		$this->load->view('oracle', $data);
	}	
	
	public function moon($day=null,$month=null,$year=null)
	{
/* 		if($day!=null) $day+=1; */
		$data['gregorian'] = $this->Kin_model->get_greg($day,$month,$year);
		$moon = $this->Kin_model->get_moon($data['gregorian']);	
		$kin = $this->Kin_model->get_kin($data['gregorian']);		
		$data['moon'] = $moon;
		$data['kin'] = $kin;
		$start_kin = $kin->number - $moon->day + 1;		
		if($start_kin > 260) $start_kin -= 260;		
		for($i = 1; $i <= 28; $i++){		
			$moon_kin[$i] = $this->Kin_model->get_kin_info($start_kin);
			$start_kin++;
		}		
		$data['moon_gregorian_days'] = $this->Kin_model->get_moon_gregorian_dates($data['gregorian'], $moon->day - 1);		
		$data['moon_kin'] = $moon_kin;								
		$this->load->view('moon', $data);
		$this->load->view('footer', $data);		
	}

		public function moon_mobile($day=null,$month=null,$year=null)
		{
	/* 		if($day!=null) $day+=1; */
			$data['gregorian'] = $this->Kin_model->get_greg($day,$month,$year);
			$moon = $this->Kin_model->get_moon($data['gregorian']);	
			$kin = $this->Kin_model->get_kin($data['gregorian']);		
			$data['moon'] = $moon;
			$data['kin'] = $kin;
			$start_kin = $kin->number - $moon->day + 1;		
			if($start_kin > 260) $start_kin -= 260;		
			for($i = 1; $i <= 28; $i++){		
				$moon_kin[$i] = $this->Kin_model->get_kin_info($start_kin);
				$start_kin++;
			}		
			$data['moon_gregorian_days'] = $this->Kin_model->get_moon_gregorian_dates($data['gregorian'], $moon->day - 1);		
			$data['moon_kin'] = $moon_kin;								
			$this->load->view('moon_m', $data);
			$this->load->view('footer', $data);		
		}		

	
	public function kin($day=null,$month=null,$year=null) {
		if($day != 'is') {
			$data['gregorian'] = $this->Kin_model->get_greg($day,$month,$year);	
			$data['moon'] = $this->Kin_model->get_moon($data['gregorian']);	
			$data['kin'] = $this->Kin_model->get_kin($data['gregorian']);				
			$data['oracle'] = $this->Kin_model->get_oracle($data['kin']);						
			$data['code_spell'] = $this->Kin_model->get_code_spell($data['kin']);		
			$this->load->view('kin_info', $data);		
			$this->load->view('code_spell', $data);				
			$this->load->view('footer');	
		} else {
			if($month==null) $month=0;
			$data['kin'] = $this->Kin_model->get_kin_info($month);				
			$data['oracle'] = $this->Kin_model->get_oracle($data['kin']);					
			$data['code_spell'] = $this->Kin_model->get_code_spell($data['kin']);		
			$this->load->view('kin_info', $data);		
			$this->load->view('code_spell', $data);				
			$this->load->view('footer');		
		}
	}

	public function kin_mobile($day=null,$month=null,$year=null) {
		if($day != 'is') {
			$data['gregorian'] = $this->Kin_model->get_greg($day,$month,$year);	
			$data['moon'] = $this->Kin_model->get_moon($data['gregorian']);	
			$data['kin'] = $this->Kin_model->get_kin($data['gregorian']);				
			$data['oracle'] = $this->Kin_model->get_oracle($data['kin']);						
			$data['code_spell'] = $this->Kin_model->get_code_spell($data['kin']);		
			$this->load->view('kin_info_m', $data);		
			$this->load->view('code_spell_m', $data);				
			$this->load->view('footer_m');	
		} else {
			if($month==null) $month=0;
			$data['kin'] = $this->Kin_model->get_kin_info($month);				
			$data['oracle'] = $this->Kin_model->get_oracle($data['kin']);					
			$data['code_spell'] = $this->Kin_model->get_code_spell($data['kin']);		
			$this->load->view('kin_info_m', $data);		
			$this->load->view('code_spell_m', $data);				
			$this->load->view('footer_m');		
		}
	}	

	public function kin_lot($day=null,$month=null,$year=null) {
		if($day != 'is') {
			$data['gregorian'] = $this->Kin_model->get_greg($day,$month,$year);	
			$data['moon'] = $this->Kin_model->get_moon($data['gregorian']);	
			$data['kin'] = $this->Kin_model->get_kin($data['gregorian']);				
			$data['oracle'] = $this->Kin_model->get_oracle($data['kin']);						
			$data['code_spell'] = $this->Kin_model->get_code_spell($data['kin']);		
			$this->load->view('kin_info_lot', $data);		
			$this->load->view('code_spell_lot', $data);				
			$this->load->view('footer_lot');	
		} else {
			if($month==null) $month=0;
			$data['kin'] = $this->Kin_model->get_kin_info($month);				
			$data['oracle'] = $this->Kin_model->get_oracle($data['kin']);					
			$data['code_spell'] = $this->Kin_model->get_code_spell($data['kin']);		
			$this->load->view('kin_info_lot', $data);		
			$this->load->view('code_spell_lot', $data);				
			$this->load->view('footer_lot');		
		}
	}		
	
	public function simple_kin($day=null,$month=null,$year=null) {
		if($day != 'is') {
			$data['gregorian'] = $this->Kin_model->get_greg($day,$month,$year);	
			$data['moon'] = $this->Kin_model->get_moon($data['gregorian']);	
			$data['kin'] = $this->Kin_model->get_kin($data['gregorian']);				
			$this->load->view('simple_kin_info', $data);		
			$this->load->view('footer');	
		} else {
			if($month==null) $month=0;
			$data['kin'] = $this->Kin_model->get_kin_info($month);				
			$this->load->view('simple_kin_info', $data);					
			$this->load->view('footer');
		}
	}
			
	
	public function code_spell($kin_number=null) {
		$data['kin'] = $this->Kin_model->get_kin_info($kin_number);
		$data['code_spell'] = $this->Kin_model->get_code_spell($data['kin']);
		$this->load->view('code_spell', $data);
		$this->load->view('kin_info', $data);		

	}
	
	public function  kin_picker($day=null,$month=null,$year=null) {
		$data['gregorian'] = $this->Kin_model->get_greg($day,$month,$year);	
		$data['moon'] = $this->Kin_model->get_moon($data['gregorian']);	
		$data['kin'] = $this->Kin_model->get_kin($data['gregorian']);				
		$data['oracle'] = $this->Kin_model->get_oracle($data['kin']);						
		$data['code_spell'] = $this->Kin_model->get_code_spell($data['kin']);		
		$this->load->view('kin_picker', $data);		
		$this->load->view('footer');				
	}
	
	public function tzolkin($day=null,$month=null,$year=null) {
		if($day != 'kin') {
			$data['gregorian'] = $this->Kin_model->get_greg($day,$month,$year);	
			$data['moon'] = $this->Kin_model->get_moon($data['gregorian']);	
			$data['kin'] = $this->Kin_model->get_kin($data['gregorian']);				
			$data['oracle'] = $this->Kin_model->get_oracle($data['kin']);						
			$this->load->view('tzolkin', $data);		
			$this->load->view('footer');	
		} else {
			if($month==null) $month=1;
			$data['kin'] = $this->Kin_model->get_kin_info($month);				
			$data['oracle'] = $this->Kin_model->get_oracle($data['kin']);					
			$this->load->view('tzolkin', $data);		
			$this->load->view('footer');		
		}	
	}	
	public function tzolkin_mobile($day=null,$month=null,$year=null) {
		if($day != 'kin') {
			$data['gregorian'] = $this->Kin_model->get_greg($day,$month,$year);	
			$data['moon'] = $this->Kin_model->get_moon($data['gregorian']);	
			$data['kin'] = $this->Kin_model->get_kin($data['gregorian']);				
			$data['oracle'] = $this->Kin_model->get_oracle($data['kin']);						
			$this->load->view('tzolkin_m', $data);		
			$this->load->view('footer');	
		} else {
			if($month==null) $month=1;
			$data['kin'] = $this->Kin_model->get_kin_info($month);				
			$data['oracle'] = $this->Kin_model->get_oracle($data['kin']);					
			$this->load->view('tzolkin_m', $data);		
			$this->load->view('footer');		
		}	
	}	
	
	public function  planet_holon($day=null,$month=null,$year=null) {
		if($day != 'kin') {	
			$data['gregorian'] = $this->Kin_model->get_greg($day,$month,$year);	
			$data['kin'] = $this->Kin_model->get_kin($data['gregorian']);				
		} else {
			if($month==null) $month=1;			
			$data['kin'] = $this->Kin_model->get_kin_info($month);				
			$data['oracle'] = $this->Kin_model->get_oracle($data['kin']);
		}
		$this->load->view('planet-holon', $data);		
		$this->load->view('footer');				
	}
		
	public function time_matrix($day=null,$month=null,$year=null) {
		$data['gregorian'] = $this->Kin_model->get_greg($day,$month,$year);	
		$data['moon'] = $this->Kin_model->get_moon($data['gregorian']);	
		$data['tfi'] = $this->Kin_model->get_time_matrix($data['moon']->number, $data['moon']->day);		
		$this->load->view('time_matrix', $data);		
		$this->load->view('footer');				
	}	
}
