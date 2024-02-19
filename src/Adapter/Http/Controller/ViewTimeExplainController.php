<?php

namespace Adapter\Http\Controller;

use Adapter\Http\Dto\TimeExplainer;
use DateTimeZone;
use Domain\Value\TimeExplain;
use Infrastructure\Form\TimeExplainFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/time", name="time_explain_index")
 */
class ViewTimeExplainController extends AbstractController
{
    public function __invoke(Request $request): Response
    {
        $form = $this->createForm(TimeExplainFormType::class, TimeExplain::withDefaults());

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $submit = $form->getData();
            if (!$submit instanceof TimeExplain) {
                throw new \Exception('Invalid input');
            }

            $dto = new TimeExplainer(
                new \DateTimeImmutable($submit->getDate()),
                new DateTimeZone($submit->getTimezone()),
            );
        }

        return $this->render('time/index.html.twig', [
            'form' => $form->createView(),
            'explain' => $dto ?? null,
        ]);
    }
}
