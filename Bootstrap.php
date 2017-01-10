<?php

class Shopware_Plugins_Backend_NeuPioBackendLink_Bootstrap extends Shopware_Components_Plugin_Bootstrap
{

    /**
     * Installation method, calls all necessary setup steps
     * @return array|bool
     */
    public function install()
    {
        try {

            //erster Link
            $this->createMenuItem(array(
                'label' => 'Testlink 1',
                'class' => 'sprite-application-block',
                'onclick' => 'window.open("https://www.google.com")',
                'active' => 1,
                'parent' => $this->Menu()->findOneBy(['label' => 'Einstellungen'])
            ));

            //zweiter Link
            $this->createMenuItem(array(
                'label' => 'Testlink 2',
                'class' => 'sprite-application-block',
                'onclick' => 'window.open("https://www.google.com")',
                'active' => 1,
                'parent' => $this->Menu()->findOneBy(['label' => 'Einstellungen'])
            ));

        } catch (Exception $e) {
            return array(
                'success' => false,
                'message' => $e->getMessage()
            );
        }
        return array('success' => true, 'invalidateCache' => array( 'backend' ));
    }


    /**
     * General Bootstrap functions
     */
    public function getCapabilities()
    {
        return array(
            'install' => true,
            'enable' => true,
            'update' => true
        );
    }

    /**
     * Returns the human-readable label of the plugin
     * @return string
     */
    public function getLabel()
    {
        return 'Backendlinks';
    }

    /**
     * Returns the version number of the Plugin
     * @return string
     */
    public function getVersion()
    {
        return "1.0.0";
    }

    /**
     * Returns an array with all the information about the plugin
     * @return array
     */
    public function getInfo() {
        return array(
            'author' => 'Neuland-Pionier | Timo Helmke',
            'version' => $this->getVersion(),
            'copyright' => 'Copyright (c) 2017, Timo Helmke',
            'label' => $this->getLabel(),
            'description' => "",
            'support' => '',
            'link' => 'http://neuland-pionier.de',
            'revision' => '0'
        );
    }
}