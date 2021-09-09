<?php

namespace App\Tests\Integration\Business;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Backend\CompteService;
use App\Backend\ClientService;
use App\Business\BanqueBusiness;
use App\Entity\Client;
use App\Entity\Compte;

class BanqueBusinessTest extends KernelTestCase
{
    private static $cnx;
    
    private $compteService;
    private $clientService;
    
    private $banqueBusiness;
    
    public static function setUpBeforeClass(): void
    {
        // Mise en place d'une connexion PDO pour la mise en place et le nettoyage de la base de test.
        self::$cnx = new \PDO('mysql:host=localhost;port=3306;dbname=banquesf_test', 'banquesf', 'banquesf');
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
        
        //
        $this->compteService = new CompteService($entityManager);
        $this->clientService = new ClientService($entityManager);
        
        $this->banqueBusiness = new BanqueBusiness($this->clientService, $this->compteService);
        
    }
    
    public function tearDown(): void
    {
        // Nettoyage du jeu de données
        self::$cnx->exec(file_get_contents('tests/scripts/clean.sql'));
    }
    
    public function testAuthentifier(): void
    {
        $client = new Client();
        $client->setId(1);
        $client->setNom("DUPONT");
        $client->setPrenom("Robert");
        $client->setAdresse("40, rue de la Paix");
        $client->setCodepostal("75007");
        $client->setVille("Paris");
        $client->setMotdepasse("secret");
        
        $clientRecupere = $this->banqueBusiness->authentifier(1, "secret");
        
        $this->assertEquals($client, $clientRecupere);
    }
    
    public function testAuthentifierErreur(): void
    {
        $this->expectException(\Exception::class);
        $this->banqueBusiness->authentifier(1, "sesqdet");
    }
    
    public function testMesComptes(): void
    {
        $client = $this->clientService->rechercherClientParId(1);
        
        $listeComptes = $this->banqueBusiness->mesComptes($client->getId());
        $this->assertCount(1, $listeComptes);
        
        foreach ($listeComptes as $cpt) {
            $this->assertEquals($client, $cpt->getClient());
        }
    }
}















