<?php
namespace iBa4x\TC1b;
class main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener{
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  public function onClick(\pocketmine\event\player\PlayerInteractEvent $event){
    if($event->getItem()->getId() == 347){ $level = $this->getServer()->getLevelByName($event->getPlayer()->getLevel()->getName());
      if($level->getTime() >= 12000){
        $level->setTime(\pocketmine\level\Level::TIME_DAY);
      }else{
        $level->setTime(\pocketmine\level\Level::TIME_NIGHT);
      }
    }
  }
}
?>
