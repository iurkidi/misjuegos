<?php

namespace uni\bundle\misjuegosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uni\bundle\misjuegosBundle\Entity\plataforma;
use uni\bundle\misjuegosBundle\Form\plataformaType;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * plataforma controller.
 *
 */
class plataformaController extends Controller
{

    public function buscarPlatAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ePlat = $em->getRepository('uniMisJuegosBundle:plataforma')->findAll();
        
        $juegos=new ArrayCollection();
        $nomPlat=null;

        return $this->render('uniMisJuegosBundle:plataforma:buscarPlat.html.twig', array(
            'ePlat' => $ePlat,
            'eJuegos' => $juegos,
            'nomPlat' => $nomPlat
        ));
    }
    
    public function respPlatAction(Request $req)
    {
        $idPlat = $req->request->get('nombre');
        $nomPlat = $req->request->get('nomOculto');
        $em = $this->getDoctrine()->getManager();        
        
        $entidad = $em->getRepository('uniMisJuegosBundle:plataforma')->  find($idPlat);
        
        $ePlat = $em->getRepository('uniMisJuegosBundle:plataforma')->findAll();

        return $this->render('uniMisJuegosBundle:plataforma:buscarPlat.html.twig', array(
            'entidad' => $entidad,
            'ePlat' => $ePlat,
            'nomPlat' => $nomPlat
        ));
    }
    
    
    /**
     * Lists all plataforma entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniMisJuegosBundle:plataforma')->findAll();

        return $this->render('uniMisJuegosBundle:plataforma:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new plataforma entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new plataforma();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('plataforma_show', array('id' => $entity->getId())));
        }

        return $this->render('uniMisJuegosBundle:plataforma:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a plataforma entity.
     *
     * @param plataforma $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(plataforma $entity)
    {
        $form = $this->createForm(new plataformaType(), $entity, array(
            'action' => $this->generateUrl('plataforma_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new plataforma entity.
     *
     */
    public function newAction()
    {
        $entity = new plataforma();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniMisJuegosBundle:plataforma:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a plataforma entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniMisJuegosBundle:plataforma')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find plataforma entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniMisJuegosBundle:plataforma:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing plataforma entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniMisJuegosBundle:plataforma')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find plataforma entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniMisJuegosBundle:plataforma:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a plataforma entity.
    *
    * @param plataforma $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(plataforma $entity)
    {
        $form = $this->createForm(new plataformaType(), $entity, array(
            'action' => $this->generateUrl('plataforma_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing plataforma entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniMisJuegosBundle:plataforma')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find plataforma entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('plataforma_edit', array('id' => $id)));
        }

        return $this->render('uniMisJuegosBundle:plataforma:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a plataforma entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniMisJuegosBundle:plataforma')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find plataforma entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('plataforma'));
    }

    /**
     * Creates a form to delete a plataforma entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('plataforma_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
