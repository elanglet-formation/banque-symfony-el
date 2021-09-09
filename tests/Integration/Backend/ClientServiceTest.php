<?php

namespace App\Tests\Integration\Backend;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Backend\ClientService;
use App\Entity\Client;

class ClientServiceTest extends KernelTestCase
{
    private static $cnx;
    
    private $clientService;
    
    public static function setUpBeforeClass(): void
    {
        // Mise en place d'une connexion PDO pour la mise en place et le nettoyage de la base de test.
        self::$cnx = new \PDO('mysql:host=localhost;port=3306;dbname=banquesf_test', 'root', '');
        // Pour lever des exceptions en cas de problèmes de connexion
        self::$cnx->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    
    public function setUp(): void
    {
        // Initialisation du jeu de données
        self::$cnx->exec(file_get_contents('tests/scripts/init.sql'));
        
        // Récupération de l'EntityManager
        $kernel = self::bootKernel();
        $entityManager = $kernel->getContainer()->get('doctrine')->getManager();
        
        // Ou : 
        // $kernel = self::bootKernel();
        // $entityManager = self::$container->get('doctrine')->getManager();
        
        // Récupérer le ClientService
        $this->clientService = new ClientService($entityManager);
    }
    
    public function tearDown(): void
    {
        // Nettoyage du jeu de données
        self::$cnx->exec(file_get_contents('tests/scripts/clean.sql'));
    }
    
    public function testRechercherClientParId(): void
    {
        // On créé l'objet Client de référence
        $client = new Client();
        $client->setId(1);
        $client->setNom("DUPONT");
        $client->setPrenom("Robert");
        $client->setAdresse("40, rue de la Paix");
        $client->setCodepostal("75007");
        $client->setVille("Paris");
        $client->setMotdepasse("secret");
        
        // On appelle la méthode à tester
        $clientRecupere = $this->clientService->rechercherClientParId(1);
        
        // On compare l'objet récupéré avec l'objet de référence
        $this->assertEquals($client, $clientRecupere);
    }
    
    public function testRechercherTousLesClients(): void
    {
        $listeClients = $this->clientService->rechercherTousLesClients();
        
        // $this->assertEquals(2, count($listeClients));
        
        $this->assertCount(2, $listeClients);
    }

    public function testAjouterClient(): void
    {
        $client = new Client();
        $client->setId(3);
        $client->setNom("DURAND");
        $client->setPrenom("Gilbert");
        $client->setAdresse("136, boulevard Chanzy");
        $client->setCodepostal("49300");
        $client->setVille("Cholet");
        $client->setMotdepasse("123456");
        
        $this->clientService->ajouterClient($client);
        
//         $nombreClients = count($this->clientService->rechercherTousLesClients());
//         $this->assertEquals(3, $nombreClients);

        $this->assertCount(3, $this->clientService->rechercherTousLesClients());
        
        $clientRecupere = $this->clientService->rechercherClientParId(3);
        $this->assertEquals($client, $clientRecupere);
    }
}
