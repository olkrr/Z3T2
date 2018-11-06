<?php
    namespace Views;
    
    class Klient extends View
    {
        public function getAll($data = null)
        {
            if(isset($data['message']))
                $this->set('message',$data['message']);
            if(isset($data['error']))
                $this->set('error',$data['error']); 
            $model = $this->getModel('Klient');
            $data = $model->getAll();
			$this->set('klienci', $data['klienci']);
            if(isset($data['error']))
                $this->set('error', $data['error']);
            $this->set('customScript', array('Klient'));
			$this->render('KlientGetAll');
		}
        
         public function addform()
         {
            $this->set('customScript', array('jquery.validate.min', 'KlientAddForm'));
			$this->render('KlientAddForm');
        }
      
        public function editform($Klient){
            $this->set('Klient', $Klient);
            if(isset($data['error']))
                $this->set('error', $data['error']);
            $this->set('customScript', array('Klient'));
			$this->render('KlientEditForm');
        }   
        /*
        public function editform($Klient){
			//d($klient);
            $this->set('IDKlient', $Klient[\Config\Database\DBConfig\Klient::$IDKlient]);
            $this->set('Imie', $Klient[\Config\Database\DBConfig\Klient::$Imie]);
            $this->set('Nazwisko', $Klient[\Config\Database\DBConfig\Klient::$Nazwisko]);
            $this->set('NazwaFirmy', $Klient[\Config\Database\DBConfig\Klient::$NazwaFirmy]);
            $this->set('NumerTelefonu', $Klient[\Config\Database\DBConfig\Klient::$NumerTelefonu]);
            $this->set('Email', $Klient[\Config\Database\DBConfig\Klient::$Email]);
            $this->set('Ulica', $Klient[\Config\Database\DBConfig\Klient::$Ulica]);
			$this->set('NumerDomu', $Klient[\Config\Database\DBConfig\Klient::$NumerDomu]);
			$this->set('Miejscowosc', $Klient[\Config\Database\DBConfig\Klient::$Miejscowosc]);
			$this->set('KodPocztowy', $Klient[\Config\Database\DBConfig\Klient::$KodPocztowy]);
			$this->set('Uwagi', $Klient[\Config\Database\DBConfig\Klient::$Uwagi]);
            $this->set('customScript', array('jquery.validate.min', 'KlientAddForm'));
			$this->render('KlientEditForm');
        }   */
    }
