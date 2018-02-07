<?php

namespace Sticks;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class SticksMain extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getLogger()->info(TextFormat::YELLOW. "Sticks v1 by MyNET Enable..");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
}
