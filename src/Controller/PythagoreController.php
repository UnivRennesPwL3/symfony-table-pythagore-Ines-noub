<?php
namespace App\Controller;

use App\Utility\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PythagoreController extends AbstractController
{
    private PythagoreUtility $pythagoreUtility;

    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }

    #[Route('/pythagore/view', name: 'pythagore_view')]
    public function displayPythagoreAction(): Response
    {
        return $this->render('displayPythagore.html.twig', [
            'pythagore_table' => $this->pythagoreUtility->display(),
            
        ]);
    }
}
