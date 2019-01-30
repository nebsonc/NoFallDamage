<?php
declare(strict_types=1);
namespace DeveloperNeb101\NoFallDamage;

use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\plugin\PluginBase;
class Main extends PluginBase implements Listener{
  public function onEnable(){
     $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  public function e_damage(EntityDamageByEntityEvent $event, EntityDamageEvent $event2) {
    if($event === true)
      return true;
  } else if($event2->getCause()===EntityDamageEvent::CAUSE_FALL) {
      $event->setCancelled();
}
}
