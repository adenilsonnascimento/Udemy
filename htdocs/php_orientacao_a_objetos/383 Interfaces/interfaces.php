<?php
// Definição de uma interface chamada EquipamentoEletronicoInterface, que define dois métodos obrigatórios: ligar() e desligar().
interface EquipamentoEletronicoInterface
{
	public function ligar(); // Método obrigatório para ligar o equipamento.
	public function desligar(); // Método obrigatório para desligar o equipamento.
}

// Classe Geladeira implementa a interface EquipamentoEletronicoInterface, garantindo a implementação dos métodos ligar() e desligar().
class Geladeira implements EquipamentoEletronicoInterface
{
	public function abrirPorta()
	{ // Método específico da classe Geladeira para abrir a porta.
		echo 'Abrir a porta';
	}
	public function ligar()
	{ // Implementação do método ligar() definido na interface.
		echo 'Ligar';
	}
	public function desligar()
	{ // Implementação do método desligar() definido na interface.
		echo 'Desligar';
	}
}

// Classe TV implementa a interface EquipamentoEletronicoInterface, garantindo a implementação dos métodos ligar() e desligar().
class TV implements EquipamentoEletronicoInterface
{
	public function trocarCanal()
	{ // Método específico da classe TV para trocar de canal.
		echo 'Trocar canal';
	}
	public function ligar()
	{ // Implementação do método ligar() definido na interface.
		echo 'Ligar';
	}
	public function desligar()
	{ // Implementação do método desligar() definido na interface.
		echo 'Desligar';
	}
}

$x = new Geladeira(); // Instancia um objeto da classe Geladeira.
$y = new TV(); // Instancia um objeto da classe TV.

//-------------------------
// Definição de uma interface chamada MamiferoInterface, que define o método respirar().
interface MamiferoInterface
{
	public function respirar(); // Método obrigatório para que um mamífero respire.
}

// Definição de uma interface chamada TerrestreInterface, que define o método andar().
interface TerrestreInterface
{
	public function andar(); // Método obrigatório para que um ser terrestre ande.
}

// Definição de uma interface chamada AquaticoInterface, que define o método nadar().
interface AquaticoInterface
{
	public function nadar(); // Método obrigatório para que um ser aquático nade.
}

// Classe Humano implementa as interfaces MamiferoInterface e TerrestreInterface, garantindo a implementação dos métodos respirar() e andar().
class Humano implements MamiferoInterface, TerrestreInterface
{
	public function andar()
	{ // Implementação do método andar() definido na interface TerrestreInterface.
		echo 'Andar';
	}
	public function respirar()
	{ // Implementação do método respirar() definido na interface MamiferoInterface.
		echo 'Respirar';
	}
	public function conversar()
	{ // Método específico da classe Humano para conversar.
		echo 'Conversar';
	}
}

// Classe Baleia implementa as interfaces MamiferoInterface e AquaticoInterface, garantindo a implementação dos métodos respirar() e nadar().
class Baleia implements MamiferoInterface, AquaticoInterface
{
	public function respirar()
	{ // Implementação do método respirar() definido na interface MamiferoInterface.
		echo 'Respirar';
	}
	public function nadar()
	{ // Implementação do método nadar() definido na interface AquaticoInterface.
		echo 'Nadar';
	}
	protected function esguichar()
	{ // Método protegido específico da classe Baleia para esguichar água.
		echo 'Esguichar';
	}
}

//-----------------------------
// Definição de uma interface chamada AnimalInterface, que define o método comer().
interface AnimalInterface
{
	public function comer(); // Método obrigatório para que um animal coma.
}

// Definição de uma interface chamada AveInterface, que estende a interface AnimalInterface, adicionando o método voar().
interface AveInterface extends AnimalInterface
{
	public function voar(); // Método obrigatório para que uma ave voe.
}

// Classe Papagaio implementa a interface AveInterface, garantindo a implementação dos métodos voar() e comer().
class Papagaio implements AveInterface
{
	public function voar()
	{ // Implementação do método voar() definido na interface AveInterface.
		echo 'Voar';
	}
	public function comer()
	{ // Implementação do método comer() definido na interface AnimalInterface.
		echo 'Comer';
	}
}
