<?php

namespace CanalTP\ScrumBoardItBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * controller of navigation.
 */
class DefaultController extends Controller
{
    public function indexAction()
    {
        $manager = $this->container->get('canal_tp_scrum_board_it.service.manager');
        $service = $manager->getService();

        return $this->render(
            'CanalTPScrumBoardItBundle:Default:index.html.twig',
            array(
                'issues' => $service->getIssues(),
            )
        );
    }

    public function printAction(Request $request)
    {
        $manager = $this->container->get('canal_tp_scrum_board_it.service.manager');
        $service = $manager->getService();
        /* @var $service \CanalTP\ScrumBoardItBundle\Service\AbstractService */
        $selected = $request->request->get('issues');

        return $this->render(
            'CanalTPScrumBoardItBundle:Print:tickets.html.twig',
            array(
                'issues' => $service->getIssues($selected),
            )
        );
    }

    public function addFlagAction(Request $request)
    {
        $manager = $this->container->get('canal_tp_scrum_board_it.service.manager');
        $service = $manager->getService();
        /* @var $service \CanalTP\ScrumBoardItBundle\Service\AbstractService */
        $selected = $request->request->get('issues');
        $service->addFlag($selected);

        return $this->redirect($this->generateUrl('canal_tp_postit_homepage'));
    }
}
