<?php
// src/Controller/Controladores.php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType; //formularios
use Symfony\Component\Form\Extension\Core\Type\SubmitType; //formularios

//Incluir clase helper Modelo
use App\Entity\Modelo;

define('CON_CONTROLADOR',1);
class Controladores extends AbstractController
{
/**
 * home
 *
 * @return --> devuelve la vista articulos 
 * @Route("/", name="index")
 */
public function home()
{
    $articulos = Modelo::getModelo();
    return $this->render('articulos.twig', array('articulos'=>$articulos));
}

/**
 * articulo
 *
 * @Route("/articulo/{id}", name="articulo")
 * @param  mixed $id El id del arituclo
 * @return Response Devuelve una respuest HHTP con la vista y el articulo solicitdo
 */
public function articulo($id)
{
    $articulo = Modelo::articulo($id);
    return $this->render('detalles_articulo.twig', array('articulo'=>$articulo));
}


/**
 * Esta funcion registra un usuario en la plataforma
 * 
 * @Route("/registro", name="registro")
 * @param  mixed $request Formulario de creqacion de suuario
 * @return  --> devuelve el 
 */
public function registro(Request $request)
{   
    $form = $this->createFormBuilder()
    ->add('Nombre', TextType::class)
    ->add('Apellidos', TextType::class)
    ->add('Direccion', TextType::class)
    ->add('Email', TextType::class)
    ->add('Contrasena', TextType::class)
    ->add('Enviar', SubmitType::class, array('label' => 'Enviar'))
    ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {			
        $Modelo = $form->getData();		
        $nombre = $Modelo['Nombre'];
        return $this->render('registro_correcto.twig', array('nombre'=>$nombre));
    }
    return $this->render('registro.twig', array(
    'form' => $form->createView(),
    ));
}

/** 
 * sugerencias   
 * 
 * @Route("/sugerencias", name="sugerencias")
 * @param  mixed $request
 * @return Response devuelve pagina html con el formulario y el resultado de la consulta
 */
public function sugerencias(Request $request)
{
    $sugerencias = Modelo::sugerencias();

    // Creamos los campos del formulario
    $formulario = array(

        //Vamos a seguir el patrón ('label', 'type', 'name', 'value')
        array('Observación: ', 'text', 'observ', ''),
        array('', 'submit', 'valorar', 'Valorar')
    );
    
    if ($request->query->get('observ'))
    {
        return new Response('<html><body>Grabar ' . $request->query->get('observ') . '</body></html>');
    }

    return $this->render('sugerencias.twig', array(
    'sugerencias' => $sugerencias, 'formulario' => $formulario
    ));
}

}
