<?php
    namespace Views;
    
    class Naprawa extends View
    {
        public function getAll($data = null)
        {
            if(isset($data['message']))
                $this->set('message',$data['message']);
            if(isset($data['error']))
                $this->set('error',$data['error']); 
            $model = $this->getModel('Naprawa');
            
            if (!isset($data['naprawy']) || $data === null){
                $data = $model->getAll();
            }
            
            //var_dump($data);
			$this->set('naprawy', $data['naprawy']);
            
            if(isset($data['error']))
                $this->set('error', $data['error']);
            $this->set('customScript', array('datatables.min', 'table.min'));
			$this->render('NaprawaGetAll');
		}
        public function getAllForSelect()
        {
            if(isset($data['message']))
                $this->set('message',$data['message']);
            if(isset($data['error']))
                $this->set('error',$data['error']); 
            $model = $this->getModel('Naprawa');
            
            $data = $model->getAll();
			$this->set('naprawy', $data['naprawy']);
    
            if(isset($data['error']))
                $this->set('error', $data['error']);
            $this->set('customScript', array('datatables.min', 'table.min'));
			$this->render('NaprawaGetAllForSelect');
		}
         public function addform($IDKlient)
         {
            $this->set('customScript', array('jquery.validate.min', 'NaprawaAddForm'));
			$this->set('IDKlient', $IDKlient);
            
            $model = $this->getModel('Producent'); 
            $producenci = $model->getAllForSelect(); 
            $this->set('producenci', $producenci);
             
            $model = $this->getModel('TypMyjki'); 
            $myjki = $model->getAllForSelect(); 
            $this->set('myjki', $myjki);
             
            $model = $this->getModel('Osprzet'); 
            $osprzet = $model->getAllForSelect(); 
            $this->set('osprzet', $osprzet);
             
            $model = $this->getModel('Status'); 
            $status = $model->getAllForSelect(); 
            $this->set('status', $status);
             
            $model = $this->getModel('Opcja'); 
            $opcje = $model->getAllForSelect(); 
            $this->set('opcje', $opcje);
             
			$this->render('NaprawaAddForm');
        }
        
        public function editform($Naprawa){
            
            /*
            
            $this->set('Naprawa', $Naprawa);
            if(isset($data['error']))
                $this->set('error', $data['error']);
            $this->set('customScript', array('Naprawa'));
			$this->render('NaprawaEditForm');
        }   
            */
            
            //d($Naprawa);
            
            $model = $this->getModel('Producent'); 
            $producenci = $model->getAllForSelect(); 
            $this->set('producenci', $producenci);
             
            $model = $this->getModel('TypMyjki'); 
            $myjki = $model->getAllForSelect(); 
            $this->set('myjki', $myjki);
             
            $model = $this->getModel('Osprzet'); 
            $osprzet = $model->getAllForSelect(); 
            $this->set('osprzet', $osprzet);
             
            $model = $this->getModel('Status'); 
            $status = $model->getAllForSelect(); 
            $this->set('status', $status);
            
            $model = $this->getModel('Opcja'); 
            $opcje = $model->getAllForSelect(); 
            $this->set('opcje', $opcje);
			
			$this->set('IDNaprawa', $Naprawa['IDNaprawa']); 
            $this->set('IDKlient', $Naprawa['IDKlient']);
            $this->set('IDProducent', $Naprawa['IDProducent']);
            $this->set('NazMyjki', $Naprawa['NazMyjki']);
            $this->set('IDTypMyjki', $Naprawa['IDTypMyjki']);
            $this->set('IDOsprzet', $Naprawa['IDOsprzet']);
            $this->set('CzyWycena', $Naprawa['CzyWycena']);
            $this->set('Symptomy', $Naprawa['Symptomy']);
            $this->set('Diagnoza', $Naprawa['Diagnoza']);
            $this->set('OpisNaprawy', $Naprawa['OpisNaprawy']);
            $this->set('Czesci', $Naprawa['Czesci']);
            $this->set('DataDostarczenia', $Naprawa['DataDostarczenia']);
			$this->set('DataOdbioru', $Naprawa['DataOdbioru']);
			$this->set('IDStatus', $Naprawa['IDStatus']);
			$this->set('KwotaNaprawy', $Naprawa['KwotaNaprawy']);
			$this->set('Kartka', $Naprawa['Kartka']);
			$this->set('Kontakt', $Naprawa['Kontakt']);
            $this->set('klienci', $this->getModel('Klient')->getAllForSelect()); 

			if(isset($data['error']))
                $this->set('error', $data['error']);
            $this->set('customScript', array('Naprawa'));
			$this->render('NaprawaEditForm'); 
        } 
        
        /*public function faktura($id){
			$this->set('DataDostarczenia', $id['DataDostarczenia']);
			$this->set('CenaZaSzt', $id['CenaZaSzt']);
			$this->set('Opis', $id['Opis']);
            $this->set('customScript', array('datatables.min', 'table.min'));
			$this->render('NaprawaFaktura');
		}*/
        
        public function faktura($id){
            if(isset($data['message']))
                $this->set('message',$data['message']);
            if(isset($data['error']))
                $this->set('error',$data['error']); 
			$model = $this->getModel('Naprawa');
            $data = $model->faktura($id);
            //var_dump($data);
			$this->set('faktura', $data['faktura']);
            if(isset($data['error']))
                $this->set('error', $data['error']);
            $this->set('customScript', array('Naprawa'));
            $this->render('NaprawaFaktura');
        }
    }