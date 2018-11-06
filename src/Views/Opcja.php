<?php
    namespace Views;
    
    class Opcja extends View
    {
        public function getAll($data = null)
        {
            if(isset($data['message']))
                $this->set('message',$data['message']);
            if(isset($data['error']))
                $this->set('error',$data['error']); 
            $model = $this->getModel('Opcja');
            
            $data = $model->getAll();
			$this->set('opcje', $data['opcje']);
    
            if(isset($data['error']))
                $this->set('error', $data['error']);
            $this->set('customScript', array('datatables.min', 'table.min'));
			$this->render('OpcjeGetAll');
		}  
    }
