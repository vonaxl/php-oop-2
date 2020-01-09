<?php 
  class Persona
  {
    public $nome;
    public $cognome;

    public function __construct($nome,$cognome)
    {
      $this -> nome = $nome;
      $this -> cognome = $cognome;
    }
    public function __toString()
    {
      return
        "<br>Nome - "
        .$this -> nome 
        ."<br>Cognome - "
        .$this -> cognome;
    }
  }

  class Ospite extends Persona 
  {
    public $anno;

    public function __construct($nome,$cognome,$anno)
    {
      parent::__construct($nome,$cognome);
      $this -> anno = $anno;
    }
    public function __toString()
    {
      return
        parent::__toString($nome,$cognome)
        ."<br>Anno nascita : "
        .$this -> anno;
    }
  }

  class Pagante extends Persona 
  {
    public $indirizzo;

    public function __construct($nome,$cognome,$indirizzo)
    {
      parent::__construct($nome,$cognome);
      $this -> indirizzo = $indirizzo;
    }
    public function __toString()
    {
      return
        parent::__toString($nome,$cognome)
        ."<br>Indirizzo : "
        .$this -> indirizzo;
    }
  }
  
  // PRIMA FASE
  echo "<br>---------------<br>";
  echo "PERSONA";
  $p1V1 = new Persona('Axl','fernandez');
  echo $p1V1;

  // SECONDA FASE
  echo "<br>---------------<br>";
  echo "OSPITE";
  $p1V2 = new Ospite('Geralt','di Rivia', 1082);
  echo $p1V2;

  // TERZA FASE
  echo "<br>---------------<br>";
  echo "PAGANTE";
  $p1V3 = new Pagante('Pablo','Escobar', "via Dio Aiutaci tu 665");
  echo $p1V3;
?>