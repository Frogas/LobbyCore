<?php

namespace Frogas\Core;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;
use pocketmine\event\player\PlayerJoinEvent;

class LobbyCore extends PluginBase implements Listener{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getLogger()->info("Plugin Created Author by Frogas Reza2175");
        $this->core = new Config($this->getDataFolder()."Core.yml", Config::YAML);
    }
}
