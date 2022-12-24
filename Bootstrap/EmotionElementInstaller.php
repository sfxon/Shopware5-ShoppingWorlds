<?php

namespace mvBackgroundBox\Bootstrap;

use Shopware\Components\Emotion\ComponentInstaller;

class EmotionElementInstaller
{
    /**
     * @var ComponentInstaller
     */
    private $emotionComponentInstaller;

    /**
     * @var string
     */
    private $pluginName;

    /**
     * @param string $pluginName
     * @param ComponentInstaller $emotionComponentInstaller
     */
    public function __construct($pluginName, ComponentInstaller $emotionComponentInstaller)
    {
        $this->emotionComponentInstaller = $emotionComponentInstaller;
        $this->pluginName = $pluginName;
    }

    public function install()
    {
        $sliderboxElement = $this->emotionComponentInstaller->createOrUpdate(
            $this->pluginName,
            'mvCategoriesBox',
            [
                'name' => 'Background Box',
                'xtype' => 'emotion-components-backgroundbox',
                'template' => 'backgroundbox',
                'cls' => 'emotion-backgroundbox-element',
                'description' => 'BackgroundBox by Mindfav, Für Startseite und Kategorien.'
            ]
        );
				
				$sliderboxElement = $this->createMainFields($sliderboxElement);
				//$sliderboxElement = $this->createSubFields($sliderboxElement, 1, true);
				
				/*
				$sliderboxElement = $this->createSubFields($sliderboxElement, 2, true);
				$sliderboxElement = $this->createSubFields($sliderboxElement, 3, true);
				$sliderboxElement = $this->createSubFields($sliderboxElement, 4, true);
				$sliderboxElement = $this->createSubFields($sliderboxElement, 5, true);
				$sliderboxElement = $this->createSubFields($sliderboxElement, 6, true);
				$sliderboxElement = $this->createSubFields($sliderboxElement, 7, true);
				$sliderboxElement = $this->createSubFields($sliderboxElement, 8, true);
				$sliderboxElement = $this->createSubFields($sliderboxElement, 9, true);
				*/
		}
		
		////////////////////////////////////////////////////////////////////
		// Haupt-Felder erstellen.
		////////////////////////////////////////////////////////////////////
		private function createMainFields($sliderboxElement) {
				$allowBlank = true;
				
				$sliderboxElement->createTextField([
            'name' => 'title_box',
            'fieldLabel' => 'Boxen-Titel ',
            'supportText' => 'Titeltext der Box',
            'allowBlank' => $allowBlank
        ]);
				
				$sliderboxElement->createMediaField([
            'name' => 'image_big',
            'fieldLabel' => 'Bild Groß',
            'supportText' => 'Bild',
            'allowBlank' => $allowBlank
        ]);
				
				$sliderboxElement->createTextField([
            'name' => 'dst_url',
            'fieldLabel' => 'Ziel-URL',
            'supportText' => 'URL, die aufgerufen werden soll, wenn der Kunde den Titeltext anklickt.',
            'allowBlank' => $allowBlank
        ]);
				
				$sliderboxElement->createTextField([
            'name' => 'default_color',
            'fieldLabel' => 'Standard-Farbe ',
            'supportText' => 'Standard-Hintergrund Farbe der Box',
            'allowBlank' => $allowBlank
        ]);
				
				$sliderboxElement->createTextField([
            'name' => 'highlite_color',
            'fieldLabel' => 'Highlite-Farbe ',
            'supportText' => 'Hintergrund Farbe der Box, beim Hovern.',
            'allowBlank' => $allowBlank
        ]);
				
				return $sliderboxElement;
    }
}