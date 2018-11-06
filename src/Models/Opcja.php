<?php

    namespace Models;
    use \PDO;
    class Opcja extends Model
    {
        public function getAll()
        {
        if ($this->pdo === null)
        {
            $data['error'] = \Config\Database\DBErrorName::$connection;
            return $data;
        }
        
        $data = array();
        $data['opcje'] = array();
        try
        {
            $stmt = $this->pdo->query('SELECT * FROM `'.\Config\Database\DBConfig::$tableOpcja.'`');
            $opcje = $stmt->fetchAll();
            $stmt->closeCursor();
            if ($opcje && !empty($opcje))
                $data['opcje'] = $opcje;
        }
        catch(\PDOException $e)	
        {
            $data['error'] = \Config\Database\DBErrorName::$query;
        }   
         return $data;
        }
        
        public function getAllForSelect()
        {
            $data = $this->getAll();
                $opcje = array();
            if (!isset($data['error']))
            foreach($data['opcje'] as $przedmiot)
            $opcje[$przedmiot[\Config\Database\DBConfig\Opcja::$IDOpcja]] = $przedmiot[\Config\Database\DBConfig\Opcja::$Opcja];
            return $opcje;
        
        }
        
        public function getOne($IDOpcja)
        {
            if($this->pdo === null)
            {
                $data['error'] = \Config\Database\DBErrorName::$connection;
                return $data;
            }
            if($IDOpcja === null)
            {
                $data['error'] = \Config\Database\DBErrorName::$nomatch;
                return $data;
            } 
        
            $data = array();
            $data['opcje'] = array();
            try
            {
                $stmt = $this->pdo->prepare('SELECT * FROM  `'.\Config\Database\DBConfig::$tableOpcja.'` WHERE  `'.\Config\Database\DBConfig\Opcja::$IDOpcja.'`=:IDOpcja');
                $stmt->bindValue(':IDOpcja', $IDOpcja, PDO::PARAM_INT); 
                $result = $stmt->execute(); 
                $opcje = $stmt->fetchAll();
                $stmt->closeCursor();
                if ($opcje && !empty($opcje))
				{
                    $data['opcje'] = $opcje[0];
				}
                else
				{
                    $data['error'] = \Config\Database\DBErrorName::$nomatch;
				}
            }
            catch(\PDOException $e)
            {
                var_dump($e);
                $data['error'] = \Config\Database\DBErrorName::$query;
            }
            return $data;
		} 
            
     }
    
    
    
