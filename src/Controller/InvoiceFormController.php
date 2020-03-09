<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\InvoiceRows;
use App\Entity\Invoice;
use App\Form\InvoiceType;
use DateTime;
use http\Env\Response;
use Symfony\Component\HttpFoundation\Request;

class InvoiceFormController extends AbstractController
{
    /**
     * @Route("/form", name="invoice_form")
     */

    public function setInvoiceForm(Request $request){

        $invoiceRow = new InvoiceRows();


        $form = $this->createForm(InvoiceType::class, $invoiceRow, ['action' => $this->generateUrl('invoice_form')]);



        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($invoiceRow);
            $invoice = new Invoice();
            $invoice->setInvoiceNumber($invoiceRow->getInvoiceID());
            $invoice->setInvoiceDate(new \DateTime());
            $invoice->setClientID(1);
            $em->persist($invoice);
            $em->flush();
        }

        return $this->render('invoice_form/form.html.twig', [
            'form' => $form->createView()
        ]);


    }






}
