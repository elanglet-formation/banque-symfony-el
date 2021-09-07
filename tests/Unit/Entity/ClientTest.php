<?php

namespace App\Tests\Unit\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Client;

class ClientTest extends TestCase
{
    private $client;
    
    public function setUp(): void 
    {
        // L'objet à tester sera recréé avant chaque test !
        $this->client = new Client();
        // On met en place les données de test (fixtures)
        $this->client->setId(1);
        $this->client->setNom("DUPONT");
        $this->client->setPrenom("Robert");
        $this->client->setAdresse("40 rue de la Paix");
        $this->client->setVille("Paris");
        $this->client->setCodepostal("75007");
        $this->client->setMotdepasse("secr3t");
    }
    
    public function testGetId(): void
    {
        // On appelle la méthode à tester
        $id = $this->client->getId();
        // On fait les vérifications (assertions)
        $this->assertEquals(1, $id);
    }
    
    public function testSetId(): void
    {
        $this->client->setId(99);
        // Pas le choix que d'appeller getId() pour controler la valeur.
        // Pas de soucis ! A condition que getId() soit testée !!!!
        $this->assertEquals(99, $this->client->getId());
    }
    
    public function testGetNom(): void 
    {
        $this->assertEquals("DUPOND", $this->client->getNom());
    }
    
    public function testSetNom(): void
    {
        $this->client->setNom("MARTIN");
        $this->assertEquals("MARTIN", $this->client->getNom());
    }
    
    public function testGetPrenom(): void
    {
        $this->assertEquals("Robert", $this->client->getPrenom());
    }
    
    public function testSetPrenom(): void
    {
        $this->client->setPrenom("Stéphane");
        $this->assertEquals("Stéphane", $this->client->getPrenom());
    }
    
    public function testGetAdresse(): void
    {
        $this->assertEquals("40 rue de la Paix", $this->client->getAdresse());
    }
    
    public function testSetAdresse(): void
    {
        $this->client->setAdresse("13 rue Sully");
        $this->assertEquals("13 rue Sully", $this->client->getAdresse());
    }
    
    public function testGetCodepostal(): void
    {
        $this->assertEquals("75007", $this->client->getCodepostal());
    }
    
    public function testSetCodepostal(): void
    {
        $this->client->setCodepostal("44300");
        $this->assertEquals("44300", $this->client->getCodepostal());
    }
    
    public function testGetVille(): void
    {
        $this->assertEquals("Paris", $this->client->getVille());
    }
    
    public function testSetVille(): void
    {
        $this->client->setVille("Nantes");
        $this->assertEquals("Nantes", $this->client->getVille());
    }
    
    public function testGetMotdepasse(): void
    {
        $this->assertEquals("secr3t", $this->client->getMotdepasse());
    }
    
    public function testSetMotdepasse(): void
    {
        $this->client->setMotdepasse("passw0rd");
        $this->assertEquals("passw0rd", $this->client->getMotdepasse());
    }
}
