<?php
    namespace Controllers;
    
    class Naprawa extends Controller
    {
        public function getAll()
        {
            $view = $this->getView('Naprawa');
            
            $data = null;
            
            if(\Tools\Session::is('message'))
                $data['message'] = \Tools\Session::get('message');
            if(\Tools\Session::is('error'))
                $data['error'] = \Tools\Session::get('error');
            $view->getAll($data);
            \Tools\Session::clear('message');
            \Tools\Session::clear('error');    
		}
        
		public function getAllForSelect()
        {
            $view = $this->getView('Naprawa');
            
            $data = null;
            
            if(\Tools\Session::is('message'))
                $data['message'] = \Tools\Session::get('message');
            if(\Tools\Session::is('error'))
                $data['error'] = \Tools\Session::get('error');
            $view->getAll($data);
            \Tools\Session::clear('message');
            \Tools\Session::clear('error');    
		}
        
		
        public function addform($IDKlient)
        {                    
            $view = $this->getView('Naprawa');
			$view->addform($IDKlient);
        }
        
        public function add(){                        
            $model=$this->getModel('Naprawa');
            $data = $model->add($_POST['IDKlient'], $_POST['IDProducent'], $_POST['NazMyjki'], $_POST['IDTypMyjki'], $_POST['IDOsprzet'], $_POST['CzyWycena'], $_POST['Symptomy'], $_POST['Diagnoza'], $_POST['OpisNaprawy'], $_POST['Czesci'], $_POST['DataDostarczenia'], $_POST['DataOdbioru'], $_POST['IDStatus'], $_POST['KwotaNaprawy'], $_POST['Kartka'], $_POST['Kontakt']);
            
            if(isset($data['error']))
                \Tools\Session::set('error', $data['error']);
            if(isset($data['message']))
                \Tools\Session::set('message', $data['message']);
            //echo $_POST['Kartka'];
            $this->redirect('Naprawa/');
        }
        
        public function delete($IDNaprawa){                 
            $model=$this->getModel('Naprawa'); 
            $data = $model->delete($IDNaprawa);
            if(isset($data['error']))
                \Tools\Session::set('error', $data['error']);
            if(isset($data['message']))
                \Tools\Session::set('message', $data['message']);
			$this->redirect('Naprawa/');            
        }
        
        public function editform($IDNaprawa){
            $model = $this->getModel('Naprawa');
            $data = $model->getOne($IDNaprawa);

            if(isset($data['error'])){
                \Tools\Session::set('error', $data['error']);
			$this->redirect('Naprawa/');            
            }
            $view = $this->getView('Naprawa');
			$view->editform($data['naprawy']);   
        }
        
        
        public function update(){
            $model=$this->getModel('Naprawa');
			
            $data = $model->update($_POST['IDNaprawa'], $_POST['IDKlient'], $_POST['IDProducent'], $_POST['NazMyjki'], $_POST['IDTypMyjki'], $_POST['IDOsprzet'], $_POST['CzyWycena'], $_POST['Symptomy'], $_POST['Diagnoza'], $_POST['OpisNaprawy'], $_POST['Czesci'], $_POST['DataDostarczenia'], $_POST['DataOdbioru'], $_POST['IDStatus'], $_POST['KwotaNaprawy'], $_POST['Kartka'], $_POST['Kontakt']);
            if(isset($data['error']))
                \Tools\Session::set('error', $data['error']);
            if(isset($data['message']))
                \Tools\Session::set('message', $data['message']);
			$this->redirect('Naprawa/');            
        }
        public function getNaprawyForKlient($IDKlient){
            
            $model=$this->getModel('Naprawa');
			//echo $_POST['imie'];
            $data = $model-> getNaprawyForKlient($IDKlient);
            
            $view = $this->getView('Naprawa');
            
            
            if(\Tools\Session::is('message'))
                $data['message'] = \Tools\Session::get('message');
            if(\Tools\Session::is('error'))
                $data['error'] = \Tools\Session::get('error');
            $view->getAll($data);
            //var_dump($data);
            \Tools\Session::clear('message');
            \Tools\Session::clear('error');  
        }
        
        public function faktura($id){
            $model = $this->getModel('Naprawa');
            $data = $model->faktura($id);
            $view = $this->getView('Naprawa');
			$view->faktura($data['faktura']);
        }
    }
    
    
    
    
