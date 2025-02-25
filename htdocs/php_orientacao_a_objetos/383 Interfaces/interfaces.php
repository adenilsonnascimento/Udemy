<?php

// Definição de uma interface que declara métodos que devem ser implementados por qualquer classe que a implemente
interface EquipamentoEletronicoInterface
{
	public function ligar();
	public function desligar();
}

//-----------------------------------------
// Classe Geladeira que implementa a interface EquipamentoEletronicoInterface
class Geladeira implements EquipamentoEletronicoInterface
{
	public function abrirPorta()
	{
		echo 'Abrir Porta <br/>';
	}
	public function ligar()
	{
		echo 'Ligar <br/>';
	}
	public function desligar()
	{
		echo 'Desligar <br/>';
	}
}

// Classe TV que implementa a interface EquipamentoEletronicoInterface
class TV implements EquipamentoEletronicoInterface
{
	public function trocarCanal()
	{
		echo 'Trocar Canal <br/>';
	}
	public function ligar()
	{
		echo 'Ligar <br/>';
	}
	public function desligar()
	{
		echo 'Desligar <br/>';
	}
}

// Instanciando a classe Geladeira e chamando seu método abrirPorta
$geladeira = new Geladeira();
$geladeira->abrirPorta();

// Instanciando a classe TV e chamando seu método trocarCanal
$tv = new TV();
$tv->trocarCanal();

?>
<p>__________________________________________</p>
<?php

// Definição de interfaces para diferentes tipos de comportamento
interface Mamifero
{
	public function respirar();
}
interface Terrestre
{
	public function andar();
}
interface Aquatico
{
	public function nadar();
}

// Classe Humano que implementa as interfaces Mamifero e Terrestre
class Humano implements Mamifero, Terrestre
{
	public function respirar()
	{
		echo 'Respirar <br/>';
	}
	public function andar()
	{
		echo 'Andar <br/>';
	}
	public function falar()
	{
		echo 'Falar <br/>';
	}
}

// Classe Baleia que implementa as interfaces Mamifero e Aquatico
class Baleia implements Mamifero, Aquatico
{
	public function respirar()
	{
		echo 'Respirar <br/>';
	}
	public function nadar()
	{
		echo 'Nadar <br/>';
	}

	protected function esguichar()
	{
		echo 'Esguichar <br/>';
	}
}

// Instanciando a classe Humano e chamando seus métodos
$humano = new Humano();
$humano->respirar();
$humano->andar();
$humano->falar();

// Instanciando a classe Baleia e chamando seus métodos
$baleia = new Baleia();
$baleia->respirar();
$baleia->nadar();

?>

<p>__________________________________________</p>

<?php
// Definição de uma interface Animal
interface Animal
{
	public function comer();
}

// Definição de uma interface Ave que estende a interface Animal
interface Ave extends Animal
{
	public function voar();
}

// Classe Papagaio que implementa a interface Ave
class Papagaio implements Ave
{
	public function voar()
	{
		echo 'Voar <br/>';
	}

	public function comer()
	{
		echo 'Comer <br/>';
	}
}

// Instanciando a classe Papagaio e chamando seus métodos
$papagaio = new Papagaio();
$papagaio->voar();
$papagaio->comer();

?>