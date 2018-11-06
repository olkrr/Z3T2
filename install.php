<!doctype html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Instalacja</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	require 'vendor/autoload.php';
	
	$start = microtime(true);
    
    use Config\Database\DBConfig as DB;
	use Config\Database\DBConnection as DBConnection;
    
	Config\Database\DBConnection::setDBConnection(DB::$user,DB::$password, 
                DB::$hostname, DB::$databaseType, DB::$port);	
    try {
        $pdo =  DBConnection::getHandle();
    }catch(\PDOException $e){
        echo \Config\Database\DBErrorName::$connection;
        exit(1);
	}    
	
	

	$query = 'DROP TABLE IF EXISTS `'.DB::$tableNaprawa.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableNaprawa;
	}
	
    $query = 'DROP TABLE IF EXISTS `'.DB::$tableTypMyjki.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableTypMyjki;
	}  
	
	$query = 'DROP TABLE IF EXISTS `'.DB::$tableKlient.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableKlient;
	}
	
    $query = 'DROP TABLE IF EXISTS `'.DB::$tableUzytkownik.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableUzytkownik;
	}  
    
 $query = 'DROP TABLE IF EXISTS `'.DB::$tableStatus.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableStatus;
	}  
    
     $query = 'DROP TABLE IF EXISTS `'.DB::$tableProducent.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableProducent;
	}  
    
     $query = 'DROP TABLE IF EXISTS `'.DB::$tableOsprzet.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableOsprzet;
	}  
    
    $query = 'DROP TABLE IF EXISTS `'.DB::$tableOpcja.'`';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$delete_table.DB::$tableOpcja;
	}
	



	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableTypMyjki.'` (
		`'.DB\TypMyjki::$IDTypMyjki.'` INT NOT NULL AUTO_INCREMENT,
		`'.DB\TypMyjki::$NazwaTypMyjki.'` VARCHAR(20) NOT NULL,
		PRIMARY KEY (IDTypMyjki)) ENGINE=InnoDB;';    
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableTypMyjki;
	}	
    
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableOsprzet.'` (
		`'.DB\Osprzet::$IDOsprzet.'` INT NOT NULL AUTO_INCREMENT,
		`'.DB\Osprzet::$OsprzetNazwa.'` VARCHAR(20) NOT NULL,
		PRIMARY KEY (IDOsprzet)) ENGINE=InnoDB;';    
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableOsprzet;
	}	
    
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableStatus.'` (
		`'.DB\Status::$IDStatus.'` INT NOT NULL AUTO_INCREMENT,
		`'.DB\Status::$StatusNazwa.'` VARCHAR(40) NOT NULL,
		PRIMARY KEY (IDStatus)) ENGINE=InnoDB;';    
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableStatus;
	}

$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableProducent.'` (
		`'.DB\Producent::$IDProducent.'` INT NOT NULL AUTO_INCREMENT,
		`'.DB\Producent::$ProducentNazwa.'` VARCHAR(20) NOT NULL,
		PRIMARY KEY (IDProducent)) ENGINE=InnoDB;';    
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo $e;
        echo \Config\Database\DBErrorName::$create_table.DB::$tableProducent;
        echo "<br>";
	}		

	
	
	
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableKlient.'` (
        `'.DB\Klient::$IDKlient.'` INT AUTO_INCREMENT, 
		`'.DB\Klient::$Imie.'` VARCHAR(30) NOT NULL,
		`'.DB\Klient::$Nazwisko.'` VARCHAR(30) NOT NULL,
		`'.DB\Klient::$NazwaFirmy.'` VARCHAR(50) NULL,
		`'.DB\Klient::$NumerTelefonu.'` VARCHAR(20) NOT NULL,
		`'.DB\Klient::$Email.'` VARCHAR(50) NULL,
        `'.DB\Klient::$Ulica.'` VARCHAR(50) NULL,
        `'.DB\Klient::$NumerDomu.'` VARCHAR(10) NULL,
        `'.DB\Klient::$Miejscowosc.'` VARCHAR(30) NOT NULL,
        `'.DB\Klient::$KodPocztowy.'` VARCHAR(20) NOT NULL,
        `'.DB\Klient::$Uwagi.'` VARCHAR(20) NULL,
		`'.DB\Klient::$Nip.'` VARCHAR(20) NULL,
		PRIMARY KEY (IDKlient)) ENGINE=InnoDB;';
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableKlient;
	}
	
    $query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableOpcja.'` (
		`'.DB\Opcja::$IDOpcja.'` INT NOT NULL AUTO_INCREMENT,
		`'.DB\Opcja::$Opcja.'` VARCHAR(5) NOT NULL,
		PRIMARY KEY (IDOpcja)) ENGINE=InnoDB;';    
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableTypMyjki;
	}	
    
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableNaprawa.'` (
        `'.DB\Naprawa::$IDNaprawa.'` INT AUTO_INCREMENT, 
        `'.DB\Naprawa::$IDKlient.'` INT NOT NULL,
        `'.DB\Naprawa::$IDProducent.'` INT NOT NULL,
		`'.DB\Naprawa::$NazMyjki.'` VARCHAR(20) NOT NULL,
        `'.DB\Naprawa::$IDTypMyjki.'` INT NOT NULL,
        `'.DB\Naprawa::$IDOsprzet.'` INT NOT NULL,
        `'.DB\Naprawa::$CzyWycena.'` INT NOT NULL,
        `'.DB\Naprawa::$Symptomy.'` VARCHAR(200) NOT NULL,
        `'.DB\Naprawa::$Diagnoza.'` VARCHAR(200) NULL,
        `'.DB\Naprawa::$OpisNaprawy.'` VARCHAR(500) NULL,
        `'.DB\Naprawa::$Czesci.'` VARCHAR(100) NULL,
		`'.DB\Naprawa::$DataDostarczenia.'` DATE NOT NULL,
        `'.DB\Naprawa::$DataOdbioru.'` DATE NULL,
        `'.DB\Naprawa::$IDStatus.'` INT NOT NULL,
		`'.DB\Naprawa::$KwotaNaprawy.'` FLOAT NULL,
        `'.DB\Naprawa::$Kartka.'` INT NOT NULL,
        `'.DB\Naprawa::$Kontakt.'` INT NOT NULL,
		PRIMARY KEY (IDNaprawa),
		FOREIGN KEY ('.DB\Naprawa::$IDTypMyjki.') REFERENCES '.DB::$tableTypMyjki.'('.DB\TypMyjki::$IDTypMyjki.') ON DELETE CASCADE,
        FOREIGN KEY ('.DB\Klient::$IDKlient.') REFERENCES '.DB::$tableKlient.'('.DB\Klient::$IDKlient.') ON DELETE CASCADE,
        FOREIGN KEY ('.DB\Naprawa::$IDOsprzet.') REFERENCES '.DB::$tableOsprzet.'('.DB\Osprzet::$IDOsprzet.') ON DELETE CASCADE,
        FOREIGN KEY ('.DB\Naprawa::$IDProducent.') REFERENCES '.DB::$tableProducent.'('.DB\Producent::$IDProducent.') ON DELETE CASCADE,
        FOREIGN KEY ('.DB\Naprawa::$IDStatus.') REFERENCES '.DB::$tableStatus.'('.DB\Status::$IDStatus.') ON DELETE CASCADE,
        FOREIGN KEY ('.DB\Naprawa::$CzyWycena.') REFERENCES '.DB::$tableOpcja.'('.DB\Opcja::$IDOpcja.') ON DELETE CASCADE,
        FOREIGN KEY ('.DB\Naprawa::$Kartka.') REFERENCES '.DB::$tableOpcja.'('.DB\Opcja::$IDOpcja.') ON DELETE CASCADE,
        FOREIGN KEY ('.DB\Naprawa::$Kontakt.') REFERENCES '.DB::$tableOpcja.'('.DB\Opcja::$IDOpcja.') ON DELETE CASCADE
		) ENGINE=InnoDB;';

    //echo $query;
    try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo $query;
            
        echo \Config\Database\DBErrorName::$create_table.DB::$tableNaprawa;
	echo '<br>';
        
    }
	
	
	
	$query = 'CREATE TABLE IF NOT EXISTS `'.DB::$tableUzytkownik.'` (
        `'.DB\Uzytkownik::$ID.'` INT AUTO_INCREMENT, 
		`'.DB\Uzytkownik::$Login.'` VARCHAR(20) UNIQUE NOT NULL,
		`'.DB\Uzytkownik::$Haslo.'` VARCHAR(50) NOT NULL,
		PRIMARY KEY (ID)) ENGINE=InnoDB;';
    
	try
	{
		$pdo->exec($query);
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$create_table.DB::$tableUzytkownik;
	}
    
    
	
	
    
    /*
        wypełnienie tabel danymi
    */  
	
    
    
	$TypyMyjek = array();	
	$TypyMyjek[] = 'Ciepłowodna Spali';
	$TypyMyjek[] = 'Ciepłowodna Elekt';
	$TypyMyjek[] = 'Zimnowodna Elekt';
	$TypyMyjek[] = 'Myjka 230V';
	$TypyMyjek[] = 'Myjka Stacjonarna Z/W';
    $TypyMyjek[] = 'Myjka Stacjonarna C/W';
    
	try
	{
		$stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableTypMyjki.'` (`'.DB\TypMyjki::$NazwaTypMyjki.'`) VALUES(:TypMyjki)');	
		foreach($TypyMyjek as $TypMyjki)
		{
			$stmt -> bindValue(':TypMyjki', $TypMyjki, PDO::PARAM_STR);
			$stmt -> execute(); 
		}
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$noadd;
	}	
	
$Klienci = array();
	$Klienci[] = array(
						'Imie' => 'Juliusz',
						'Nazwisko' => 'Woda',
						'NazwaFirmy' => 'Czyścimat',
						'NumerTelefonu' => '234234234',
						'Email' => 'umyjemycitesciowa@buziaczek.pl',
                        'Ulica' => 'Ruda',
                        'NumerDomu' => '6',
                        'Miejscowosc' => 'Kalisz',
                        'KodPocztowy' => '62-800',
                        'Uwagi' => 'Dłużna pieniądze'
                        );
	$Klienci[] = array(
						'Imie' => 'Bernard',
						'Nazwisko' => 'Haul',
						'NazwaFirmy' => 'Hau-Hau',
						'NumerTelefonu' => '123456345',
						'Email' => '',
                        'Ulica' => 'Nudna',
                        'NumerDomu' => '7',
                        'Miejscowosc' => 'Turek',
                        'KodPocztowy' => '62-700',
                        'Uwagi' => ''
                        );
	$Klienci[] = array(
						'Imie' => 'Andrzej',
						'Nazwisko' => 'Wierci',
						'NazwaFirmy' => 'Wiertła At Midnight',
						'NumerTelefonu' => '123654789',
						'Email' => 'drill@wierci.my',
                        'Ulica' => 'Zadna',
                        'NumerDomu' => '7',
                        'Miejscowosc' => 'Warszawa',
                        'KodPocztowy' => '12-333',
                        'Uwagi' => 'Znizka'
                        );
	
	try
	{
		$stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableKlient.'` (`'.DB\Klient::$Imie.'`, `'.DB\Klient::$Nazwisko.'`, `'.DB\Klient::$NazwaFirmy.'`, `'.DB\Klient::$NumerTelefonu.'`, `'.DB\Klient::$Email.'`, `'.DB\Klient::$Ulica.'`, `'.DB\Klient::$NumerDomu.'`,`'.DB\Klient::$Miejscowosc.'`,
        `'.DB\Klient::$KodPocztowy.'`, `'.DB\Klient::$Uwagi.'`) VALUES(:Imie, :Nazwisko, :NazwaFirmy, :NumerTelefonu, :Email, :Ulica, :NumerDomu, :Miejscowosc, :KodPocztowy, :Uwagi)');	
		foreach($Klienci as $Klient)
		{
			$stmt -> bindValue(':Imie', $Klient['Imie'], PDO::PARAM_STR);
			$stmt -> bindValue(':Nazwisko', $Klient['Nazwisko'], PDO::PARAM_STR);
			$stmt -> bindValue(':NazwaFirmy', $Klient['NazwaFirmy'], PDO::PARAM_STR);
			$stmt -> bindValue(':NumerTelefonu', $Klient['NumerTelefonu'], PDO::PARAM_STR);
			$stmt -> bindValue(':Email', $Klient['Email'], PDO::PARAM_STR);
            $stmt -> bindValue(':Ulica', $Klient['Ulica'], PDO::PARAM_STR);
            $stmt -> bindValue(':NumerDomu', $Klient['NumerDomu'], PDO::PARAM_STR);
            $stmt -> bindValue(':Miejscowosc', $Klient['Miejscowosc'], PDO::PARAM_STR);
            $stmt -> bindValue(':KodPocztowy', $Klient['KodPocztowy'], PDO::PARAM_STR);
            $stmt -> bindValue(':Uwagi', $Klient['Uwagi'], PDO::PARAM_STR);
			$stmt -> execute(); 
		}
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$noadd;
	}   

///////////////////////////////////////////////
	
	$Producenci = array();	
	$Producenci[] = 'Inny/Nieokreślony';
    $Producenci[] = 'Karcher';	
    $Producenci[] = 'Kranzle';
	$Producenci[] = 'Nilfisk/Gerni';
	$Producenci[] = 'Kew/Wap/Stihl/N-Alto';
	$Producenci[] = 'Falch';
    $Producenci[] = 'Oetzen';
    $Producenci[] = 'Erhle';    
    $Producenci[] = 'Rottest';
    $Producenci[] = 'Hako';
    $Producenci[] = 'Comac';
	$Producenci[] = 'Nilfisk Grey';
    $Producenci[] = 'Numatic';
try
	{
		$stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableProducent.'` (`'.DB\Producent::$ProducentNazwa.'`) VALUES(:IDProducent)');	
		foreach($Producenci as $Producent)
		{
			$stmt -> bindValue(':IDProducent', $Producent, PDO::PARAM_STR);
			$stmt -> execute(); 
		}
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$noadd;
	}	
	
/////////////////////////////////////////////////////
	$Statusy = array();	
	$Statusy[] = 'Pozostawiona do wyceny/naprawy';
    $Statusy[] = 'Decyzja o Naprawie';    
    $Statusy[] = 'Zgoda Na naprawę';
    $Statusy[] = 'Odmowa Naprawy';        
    $Statusy[] = 'Naprawa w Trakcie';
    $Statusy[] = 'Naprawiona Do odbioru';
    $Statusy[] = 'Pozostawiona do odbioru';
    $Statusy[] = 'Złom';
    $Statusy[] = 'Puste';   
    $Statusy[] = 'Odebrane';
    $Statusy[] = 'Pozostawiona w Rozliczeniu';
    $Statusy[] = 'Zamieniono';

try
	{
		$stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableStatus.'` (`'.DB\Status::$StatusNazwa.'`) VALUES(:Status)');	
		foreach($Statusy as $Status)
		{
			$stmt -> bindValue(':Status', $Status, PDO::PARAM_STR);
			$stmt -> execute(); 
		}
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$noadd;
	}	
//////////////////////////////////////////////////
	$Osprzety = array();	
	$Osprzety[] = 'Bez Osprzętu';
    $Osprzety[] = 'Z Osprzętem';
    $Osprzety[] = 'Osprzęt Częściowy';
    $Osprzety[] = 'Nie dotyczy';
    

try
	{
		$stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableOsprzet.'` (`'.DB\Osprzet::$OsprzetNazwa.'`) VALUES(:Osprzet)');	
		foreach($Osprzety as $Osprzet)
		{
			$stmt -> bindValue(':Osprzet', $Osprzet, PDO::PARAM_STR);
			$stmt -> execute(); 
		}
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$noadd;
	}
    
//////////////////////////////////////////////////
	$Opcje = array();	
	$Opcje[] = 'Nie';
    $Opcje[] = 'Tak';
    
    

try
	{
		$stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableOpcja.'` (`'.DB\Opcja::$Opcja.'`) VALUES(:Opcja)');	
		foreach($Opcje as $Opcja)
		{
			$stmt -> bindValue(':Opcja', $Opcja, PDO::PARAM_STR);
			$stmt -> execute(); 
		}
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$noadd;
	}		    
//////////////////////////////////////////////////
	$Naprawy = array();	
	$Naprawy[] = array(
						'IDKlient' => '1',
                        'IDProducent' => '2',						
                        'NazMyjki' => 'Karcher HDS1090',
                        'IDTypMyjki' => '3',
						'IDOsprzetu' => '2',
                        'CzyWycena' => '1',
                        'Symptomy' => 'Nie działa',
                        'Diagnoza' => 'Pęknięta głowica',
                        'OpisNaprawy' => 'Oddano na złom na polecenie zleceniodawcy',
                        'Czesci' => 'Żadna',
                        'DataDostarczenia' => '20170305',
                        'DataOdbioru' => '20170305',				
                        'IDStatus' => '8',		
                        'KwotaNaprawy' => '50.0',                     
                        'Kartka' => '1',
                        'Kontakt' => '1');
	
	try
	{
		$stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableNaprawa.'` (`'.DB\Naprawa::$IDKlient.'`,`'.DB\Naprawa::$IDProducent.'`,`'.DB\Naprawa::$NazMyjki.'`, `'.DB\Naprawa::$IDTypMyjki.'`,`'.DB\Naprawa::$IDOsprzet.'`, `'.DB\Naprawa::$CzyWycena.'`,`'.DB\Naprawa::$Symptomy.'`,`'.DB\Naprawa::$Diagnoza.'`,`'.DB\Naprawa::$OpisNaprawy.'`  ,`'.DB\Naprawa::$Czesci.'`,`'.DB\Naprawa::$DataDostarczenia.'`, `'.DB\Naprawa::$DataOdbioru.'`,`'.DB\Naprawa::$IDStatus.'`, `'.DB\Naprawa::$KwotaNaprawy.'`,`'.DB\Naprawa::$Kartka.'`,`'.DB\Naprawa::$Kontakt.'`) VALUES(:IDKlient, :IDProducent, :NazMyjki, :IDTypMyjki, :IDOsprzet, :CzyWycena, :Symptomy, :Diagnoza, :OpisNaprawy, :Czesci, :DataDostarczenia, :DataOdbioru, :IDStatus, :KwotaNaprawy, :Kartka, :Kontakt)');	
        
		foreach($Naprawy as $Naprawa)
		{ 
			//strval($float), nie ma typu PDO::PARAM_FLOAT
			$stmt -> bindValue(':IDKlient', $Naprawa['IDKlient'], PDO::PARAM_INT);
            $stmt -> bindValue(':IDProducent', $Naprawa['IDProducent'], PDO::PARAM_INT);
			$stmt -> bindValue(':NazMyjki', $Naprawa['NazMyjki'], PDO::PARAM_STR);
            $stmt -> bindValue(':IDTypMyjki', $Naprawa['IDTypMyjki'], PDO::PARAM_STR);
            $stmt -> bindValue(':IDOsprzet', $Naprawa['IDOsprzetu'], PDO::PARAM_INT);
            $stmt -> bindValue(':CzyWycena', $Naprawa['CzyWycena'], PDO::PARAM_INT);
            $stmt -> bindValue(':Symptomy', $Naprawa['Symptomy'], PDO::PARAM_STR);
			$stmt -> bindValue(':Diagnoza', $Naprawa['Diagnoza'], PDO::PARAM_STR);
			$stmt -> bindValue(':OpisNaprawy', $Naprawa['OpisNaprawy'], PDO::PARAM_STR);
            $stmt -> bindValue(':Czesci', $Naprawa['Czesci'], PDO::PARAM_STR);
            $stmt -> bindValue(':DataDostarczenia', $Naprawa['DataDostarczenia'], PDO::PARAM_STR);
            $stmt -> bindValue(':DataOdbioru', $Naprawa['DataOdbioru'], PDO::PARAM_STR);
            $stmt -> bindValue(':IDStatus', $Naprawa['IDStatus'], PDO::PARAM_INT);
            $stmt -> bindValue(':KwotaNaprawy', $Naprawa['KwotaNaprawy'], PDO::PARAM_INT);
            $stmt -> bindValue(':Kartka', $Naprawa['Kartka'], PDO::PARAM_INT);
            $stmt -> bindValue(':Kontakt', $Naprawa['Kontakt'], PDO::PARAM_INT);
			$stmt -> execute(); 
		}
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$noadd;
        echo $e;
	}   
	
	$Users = array();
	$Users[] = array(
							'Login' => 'admin',
							'Haslo' => 'admin');
	$Users[] = array(
							'Login' => 'szef',
							'Haslo' => 'szef');
								
	try
	{
		$stmt = $pdo -> prepare('INSERT INTO `'.DB::$tableUzytkownik.'` (`'.DB\Uzytkownik::$Login.'`, `'.DB\Uzytkownik::$Haslo.'`) VALUES(:Login, :Haslo)');	
		foreach($Users as $Uzytkownik)
		{
			//strval($float), nie ma typu PDO::PARAM_FLOAT
			$stmt -> bindValue(':Login', $Uzytkownik['Login'], PDO::PARAM_STR);
			$stmt -> bindValue(':Haslo', md5($Uzytkownik['Haslo']), PDO::PARAM_STR);
			$stmt -> execute();
		}
		
	}
	catch(PDOException $e)
	{
		echo \Config\Database\DBErrorName::$noadd;
	}

	echo "<p><b>Instalacja wykonana w: ".round($time_elapsed_secs = microtime(true) - $start,2)." sekund.</b></p>";
	    
    echo "<b>Instalacja aplikacji zakończona!</b>"
?>
</body>
</html>
