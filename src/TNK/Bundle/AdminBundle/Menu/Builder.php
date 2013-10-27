<?php
namespace TNK\Bundle\AdminBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root', array(
            'navbar' => true,
            'push_right' => true,
            'childrenAttributes' => array('class' => 'nav navbar-nav')
        ));

        $menu->addChild('Accueil', array('route' => 'tnk_admin_homepage'));
        //$menu->addChild('Contenu', array('route' => 'categorie'));

        $dropdown = $menu->addChild('Contenu', array(
            'dropdown' => true,
            'caret' => true,
        ));

        // Create a dropdown header
        $dropdown->addChild('Blog', array('dropdown-header' => true));
        $dropdown->addChild('Catégories', array('route' => 'categorie'));
        $dropdown->addChild('Articles', array('route' => 'article'));

        $dropdown->addChild('La Presse', array('dropdown-header' => true));
        $dropdown->addChild('Presse', array('route' => 'presse'));

        $menu->addChild('Site Web', array('route' => 'article_front_index'))->setLinkAttributes(array('target' => '_blank'));

        $menu->addChild('Boutique', array('uri' => '/store/index.php'))->setLinkAttributes(array('target' => '_blank'));

        $menu->addChild('Boutique Admin', array('uri' => '/store/administrator/index.php'))->setLinkAttributes(array('target' => '_blank'));
        
        /*$menu->addChild('Listes', array('route' => 'liste'));
        $menu->addChild('Catégories', array('route' => 'categorie'));

        $menu->addChild('Site Web', array('route' => 'front_home'))->setLinkAttributes(array('target' => '_blank'));*/

        return $menu;
    }
}