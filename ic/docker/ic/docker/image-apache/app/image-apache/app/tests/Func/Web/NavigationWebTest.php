<?php

namespace App\Tests\Func\Web;

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverBy;

class NavigationWebTest extends TestCase
{
    private $webDriver;
    private $baseUrl;
    
    public function setUp(): void
    {
        // L'adresse du pilote de navigateur, le type de navigateur
        $this->webDriver = RemoteWebDriver::create('http://localhost:4444', DesiredCapabilities::firefox());
        $this->baseUrl = "http://localhost";
    }
    
    public function tearDown(): void
    {
        $this->webDriver->quit();
    }
    
    public function testConnexionClient(): void
    {
        // Ouverture de la page d'accueil
        $this->webDriver->get($this->baseUrl . '/');
        
        // On vérifie le titre de la page
        $titrePage = $this->webDriver->findElement(WebDriverBy::cssSelector('h2'))->getText();
        $this->assertEquals("Bienvenue sur votre Banque en ligne !!!", $titrePage);
        
        // Clique sur le lien "Accès client"
        $this->webDriver->findElement(WebDriverBy::id('link-client'))->click();
        
        // On vérifie le titre 2 "Identification Client"
        $titre2Page = $this->webDriver->findElement(WebDriverBy::cssSelector('h3'))->getText();
        $this->assertEquals("Identification Client", $titre2Page);
        
        
    }
}
