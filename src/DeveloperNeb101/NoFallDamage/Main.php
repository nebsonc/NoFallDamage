<?php
namespace DeveloperNeb101\NoFallDamage;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\plugin\PluginBase;
class Main extends PluginBase implements Listener{
  public function onEnable(){
     $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  public function e_damage(EntityDamageEvent $event){
    if($event->getCause()===EntityDamageEvent::CAUSE_FALL)
      $event->setCancelled();
  }
}