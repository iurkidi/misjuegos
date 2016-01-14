<?php

namespace uni\bundle\misjuegosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uni\bundle\misjuegosBundle\Entity\tipo;
use uni\bundle\misjuegosBundle\Form\tipoType;

/**
 * tipo controller.
 *
 */
class tipoController extends Controller
{

    /**
     * Lists all tipo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniMisJuegosBundle:tipo')->findAll();

        return $this->render('uniMisJuegosBundle:tipo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new tipo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new tipo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipo_show', array('id' => $entity->getId())));
        }

        return $this->render('uniMisJuegosBundle:tipo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a tipo entity.
     *
     * @param tipo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(tipo $entity)
    {
        $form = $this->createForm(new tipoType(), $entity, array(
            'action' => $this->generateUrl('tipo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new tipo entity.
     *
     */
    public function newAction()
    {
        $entity = new tipo();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniMisJuegosBundle:tipo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tipo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniMisJuegosBundle:tipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tipo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniMisJuegosBundle:tipo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tipo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniMisJuegosBundle:tipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tipo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniMisJuegosBundle:tipo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a tipo entity.
    *
    * @param tipo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(tipo $entity)
    {
        $form = $this->createForm(new tipoType(), $entity, array(
            'action' => $this->generateUrl('tipo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing tipo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniMisJuegosBundle:tipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tipo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipo_edit', array('id' => $id)));
        }

        return $this->render('uniMisJuegosBundle:tipo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a tipo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniMisJuegosBundle:tipo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find tipo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipo'));
    }

    /**
     * Creates a form to delete a tipo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
